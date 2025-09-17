<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Formulaire de Vote par Correspondance - UNPI Nord</title>

    <!-- Inclusion des meta commun -->
    <?php
    require_once('head.php');
    ?>
    
    <!-- CSS spécifique au formulaire de vote -->
    <link rel="stylesheet" type="text/css" href="assets/css/vote-correspondance.css">
    
    <!-- reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js?render=6Le_CGwdAAAAACk1QAhteDWpDRg9lbswvnl_pP41"></script>
    
    <script>
        // Initialisation reCAPTCHA
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le_CGwdAAAAACk1QAhteDWpDRg9lbswvnl_pP41', {
                action: 'submit'
            }).then(function(token) {
                document.getElementById('token_response').value = token;
            });
        });

        // Formatage automatique de la date avec slashes
        document.addEventListener('DOMContentLoaded', function() {
            const dateInput = document.getElementById('date');
            
            dateInput.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, ''); // Supprime tout sauf les chiffres
                
                if (value.length >= 2) {
                    value = value.substring(0, 2) + '/' + value.substring(2);
                }
                if (value.length >= 5) {
                    value = value.substring(0, 5) + '/' + value.substring(5, 9);
                }
                
                e.target.value = value;
            });
            
            // Validation de la date
            dateInput.addEventListener('blur', function(e) {
                const value = e.target.value;
                const dateRegex = /^(\d{2})\/(\d{2})\/(\d{4})$/;
                const match = value.match(dateRegex);
                
                if (match) {
                    const day = parseInt(match[1]);
                    const month = parseInt(match[2]);
                    const year = parseInt(match[3]);
                    
                    // Validation basique
                    if (day < 1 || day > 31 || month < 1 || month > 12 || year < 1900 || year > 2100) {
                        e.target.style.borderColor = '#dc3545';
                        e.target.title = 'Date invalide (JJ/MM/AAAA)';
                    } else {
                        e.target.style.borderColor = '#28a745';
                        e.target.title = '';
                    }
                } else if (value.length > 0) {
                    e.target.style.borderColor = '#dc3545';
                    e.target.title = 'Format requis: JJ/MM/AAAA';
                } else {
                    e.target.style.borderColor = '';
                    e.target.title = '';
                }
            });
            
            // Gestion de la signature manuscrite
            const canvas = document.getElementById('signatureCanvas');
            const ctx = canvas.getContext('2d');
            const clearBtn = document.getElementById('clearSignature');
            const saveBtn = document.getElementById('saveSignature');
            const signatureData = document.getElementById('signatureData');
            
            let isDrawing = false;
            let lastX = 0;
            let lastY = 0;
            
            // Configuration du canvas
            ctx.strokeStyle = '#1161AA';
            ctx.lineWidth = 2;
            ctx.lineCap = 'round';
            ctx.lineJoin = 'round';
            
            // Démarrer le dessin
            canvas.addEventListener('mousedown', startDrawing);
            canvas.addEventListener('touchstart', startDrawing);
            
            // Dessiner
            canvas.addEventListener('mousemove', draw);
            canvas.addEventListener('touchmove', draw);
            
            // Arrêter le dessin
            canvas.addEventListener('mouseup', stopDrawing);
            canvas.addEventListener('touchend', stopDrawing);
            canvas.addEventListener('mouseout', stopDrawing);
            
            function startDrawing(e) {
                isDrawing = true;
                const rect = canvas.getBoundingClientRect();
                const scaleX = canvas.width / rect.width;
                const scaleY = canvas.height / rect.height;
                
                if (e.type === 'mousedown') {
                    lastX = (e.clientX - rect.left) * scaleX;
                    lastY = (e.clientY - rect.top) * scaleY;
                } else if (e.type === 'touchstart') {
                    e.preventDefault();
                    lastX = (e.touches[0].clientX - rect.left) * scaleX;
                    lastY = (e.touches[0].clientY - rect.top) * scaleY;
                }
            }
            
            function draw(e) {
                if (!isDrawing) return;
                
                const rect = canvas.getBoundingClientRect();
                const scaleX = canvas.width / rect.width;
                const scaleY = canvas.height / rect.height;
                
                let currentX, currentY;
                
                if (e.type === 'mousemove') {
                    currentX = (e.clientX - rect.left) * scaleX;
                    currentY = (e.clientY - rect.top) * scaleY;
                } else if (e.type === 'touchmove') {
                    e.preventDefault();
                    currentX = (e.touches[0].clientX - rect.left) * scaleX;
                    currentY = (e.touches[0].clientY - rect.top) * scaleY;
                }
                
                ctx.beginPath();
                ctx.moveTo(lastX, lastY);
                ctx.lineTo(currentX, currentY);
                ctx.stroke();
                
                lastX = currentX;
                lastY = currentY;
            }
            
            function stopDrawing() {
                isDrawing = false;
            }
            
            // Effacer la signature
            clearBtn.addEventListener('click', function() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                signatureData.value = '';
            });
            
            // Sauvegarder la signature
            saveBtn.addEventListener('click', function() {
                const dataURL = canvas.toDataURL('image/png');
                signatureData.value = dataURL;
                
                // Feedback visuel
                saveBtn.textContent = '✓ Sauvegardé';
                saveBtn.style.backgroundColor = '#28a745';
                setTimeout(() => {
                    saveBtn.textContent = 'Sauvegarder';
                    saveBtn.style.backgroundColor = '#1161AA';
                }, 2000);
            });
        });
    </script>
</head>

<body>
    <div class="vote-container">
        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'true') {
            echo '<div class="alert alert-success text-center" style="background: #d4edda; color: #155724; padding: 15px; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 20px;">
                    <strong>✅ Vote envoyé avec succès !</strong><br>
                    Votre vote par correspondance a été transmis à l\'UNPI Nord de France.
                  </div>';
        } elseif (isset($_GET['status']) && $_GET['status'] == 'false') {
            echo '<div class="alert alert-danger text-center" style="background: #f8d7da; color: #721c24; padding: 15px; border: 1px solid #f5c6cb; border-radius: 5px; margin-bottom: 20px;">
                    <strong>❌ Erreur lors de l\'envoi</strong><br>
                    Votre vote n\'a pas pu être envoyé. Veuillez réessayer ou contacter l\'UNPI.
                  </div>';
        } elseif (isset($_GET['status']) && $_GET['status'] == 'recaptcha_failed') {
            echo '<div class="alert alert-warning text-center" style="background: #fff3cd; color: #856404; padding: 15px; border: 1px solid #ffeaa7; border-radius: 5px; margin-bottom: 20px;">
                    <strong>⚠️ Vérification de sécurité échouée</strong><br>
                    Veuillez réessayer l\'envoi de votre vote.
                  </div>';
        }
        ?>
        
        <!-- Header Section -->
        <div class="header-section">
            <div class="logo-section">
            <div class="nav-header">
      <a class="nav-brand" href="/">
        <img src="assets/img/logos/logounpi.svg" class="main-logo" alt="logo" id="main_logo">
      </a>
    </div>  
            </div>
            <div class="assembly-info">
                <h2>ASSEMBLÉE GÉNÉRALE</h2>
                <div class="year">2025</div>
            </div>
        </div>

        <!-- Main Title -->
        <h2 class="main-title">FORMULAIRE DE VOTE PAR CORRESPONDANCE</h2>

        <!-- Instructions Section -->
            <div class="deadline">DATE LIMITE DE LA PRISE EN COMPTE DES VOTES: 29 SEPTEMBRE 2025</div>
        <!-- Voter Information -->
        <div class="voter-info">
            <div class="form-group">
                <label for="firstname">Prénom *</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>
            <div class="form-group">
                <label for="name">Nom *</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="adresse">Domicilié(e) au :</label>
                <input type="text" id="adresse" name="adresse" required>
            </div>
        </div>

        <!-- Voting Introduction -->
        <div class="voting-intro">
            <p>Après avoir pris connaissance de l'ordre du jour et des documents annexés à la convocation, souhaite émettre sur chacune des questions soumises à délibération de l'assemblée générale de l'UNPI Nord de France du 30 septembre 2025 au siège de l'association à 12h00, le vote exprimé dans le tableau ci-après :</p>
        </div>

        <!-- Formulaire de vote -->
        <form id="vote-form" method="post" action="/verify.php">
            <input type="hidden" name="page_name" value="Formulaire de Vote par Correspondance">
            <input type="hidden" name="token_response" id="token_response">

        <!-- Voting Sections -->
        <div class="voting-sections">
            <!-- Section 1 -->
            <div class="voting-section">
                <h3 class="deliberation-title">Approbation du PV de l'AG du 25 Mai 2024</h3>
                <div class="vote-options">
                    <label class="vote-option">
                        <input type="radio" name="vote_1" value="pour" class="vote-radio">
                        <span class="vote-label">POUR</span>
                    </label>
                    <label class="vote-option">
                        <input type="radio" name="vote_1" value="contre" class="vote-radio">
                        <span class="vote-label">CONTRE</span>
                    </label>
                    <label class="vote-option">
                        <input type="radio" name="vote_1" value="abstention" class="vote-radio">
                        <span class="vote-label">ABSTENTION</span>
                    </label>
                </div>
            </div>

            <!-- Section 2 -->
            <div class="voting-section">
                <h3 class="deliberation-title">Approbation des comptes de l'exercice comptable 2024</h3>
                <div class="vote-options">
                    <label class="vote-option">
                        <input type="radio" name="vote_2" value="pour" class="vote-radio">
                        <span class="vote-label">POUR</span>
                    </label>
                    <label class="vote-option">
                        <input type="radio" name="vote_2" value="contre" class="vote-radio">
                        <span class="vote-label">CONTRE</span>
                    </label>
                    <label class="vote-option">
                        <input type="radio" name="vote_2" value="abstention" class="vote-radio">
                        <span class="vote-label">ABSTENTION</span>
                    </label>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="voting-section">
                <h3 class="deliberation-title">Candidature de Monsieur Philippe LAIRES, Expert en assurances, au sein du conseil d'administration de l'UNPI Nord</h3>
                <div class="vote-options">
                    <label class="vote-option">
                        <input type="radio" name="vote_3" value="pour" class="vote-radio">
                        <span class="vote-label">POUR</span>
                    </label>
                    <label class="vote-option">
                        <input type="radio" name="vote_3" value="contre" class="vote-radio">
                        <span class="vote-label">CONTRE</span>
                    </label>
                    <label class="vote-option">
                        <input type="radio" name="vote_3" value="abstention" class="vote-radio">
                        <span class="vote-label">ABSTENTION</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="table-note">*Cochez la case correspondante</div>

        <!-- Signature Section -->
        <div class="signature-section">
            <div class="form-group">
                <label for="location">Fait à :</label>
                <input type="text" id="location" name="fait_a">
            </div>
            <div class="form-group">
                <label for="date">Le :</label>
                <input type="text" id="date" name="date" placeholder="JJ/MM/AAAA" maxlength="10" pattern="\d{2}/\d{2}/\d{4}">
            </div>
            <div class="form-group">
                <label for="signature">Signature :</label>
                <div class="signature-container">
                    <canvas id="signatureCanvas" width="400" height="150"></canvas>
                    <div class="signature-controls">
                        <button type="button" id="clearSignature" class="btn-clear">Effacer</button>
                        <button type="button" id="saveSignature" class="btn-save">Sauvegarder</button>
                    </div>
                    <input type="hidden" id="signatureData" name="signature">
                </div>
            </div>
            
            <!-- Bouton d'envoi -->
            <div class="form-group text-center" style="margin-top: 30px;">
                <button type="submit" class="btn-submit">Envoyer le vote</button>
            </div>
        </form>
        </div>

        <!-- Contact Information -->
        <div class="contact-info">
            <p><strong>21 rue d'Inkermann BP 1167 59012 LILLE CEDEX</strong></p>
            <p><strong>Tél: 03.20.57.42.38</strong></p>
            <p><strong>unpi5962@orange.fr</strong></p>
            <p><strong>www.unpi5962.org</strong></p>
            
            <div class="social-icons">
                <a href="https://www.facebook.com/UNPINORD/" target="_blank">
                    <i class="fa fa-facebook"></i> UNPINORD
                </a>
                <a href="https://twitter.com/UNPI_59" target="_blank">
                    <i class="fa fa-twitter"></i> UNPI_59
                </a>
                <a href="https://www.linkedin.com/in/unpi-nord-de-france-753176203/" target="_blank">
                    <i class="fa fa-linkedin"></i> UNPI NORD
                </a>
            </div>
        </div>
    </div>
</body>

</html>
