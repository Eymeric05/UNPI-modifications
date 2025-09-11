<!DOCTYPE html>
<html lang="fr">

<head>
    <title>UNPI Nord</title>

    <!-- Inclusion des meta commun -->
    <?php
    require_once('head.php');
    ?>
    <script src="https://www.google.com/recaptcha/api.js?render=6Le_CGwdAAAAACk1QAhteDWpDRg9lbswvnl_pP41"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le_CGwdAAAAACk1QAhteDWpDRg9lbswvnl_pP41', {
                action: 'submit'
            }).then(function(token) {
                // Add your logic to submit to your backend server here.
                var response = document.getElementById('token_response')

                response.value = token;
            });
        });

        function calculerPrix() {
            var tarif = 15; // Tarif en euros HT par personne
            var nbPersonnes = parseInt(document.getElementById('nbpersonne').value);
            var prixTotal = nbPersonnes * tarif;
            document.getElementById('prix_total').innerText = prixTotal + ' € TTC';
        }
    </script>
    <style>
        .button1 {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button1:hover {
            background-color: #0056b3;
        }
    </style>

</head>

<body>
    <!-- Contact form -->
    <section id="contact">
        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'true') {
            echo ' <div class="col-md-12 alert alert-success text-center">
        Votre demande d\'inscription a bien été envoyé vous allez être redirigé dans 3 secondes</div>';
        ?>
            <script>
                var timer = setTimeout(function() {
                    window.location = 'https://www.apayer.fr/fr/index.html?idCible=unpi5962'
                }, 3000);
            </script>
        <?php
        } elseif (isset($_GET['status']) && $_GET['status'] == 'false') {
            echo ' <div class="col-md-12 alert alert-danger text-center">
            Votre demande d\'inscription n\'a pas été envoyé</div>';
        } ?>

        <div class="container col-md-8">
            <!-- Titre contact -->
            <div class="section-heading "></div>
            <h4 style="color: #fff; text-align: center; padding-top: 2rem;">
                INSCRIPTION ASSEMBLÉE GÉNÉRALE </h4>
            <h4 style="color: #ffffff; text-align: center; padding-top: 2rem;">Hôtel Mercure de Marcq en Baroeul</h4>
            <p style="color: #ffffff; text-align: center; padding-top: 1.7rem;"> Samedi 25 mai 2024 de 09h30 à 12h30</p>
            <div class="section-heading-line-left" style="margin: 1rem auto 3rem auto;"></div>
        </div>
        </div>
        <!-- Formulaire -->
        <div class="row">
            <div class="col-12">
                <form id="contact-form" method="post" action="/verify.php ">
                    <div class="container">
                        <div class="row">
                        <input type="hidden" name="page_name" value="<?= htmlspecialchars('Assemblée Générale') ?>">
                            <!-- Prénom -->
                            <div class="col-md-6">
                                <input type="hidden" name="token_response" id="token_response">
                                <label for="firstname">Prénom *</label>
                                <input id="firstname" type="text" name="firstname" class="form-control" placeholder="votre prénom" required>
                                <p class="comments"></p>
                            </div>

                            <!-- Nom -->
                            <div class="col-md-6">
                                <label for="name">Nom *</label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="votre nom" required>
                                <p class="comments"></p>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <label for="email">Email *</label>
                                <input id="email" type="email" name="email" class="form-control" placeholder="votre email" required>
                                <p class="comments"></p>
                            </div>

                            <!-- Téléphone -->
                            <div class="col-md-6">
                                <label for="phone">Téléphone *</label>
                                <input id="phone" type="tel" name="phone" class="form-control" placeholder="votre numéro de téléphone" required>
                                <p class="comments"></p>
                            </div>


                            <!-- Adresse -->
                            <div class="col-md-6">
                                <label for="adresse">Adresse *</label>
                                <input id="adresse" type="text" name="adresse" class="form-control" placeholder="votre adresse" required>
                                <p class="comments"></p>
                            </div>
                            <!-- Ville -->
                            <div class="col-md-6">
                                <label for="ville">Ville *</label>
                                <input id="ville" type="text" name="ville" class="form-control" placeholder="Ville" required>
                                <p class="comments"></p>
                            </div>

                            <!-- Code Postal -->
                            <div class="col-md-6">
                                <label for="codepostal">Code postal *</label>
                                <input id="codepostal" type="text" name="codepostal" class="form-control" pattern="[0-9]{4,5}" placeholder="Code Postal" required>
                                <p class="comments"></p>
                            </div>
                            <!-- Nombre de participant -->

                            <div class="col-md-6">
                                <label for="nbpersonne">Nombre de participant *</label>
                                <input id="nbpersonne" type="number" name="nbpersonne" class="form-control" placeholder="Nombre de participant" min="1" required onchange="calculerPrix()">

                                <!-- Message requis -->
                                <div class="col-md-12">
                                    <p style="color: #fff"><b> * Ces informations sont requises</b></p>
                                </div>


                            </div>
                            <div class="col-md-6">
                                <h4 style="color: #fff; padding-top: 2rem;">Prix total : <span id="prix_total">0 € TTC</span> </h4>
                            </div>

                            <!-- Envoyer -->
                            <div class="col-md-12">
                                <div class="col-md-12 text-center mb-50">
                                    <input type="submit" value="Je m'inscris" class="button1">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    </main>

</body>

</html>