<!DOCTYPE html>
<html lang="fr">

<head>
    <title>UNPI Nord - Assemblée Générale 2025</title>

    <!-- Inclusion des meta commun -->
    <?php
    $description = 'Inscrivez-vous à l\'Assemblée Générale 2025 de l\'UNPI Nord. Découvrez les informations et modalités d\'inscription.';
    require_once('head.php');
    ?>
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
        <div class="page-title-section" style="background-image: url('assets/img/parralax-test.jpg');">
            <div class="container">
                <h1>ASSEMBLÉE GÉNÉRALE 2025</h1>
            </div>
        </div>
        <!-- Page Title END -->

        <!-- Vote START -->
        <div class="section-block">
            <div class="container">
                <div class="section-heading center-holder">
                    <h5>VOTE PAR CORRESPONDANCE</h5>
                    <span style="font-size: 22px;">Participez au vote de l'Assemblée Générale 2025</span>
                    <div class="section-heading-line"></div>
                </div>
                <div style="justify-content: center;" class="row mt-30">
                    <!-- Vote par correspondance -->
                    <div class="col-md-5 col-sm-6 col-12">
                        <div class="shop-grid">
                            <div class="shop-grid-info">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <h4><a href="vote-correspondance">Vote par correspondance</a></h4>
                                    </div>
                                </div>
                            </div>
                            <ul>
                                <p>- Remplissez le formulaire en ligne</p><br>
                                <p>- Signez électroniquement</p><br>
                            </ul>
                            <div class="center-holder">
                                <a href="vote-correspondance" class="position-relative primary-button button-md mt-10">VOTER EN LIGNE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vote END -->

        <?php require_once 'newsletter.php' ?>
    </main>

    <!-- Div nécessaire pour l'effet paralaxe sur le footer -->
    <div style="height: 2rem"></div>

    <!-- Scroll to top button Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

    <!-- Inclusion du footer pour mobile/tablette et scripts-->
    <?php
    include_once("mobileFooter.php");
    include_once("script.php");
    ?>

</body>

</html>
