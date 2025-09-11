<!DOCTYPE html>
<html lang="fr">

<head>
    <title>UNPI Nord - Les Acquis de la Fédération</title>

    <?php
    $description = 'Découvrez les l#équipe.';
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
        <!-- Page Title -->
        <div class="page-title-section" style="background-image: linear-gradient(rgba(17, 17, 17, 0.49), rgba(17, 17, 17, 0.49)), url('assets/img/parralax_5.jpg'); position: relative;">
            <div class="container">
                <h1>Qui sommes-nous</h1>
            </div>
        </div>

        <!-- Notre Equipe -->
        <div class="section-block-grey">
            <div class="container">
                <div class="section-heading center-holder">
                    <span>Vos interlocuteurs !</span>
                    <h3>Notre équipe dirigeante</h3>
                    <div class="section-heading-line"></div>
                    <p>
                        L'équipe de l'UNPI Nord, au fil des années, a accumulé les expériences
                        afin de vous accompagner au mieux dans le conseil et la représentation
                        des propriétaires immobiliers. Grâce à notre équipe pluridisciplinaire,
                        regroupant un large spectre de spécialités, nous sommes en mesure de répondre
                        aux problématiques concernant la location, la copropriété, les voies d'exécution
                        et les assurances. De plus, nous avons choisi des partenaires fiables et à
                        l'écoute pouvant répondre à vos besoins et/ou interrogations.
                    </p>
                    <span>Notre groupe se compose de :</span>
                </div>
                <div class="row mt-50">
                    <!-- Thierry LORIEUX -->
                    <div class="col-lg col-md-4 col-sm-6 col-12">
                        <div class="team-box">
                            <div class="team-img">
                                <img src="assets/img/equipe/thierry_lorieux.jpg"
                                    alt="photo de Thierry Lorieux, Président" style="height:auto">
                            </div>
                            <div class="team-info">
                                <span>Président</span>
                                <h4>Thierry LORIEUX</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Damien DECOUVELAERE -->
                    <div class="col-lg col-md-4 col-sm-6 col-12">
                        <div class="team-box">
                            <div class="team-img">
                                <img src="assets/img/equipe/damien.PNG"
                                    alt="photo de Damien DECOUVELAERE, Vice - Président" style="height:auto;">
                            </div>
                            <div class="team-info">
                                <span>Vice - Président</span>
                                <h4>Damien DECOUVELAERE</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Arnaud DASSONVILLE -->
                    <div class="col-lg col-md-4 col-sm-6 col-12">
                        <div class="team-box">
                            <div class="team-img">
                                <img src="assets/img/equipe/Arnaud_DASSONVILLE2.jpg"
                                    alt="photo de Arnaud DASSONVILLE, Vice - Président" style="height:auto;">
                            </div>
                            <div class="team-info">
                                <span>Vice - Président</span>
                                <h4>Arnaud DASSONVILLE</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Qui sommes nous Section -->
        <div class="section-block pb-0 pt-0" id="about">
            <div class="container">
                <div class="section-heading">
                    <span>A propos</span>
                    <h3>Qui sommes-nous ?</h3>
                </div>
                <div class="section-heading-line-left" style="margin-bottom: 2.8rem;"></div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="assets/img/imagefinal.jpg" alt="image de la grande place"
                            style="border-radius: 15px; box-shadow: 0px 0px 22px 40px rgba(0,0,0,0.08);margin-bottom: 2rem; margin-top: 2rem;">
                    </div>
                    <div class="col-md-6">
                        <div class="pl-30-md mt-30">
                            <div class="text-content-big mt-20">
                                <p>
                                    La création de l'UNPI a permis de réunir de nombreux propriétaires immobiliers pour
                                    faire
                                    entendre le rôle de la propriété dans le développement de l'hexagone et ainsi faire
                                    reconnaître le patrimoine comme un produit d'épargne à part entière.<br><br>
                                    L'UNPI est un syndicat qui se donne pour mission de promouvoir, faire respecter et
                                    défendre
                                    les droits des propriétaires qui sont d'user, jouir et disposer de leur(s) bien(s)
                                    comme bon
                                    leur semble.<br>
                                    De façon générale, nos objectifs sont de faire appliquer les lois, de rendre les
                                    relations locatives plus flexibles, d'augmenter la visibilité des propriétaires mais
                                    aussi de les
                                    protéger et de les représenter en cas de litiges devant les différentes commissions
                                    concernées.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    require_once("script.php");
    ?>
</body>

</html>