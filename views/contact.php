<!DOCTYPE html>
<html lang="fr">

<head>
    <title>UNPI Nord</title>

    <!-- Inclusion des meta commun -->
    <?php
    $description = 'Vous souhaitez obtenir des informations ou prendre RDV ? Contacter nous sur notre formulaire ou retrouvez nous au 21 rue d\'Inkermann 59012';
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

    <!-- Inclusion de la barre de navigation et le footer avec effet parallaxe -->
    <?php
    require_once('nav.php');
    require_once('footer.php');
    ?>

    <!-- Main Content -->
    <main>
        <!-- Page Title START -->
        <div class="page-title-section" style="background-image: url('assets/img/arras2.jpg');">
            <div class="container">
                <h1>Contact</h1>
            </div>
        </div>
        <!-- Contact Boxes START -->
        <div class="section-block-grey">

            <!-- Titre contact -->
            <div class="section-heading ">
                <h4 style="text-align: center; padding-top: 2rem;">Nos coordonnées</h4>
                <div class="section-heading-line-left" style="margin: 1rem auto 3rem auto;"></div>
            </div>

            <div class="container">
                <div class="row">

                    <!-- Téléphone -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="contact-box" style="border-radius: 1rem">
                            <i class="fa fa-phone-square"></i>
                            <h4>Appelez nous</h4>
                            <span class="contactTo"><a href="tel:0320574238">Tél: 03.20.57.42.38</a></span>
                        </div>
                    </div>

                    <!-- Adresse -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="contact-box" style="border-radius: 1rem">
                            <i class="fa fa-map"></i>
                            <h4>Visitez-nous</h4>
                            <span><a href="contact#map">21 rue d'Inkermann 59000 LILLE</a></span>
                        </div>
                    </div>

                    <!-- E-mail -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="contact-box" style="border-radius: 1rem">
                            <i class="fa fa-envelope"></i>
                            <h4>E-mail</h4>
                            <span class="contactTo"><a href="mailto:unpi5962@orange.fr">unpi5962@orange.fr</a></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Contact form -->
        <section id="contact">
            <div class="container">

                <!-- Titre contact -->
                <div class="section-heading ">
                    <h4 style="color: #fff; text-align: center; padding-top: 2rem;">Contactez-nous</h4>
                    <div class="section-heading-line-left" style="margin: 1rem auto 3rem auto;"></div>
                </div>

                <!-- Formulaire -->
                <div class="row">
                    <div class="col-12">
                        <form id="contact-form" method="post" action="/verify.php">
                            <div class="container">
                                <div class="row">
                                    <?php
                                    if (isset($_GET['status']) && $_GET['status'] == 'true') {
                                        echo '<div class="alert alert-success col-md-12 mt-5"><p>Votre Mail a bien été envoyé</p> </div>';
                                    }
                                    ?>
                                     <input type="hidden" name="page_name" value="<?= htmlspecialchars('contact') ?>">
                                    <!-- Prénom -->
                                    <div class="col-md-6">
                                        <input type="hidden" name="token_response" id="token_response">
                                        <label for="firstname">Prénom *</label>
                                        <input id="firstname" type="text" name="firstname" class="form-control" placeholder="votre prénom" required>
                                    </div>

                                    <!-- Nom -->
                                    <div class="col-md-6">
                                        <label for="name">Nom *</label>
                                        <input id="name" type="text" name="name" class="form-control" placeholder="votre nom" required>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label for="email">Email *</label>
                                        <input id="email" type="email" name="email" class="form-control" placeholder="votre email" required>
                                    </div>

                                    <!-- Téléphone -->
                                    <div class="col-md-6">
                                        <label for="phone">Téléphone *</label>
                                        <input id="phone" type="tel" name="phone" class="form-control" placeholder="votre numéro de téléphone" required>
                                    </div>

                                    <!-- Sujet du message -->
                                    <div class="col-md-12">
                                        <label for="subject">Sujet*</label>
                                        <select id="subject" name="subject" class="form-control">
                                            <option value="">Quel est le sujet de votre message ?</option>
                                            <option value="Je voudrais avoir plus d'informations sur les services.">Je voudrais avoir plus d'informations sur les services.</option>
                                            <option value="Autre message du site">Autre</option>
                                        </select>
                                    </div>

                                    <!-- Textarea -->
                                    <div class="col-md-12">
                                        <label for="message">Message*</label>
                                        <textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4" required></textarea>
                                    </div>

                                    <!-- Message requis -->
                                    <div class="col-md-12">
                                        <p style="color: #fff"><b> * Ces informations sont requises</b></p>
                                    </div>

                                    <!-- Envoyer -->
                                    <div class="col-md-12 text-center mb-50">
                                        <input type="submit" value="envoyer" placeholder="envoyer" class="button1">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>

        <!-- Suivez-nous -->
        <div class="section-block" style="padding: 12px 0px 20px 0;">
            <!-- Titre -->
            <div class="section-heading">
                <h4 style="text-align: center; padding-top: 2rem;">Suivez-nous</h4>
                <div class="section-heading-line-left" style="margin: 1rem auto 3rem auto;"></div>
            </div>

            <!-- Social link -->
            <div class="col-12" style="text-align: center;">
                <div class="footer-social-icons">
                    <ul>
                        <li style="background: #3c5b97;"><a href="https://www.facebook.com/UNPINORD/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li style="background: #2999f5;"><a href="https://twitter.com/UNPI_59" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li style="background: #2484b9;"><a href="https://www.linkedin.com/in/unpi-nord-de-france-753176203/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Map START -->
        <div id="map" class="mt-10">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.833058639892!2d3.057465115427668!3d50.630217979500515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d5852078d939%3A0x63be5ad4589d3bcf!2sUNPI%20Nord%20de%20France!5e0!3m2!1sfr!2sfr!4v1610962321195!5m2!1sfr!2sfr" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <?php require_once 'newsletter.php' ?>
    </main>

    <!-- Div nécessaire pour l'effet paralaxe sur le footer -->
    <div style="height: 2rem"></div>

    <!-- Scroll to top button Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

    <!-- Inclusion du footer pour mobile/tablette et scripts-->
    <?php
    include_once("mobileFooter.php");
    include_once("script.php")
    ?>
</body>

</html>