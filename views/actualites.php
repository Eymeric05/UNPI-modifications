<!DOCTYPE html>
<html lang="fr">

<head>
    <title>UNPI Nord - Les Acquis de la Fédération</title>

    <?php
    $description = 'Découvrez les acquis de la Fédération UNPI pour l\'année 2024. Nos actions et succ§s pour défendre les intérêts des propriétaires immobiliers.';
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
                <h1>Nos actualités</h1>
            </div>
        </div>

        <!-- Context politique -->
        <div class="section-block">
            <div class="container">
                <div class="section-heading center-holder">
                    <h3>Les acquis de la Fédération UNPI pour l'année 2024</h3>
                    <div class="section-heading-line"></div>
                    <div>
                        <p class="lead">
                            L'année 2024 a été marquée par un contexte politique chahuté : quatre Premiers ministres
                            (Elisabeth BORNE, Gabriel ATTAL, Michel BARNIER et François BAYROU) se sont succédé à la
                            tête du Gouvernement, une dissolution a modifié les forces politiques en présence à
                            l'Assemblée
                            nationale et trois Ministres du logement ont été nommés.
                        </p>
                        <p class="lead mt-3">
                            Ce contexte a considérablement freiné l'adoption de mesures législatives et
                            réglementaires
                            et empêché la définition d'un cap clair et stable.
                            Face à cette instabilité, l'UNPI a redoublé d'effort pour faire entendre la voix des
                            propriétaires immobiliers en multipliant les rendez-vous et les prises de position dans
                            la
                            presse et accentué sa participation à de nombreuses auditions parlementaires.

                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Consultation juridiques Boxes Section -->
        <div class="section-block-grey">
            <div class="container">
                <div class="section-heading center-holder">
                    <h3>Communiqués de presse - 10 février 2025</h3>
                    <div class="section-heading-line"></div>
                </div>
                <div class="row mt-50" style="justify-content: center;">
                    <!-- PLF 2025 -->
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="feature-box-long">
                            <h3>Projet de loi de finances pour 2025</h3>
                            <p>
                                Analyse détaillée des 6 principales mesures du PLF 2025 qui impactent directement les
                                propriétaires immobiliers.
                            </p>
                            <button type="button" class="primary-button button-sm article-btn" style="font-size:1rem; margin-top: 1rem;"
                                data-toggle="modal" data-target="#communique-2025-02-10">
                                Voir le communiqué
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Newsletter -->
        <?php require_once 'newsletter.php' ?>

        <!-- Modal article 1 -->
        <div class="modal fade" id="communique-2025-02-10" tabindex="-1" role="dialog" aria-labelledby="modalcommunique-2025-02-10"
            aria-hidden="true">
            <div class="modal-dialog" role="document" style="width: 100%; max-width: 50rem;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalcommunique-2025-02-10">Union Nationale des Propriétaires Immobiliers</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <?php
                        include_once("communique-2025-02-10.php");
                        ?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            style="background: #d21e2b;">FERMER</button>
                    </div>
                </div>
            </div>
        </div>

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