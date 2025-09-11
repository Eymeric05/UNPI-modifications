<?php
error_reporting(E_ALL); // Report all errors during development (consider changing for production)
ini_set('display_errors', 0); // Do not display errors to the user in production
ini_set('log_errors', 1); // Log errors to the server's error log
// ini_set('error_log', '/path/to/your/php-error.log'); // Optional: Specify log file path

// --- Configuration ---
define('RECAPTCHA_SECRET_KEY', '6Le_CGwdAAAAAGbIvlr_q5I1FYi3V0nekbTyW7Vb'); // !!! REPLACE WITH YOUR ACTUAL SECRET KEY !!!
define('RECIPIENT_EMAIL', 'unpi5962@orange.fr'); // The address emails are sent TO
define('SENDER_EMAIL', 'noreply@unpi5962.org'); // !!! REPLACE WITH YOUR DOMAIN'S EMAIL !!! Fixed sender address
define('DEFAULT_REDIRECT_URL', '/'); // Fallback URL if referer is missing or invalid

// --- Field Mappings ---
$champs_correspondances = array(
    'firstname' => 'Prénom',
    'name' => 'Nom',
    'nom' => 'Nom complet',
    'email' => 'Email',
    'phone' => 'Téléphone',
    'telephone' => 'Téléphone',
    'adresse' => 'Adresse',
    'ville' => 'Ville',
    'codepostal' => 'Code Postal',
    'nbpersonne' => 'Nombre de personnes',
    'job' => 'Profession',
    'subject' => 'Sujet',
    'discover' => 'Comment nous avez-vous connus ?',
    'message' => 'Message',
    'vote_1' => 'Vote - Approbation PV AG 25 Mai 2024',
    'vote_2' => 'Vote - Approbation comptes exercice 2024',
    'vote_3' => 'Vote - Candidature Philippe LAIRES',
    'fait_a' => 'Fait à',
    'date' => 'Date',
    'signature' => 'Signature',
);

// --- Functions ---

/**
 * Gets the referring URL, prepares it for adding query parameters,
 * ensures it's from the same host, and provides a fallback.
 */
function getPreparedReferer(): string
{
    $referer = $_SERVER['HTTP_REFERER'] ?? '';
    $allowed_host = $_SERVER['HTTP_HOST'] ?? '';

    // Validate referer: Must exist and be from the same host
    if (empty($referer) || empty($allowed_host) || parse_url($referer, PHP_URL_HOST) !== $allowed_host) {
        $referer = ''; // Discard referer if empty or not from the same host
    }

    if (empty($referer)) {
        // If referer is empty or invalid, use the default fallback
        $base_url = DEFAULT_REDIRECT_URL;
        return $base_url . (strpos($base_url, '?') === false ? '?' : '&');
    }

    // Remove existing status parameter to avoid duplicates
    $referer = preg_replace('/([?&])status=[^&]*&?/', '$1', $referer);
    // Clean trailing ? or & if removal resulted in them
    $referer = rtrim($referer, '?&');

    // Add appropriate separator for the new status parameter
    return $referer . (strpos($referer, '?') === false ? '?' : '&');
}

/**
 * Verifies the Google reCAPTCHA v3 response.
 */
function verifyRecaptcha(string $recaptcha_response): bool
{
    if (empty($recaptcha_response)) {
        return false;
    }

    $remoteip = $_SERVER['REMOTE_ADDR'] ?? '';
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        'secret'   => RECAPTCHA_SECRET_KEY,
        'response' => $recaptcha_response,
        'remoteip' => $remoteip,
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
            'ignore_errors' => true,
            'timeout' => 5,
        ],
    ];
    $context  = stream_context_create($options);
    $get = @file_get_contents($url, false, $context);

    if ($get === false) {
        error_log("reCAPTCHA request failed: Could not contact Google API.");
        return false;
    }

    $decode = json_decode($get, true);

    if ($decode === null) {
         error_log("reCAPTCHA request failed: Invalid JSON response from Google: " . $get);
         return false;
    }

    // For v3, you might want to check the score as well:
    // return isset($decode["success"]) && $decode["success"] === true && isset($decode['score']) && $decode['score'] > 0.5;
    return isset($decode["success"]) && $decode["success"] === true;
}

// --- Main Processing Logic ---

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token_response'])) {

    $recaptcha_response = $_POST['token_response'];
    $referer = getPreparedReferer();

    if (verifyRecaptcha($recaptcha_response)) {
        // reCAPTCHA valid

        $page_name = isset($_POST['page_name']) && !empty(trim($_POST['page_name']))
            ? htmlspecialchars(trim($_POST['page_name']), ENT_QUOTES, 'UTF-8')
            : 'le site UNPI5962';

        $user_email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL) : false;

        $message_body = '<html><head><meta charset="utf-8"></head><body>';
        $message_body .= '<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px;">';
        $message_body .= '<h2 style="color: #1161AA; border-bottom: 2px solid #1161AA; padding-bottom: 10px;">📧 ' . $page_name . '</h2>';
        $message_body .= '<div style="background: #f8f9fa; padding: 15px; border-radius: 5px; margin: 20px 0;">';
        $message_body .= '<h3 style="color: #333; margin-top: 0;">Informations du votant</h3>';

        foreach ($champs_correspondances as $key => $label) {
            if (isset($_POST[$key]) && trim($_POST[$key]) !== '') {
                $value = htmlspecialchars(trim($_POST[$key]), ENT_QUOTES, 'UTF-8');
                
                // Gestion spéciale pour la signature (image)
                if ($key === 'signature' && strpos($value, 'data:image') === 0) {
                    $message_body .= '<p><b>' . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . ' :</b></p>';
                    $message_body .= '<img src="' . $value . '" alt="Signature" style="max-width: 300px; border: 1px solid #ccc; margin: 10px 0;">';
                }
                // Gestion des votes avec formatage spécial
                elseif (in_array($key, ['vote_1', 'vote_2', 'vote_3'])) {
                    $vote_labels = [
                        'vote_1' => 'Approbation du PV de l\'AG du 25 Mai 2024',
                        'vote_2' => 'Approbation des comptes de l\'exercice comptable 2024',
                        'vote_3' => 'Candidature de Monsieur Philippe LAIRES'
                    ];
                    $vote_value = '';
                    switch($value) {
                        case 'pour': $vote_value = '<span style="color: #28a745; font-weight: bold;">✓ POUR</span>'; break;
                        case 'contre': $vote_value = '<span style="color: #dc3545; font-weight: bold;">✗ CONTRE</span>'; break;
                        case 'abstention': $vote_value = '<span style="color: #ffc107; font-weight: bold;">○ ABSTENTION</span>'; break;
                    }
                    $message_body .= '<p><b>' . $vote_labels[$key] . ' :</b> ' . $vote_value . '</p>';
                }
                // Display line breaks correctly in HTML email for multi-line fields
                elseif ($key === 'message' || $key === 'adresse') {
                     $message_body .= '<p><b>' . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . ' :</b><br>' . nl2br($value) . '</p>';
                } else {
                     $message_body .= '<p><b>' . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . ' :</b> ' . $value . '</p>';
                }
            }
        }
        $message_body .= '</div>'; // Ferme la section informations
        $message_body .= '<div style="background: #fff3cd; padding: 15px; border-radius: 5px; margin: 20px 0; border-left: 4px solid #ffc107;">';
        $message_body .= '<p style="margin: 0; font-size: 12px; color: #856404;"><strong>Note :</strong> Ce vote a été envoyé électroniquement via le formulaire de vote par correspondance.</p>';
        $message_body .= '</div>';
        $message_body .= '</div>'; // Ferme le container principal
        $message_body .= '</body></html>';

        $subject = "Nouveau message depuis " . $page_name;

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'From: UNPI Formulaire <' . SENDER_EMAIL . '>' . "\r\n"; // Use fixed sender
        if ($user_email) {
             $headers .= 'Reply-To: ' . $user_email . "\r\n"; // Add validated user email as Reply-To
        }
        $headers .= 'X-Mailer: PHP/' . phpversion();

        $mail_sent = mail(RECIPIENT_EMAIL, $subject, $message_body, $headers);

        if ($mail_sent) {
            header('Location: ' . $referer . 'status=true');
            exit();
        } else {
            error_log("Mail sending failed. To: " . RECIPIENT_EMAIL . ", Subject: " . $subject);
            header('Location: ' . $referer . 'status=false');
            exit();
        }

    } else {
        // reCAPTCHA failed
        error_log("reCAPTCHA verification failed. Referer: " . ($referer ?? 'N/A'));
        header('Location: ' . $referer . 'status=recaptcha_failed');
        exit();
    }

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // POST request but missing token_response
    $referer = getPreparedReferer();
    error_log("Form submission attempt missing token_response. Referer: " . ($referer ?? 'N/A'));
    header('Location: ' . $referer . 'status=missing_token');
    exit();
} else {
    // Optional: Handle direct GET access - Redirect or show simple message
    // header('HTTP/1.1 403 Forbidden');
    // echo "Access Forbidden";
     header('Location: ' . DEFAULT_REDIRECT_URL); // Redirect away
     exit();
}

?>