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
    </script>
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
                <?php
                if (isset($_GET['r'])) {
                    if ($_GET['r'] === 'adhesion') {
                        $page = 'adhesion';
                ?> ADHÉSION <?php
                        } elseif ($_GET['r'] === 'renouvellement') {
                            $page = 'renouvellement';
                            ?> RENOUVELLEMENT <?php
                                            }
                                        }
                                                ?>
            </h4>
            <?php if (isset($_GET['formule'])) {
                $value = ($value = ($_GET['formule']) ? '&formule=' . $_GET['formule'] : '') ? '&formule=' . $_GET['formule'] : '';
                echo '<h4 style="color: #fff; text-align: center; padding-top: 2rem;"> Votre choix : Formule ' . $_GET['formule'];
            } ?></h4>
            <div class="section-heading-line-left" style="margin: 1rem auto 3rem auto;"></div>
        </div>

        
        <!-- Formulaire -->
        <div class="row">
            <div class="col-12">
                <?php (isset($_GET['formule'])) ? $value = ($_GET['formule']) ? '&formule=' . $_GET['formule'] : '' : '' ?>
                <form id="contact-form" method="post" action="/verify.php ">
                    <div class="container">
                        <div class="row">
                            <input type="hidden" name="page_name" value="<?= htmlspecialchars($page) ?>">
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
                            <!-- Profession -->
                            <div class="col-md-6">
                                <label for="job">Profession</label>
                                <input id="job" type="text" name="job" class="form-control" placeholder="votre profession">
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

                            <!-- Sujet du message -->
                            <div class="col-md-12">
                                <label for="subject">Format de réception de la revue *</label>
                                <select id="subject" name="subject" class="form-control">
                                    <option value="">Quel format souhaitez-vous ?</option>
                                    <option value="numérique">numérique</option>
                                    <option value="postale">postale</option>
                                </select>
                                <p class="comments"></p>
                            </div>

                            <?php if (isset($_GET['r'])  && $_GET['r'] === 'adhesion') {
                            ?>
                                <!-- Decouvert -->
                                <div class="col-md-12">
                                    <label for="discover">Comment avez-vous connu l’UNPI Nord ? </label>
                                    <input id="discover" type="textarea" name="discover" class="form-control" placeholder="Comment avez-vous connu l’UNPI Nord ?">
                                    <p class="comments"></p>
                                </div>
                            <?php
                            } ?>

                            <!-- Message requis -->
                            <div class="col-md-12">
                                <p style="color: #fff"><b> * Ces informations sont requises</b></p>
                            </div>
                            <?php if (isset($_GET['r'])  && $_GET['r'] === 'adhesion') { ?>
                                <div class="col-md-12">
                                    <div class="text-content-big mt-40">
                                        <a href="assets/docs/BULLETIN-ADHESION-UNPI-NORD-2025-2026.pdf" download="bulletin_adhesion_unpi_nord">
                                            <div class="download-file-button clearfix">
                                                <h5>Télécharger le formulaire d'adhésion </h5>
                                                <i class="fa fa-file-pdf-o"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                        </div>
                    <?php
                            } elseif ($_GET['r'] === 'renouvellement') {
                    ?> <div class="col-md-12">
                            <div class="text-content-big mt-40">
                                <a href="assets/docs/bulletin_renouvellement_unpi_nord-2025-2026.pdf" download="bulletin_renouvellement_unpi_nord">
                                    <div class="download-file-button clearfix">
                                        <h5>Télécharger le formulaire de renouvellement </h5>
                                        <i class="fa fa-file-pdf-o"></i>
                                    </div>
                                </a>
                            </div>
                        </div> <?php
                            }
                                ?>

                    <!-- Envoyer -->
                    <div class="col-md-12">
                        <div class="col-md-12 text-center mb-50">
                            <input type="submit" value="envoyer" placeholder="envoyer" class="button1">
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