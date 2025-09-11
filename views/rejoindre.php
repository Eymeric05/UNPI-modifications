<!DOCTYPE html>
<html lang="fr">

<head>
    <title>UNPI Nord</title>

    <!-- Inclusion des meta commun -->
    <?php
    $description = 'Vous souhaitez nous rejoindre ? Découvrez nos formules et adhérer en ligne ';
    require_once('head.php');
    ?>
</head>

<body>

    <!-- Inclusion de la barre de navigation et le footer avec effet parallaxe -->
    <?php
    require_once('nav.php');
    require_once('footer.php');
    ?>
    <?php if (isset($_GET['param']) && ($_GET['param'] === 'adherer')) {
    ?>
        <!-- Main Content -->
        <main>
            <!-- Page Title START -->
            <div class="page-title-section" style="background-image: url('assets/img/parralax-test.jpg');">
                <div class="container">
                    <h1>ADHÉRER</h1>
                </div>
            </div>
            <!-- Page Title END -->

            <!-- Shop Grid START -->
            <div class="section-block">
                <div class="container">
                    <div class="section-heading center-holder">
                        <h5>NOS FORMULES ADHÉSION</h5>
                        <span style="font-size: 22px;">La cotisation est entièrement déductible de vos revenus fonciers si vous êtes soumis au régime réel d'imposition.</span>
                        <div class="section-heading-line"></div>
                    </div>
                    <div style="justify-content: center;" class="row mt-30">
                        <!-- Product Start -->
                        <div class="col-md-5 col-sm-6 col-12">
                            <div class="shop-grid">
                                <div class="shop-grid-info">
                                    <div class="row">
                                        <div class="col-md-9 col-sm-9 col-9 pr-0">
                                            <h4><a href="formulaire?formule=1&r=adhesion">Formule 1</a></h4>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-3 pl-0">
                                            <h5>150.00 €</h5>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <p>- Consultations juridiques illimitées et gratuites Juriste Gestion locative</p><br>
                                    <p>- Consultations juridiques spécialisées illimitées et gratuites avec nos consultants : Notaire, Avocats, Commissaire de justice, Architecte, Spécialiste en copropriétés, Expert en assurances.</p><br>
                                    <p>- Revue 35 Millions de propriétaires format papier ou numérique, newsletter bimestrielle</p><br>
                                    <p>- Offres de nos partenaires : DEFIM, visale…</p><br>
                                    <p>- Ateliers au siège</p><br>
                                    <p>- Tarifs spécial abonnés pour la vente d’imprimés</p><br>
                                    <p style="color: #fff0;">-</p>
                                </ul>
                                <div class="center-holder">
                                    <a href="formulaire?formule=1&r=adhesion" class="position-relative primary-button button-md mt-10"> ADHÉRER </a>
                                </div>
                            </div>
                        </div>
                        <!-- Product End -->

                        <!-- Product Start -->
                        <div class="col-md-5 col-sm-6 col-12">
                            <div class="shop-grid">
                                <div class="shop-grid-info">
                                    <div class="row">
                                        <div class="col-md-9 col-sm-9 col-9 pr-0">
                                            <h4><a href="formulaire?formule=2&r=adhesion">Formule 2</a></h4>
                                            <span style="color: #fff0;">-</span>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-3 pl-0">
                                            <h5>180.00 €</h5>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <p>- Consultations juridiques illimitées et gratuites Juriste Gestion locative</p><br>
                                    <p>- Consultations juridiques spécialisées illimitées et gratuites avec nos consultants: Notaire, Avocats, Commissaire de justice, Architecte, Spécialiste en copropriétés, Expert en assurances.</p><br>
                                    <p>- Revue 35 Millions de propriétaires format papier ou numérique, newsletter bimestrielle</p><br>
                                    <p>- Offres de nos partenaires : DEFIM, visale…</p><br>
                                    <p>- Ateliers au siège</p><br>
                                    <p>- Tarifs spécial abonnés pour la vente d’imprimés</p><br>
                                    <p>- Réunions d'information extérieures gratuites</p>

                                </ul>
                                <div class="center-holder">
                                    <a href="formulaire?formule=2&r=adhesion" class="position-relative primary-button button-md mt-10"> ADHÉRER </a>
                                </div>
                            </div>
                        </div>
                        <!-- Product End -->
                    </div>
                </div>
            </div>
            <!-- Shop Grid END -->
            <?php require_once 'newsletter.php' ?>
        </main> <?php
            } elseif (isset($_GET['param']) && ($_GET['param'] === 'renouveler')) {
                ?>
        <!-- Main Content -->
        <main>
            <!-- Page Title START -->
            <div class="page-title-section" style="background-image: url('assets/img/tourcoing.webp');">
                <div class="container">
                    <h1>RENOUVELER</h1>
                </div>
            </div>
            <!-- Page Title END -->

            <!-- Shop Grid START -->
            <div class="section-block">
                <div class="container">
                    <div class="section-heading center-holder">
                        <h5>NOS FORMULES RENOUVELLEMENT</h5>
                        <span style="font-size: 22px;">La cotisation est entièrement déductible de vos revenus fonciers si vous êtes soumis au régime réel d'imposition.</span>
                        <div class="section-heading-line"></div>
                    </div>
                    <div style="justify-content: center;" class="row mt-30">
                        <!-- Product Start -->
                        <div class="col-md-5 col-sm-6 col-12">
                            <div class="shop-grid">
                                <div class="shop-grid-info">
                                    <div class="row">
                                        <div class="col-md-9 col-sm-9 col-9 pr-0">
                                            <h4><a href="formulaire?formule=1&r=renouvellement">formule 1</a></h4>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-3 pl-0">
                                            <h5>150.00 €</h5>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <p>- Consultations juridiques illimitées et gratuites Juriste Gestion locative</p><br>
                                    <p>- Consultations juridiques spécialisées illimitées et gratuites avec nos consultants: Notaire, Avocats, Commissaire de justice, Architecte, Spécialiste en copropriétés, Expert en assurances.</p><br>
                                    <p>- Revue 35 Millions de propriétaires format papier ou numérique, newsletter bimestrielle</p><br>
                                    <p>- Offres de nos partenaires : DEFIM, visale…</p><br>
                                    <p>- Ateliers au siège</p><br>
                                    <p>- Tarifs spécial abonnés pour la vente d’imprimés</p><br>
                                    <p style="color: #fff0;">-</p>
                                </ul>
                                <div class="center-holder">
                                    <a href="formulaire?formule=1&r=renouvellement" class="position-relative primary-button button-md mt-10">RENOUVELER</a>
                                </div>
                            </div>
                        </div>
                        <!-- Product End -->

                        <!-- Product Start -->
                        <div class="col-md-5 col-sm-6 col-12">
                            <div class="shop-grid">
                                <div class="shop-grid-info">
                                    <div class="row">
                                        <div class="col-md-9 col-sm-9 col-9 pr-0">
                                            <h4><a href="formulaire?formule=2&r=renouvellement">Formule 2</a></h4>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-3 pl-0">
                                            <h5>180.00 €</h5>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <p>- Consultations juridiques illimitées et gratuites Juriste Gestion locative</p><br>
                                    <p>- Consultations juridiques spécialisées illimitées et gratuites avec nos consultants: Notaire, Avocats, Commissaire de justice, Architecte, Spécialiste en copropriétés, Expert en assurances.</p><br>
                                    <p>- Revue 35 Millions de propriétaires format papier ou numérique, newsletter bimestrielle</p><br>
                                    <p>- Offres de nos partenaires : DEFIM, visale…</p><br>
                                    <p>- Ateliers au siège</p><br>
                                    <p>- Tarifs spécial abonnés pour la vente d’imprimés</p><br>
                                    <p>- Réunions d'information extérieures gratuites</p>

                                </ul>
                                <div class="center-holder">
                                    <a href="formulaire?formule=2&r=renouvellement" class="position-relative primary-button button-md mt-10">RENOUVELER</a>
                                </div>
                            </div>
                        </div>
                        <!-- Product End -->
                    </div>
                </div>
            </div>
            <!-- Shop Grid END -->
            <?php require_once 'newsletter.php' ?>
        </main> <?php
            } else {
                ?>
        <!-- Main Content -->
        <main>
            <!-- Page Title START -->
            <div class="page-title-section" style="background-image: url('assets/img/parralax-test.jpg');">
                <div class="container">
                    <h1>ADHÉRER - RENOUVELER</h1>
                </div>
            </div>
            <!-- Page Title END -->

            <!-- Shop Grid START -->
            <div class="section-block">
                <div class="container">
                    <div class="section-heading center-holder">
                        <h5>NOS FORMULES D'ADHÉSION ET DE RENOUVELEMENT</h5>
                        </h5>
                        <span style="font-size: 22px;">La cotisation est entièrement déductible de vos revenus fonciers si vous êtes soumis au régime réel d'imposition.</span>
                        <div class="section-heading-line"></div>
                    </div>
                    <div style="justify-content: center;" class="row mt-30">
                        <!-- Product Start -->
                        <div class="col-md-5 col-sm-6 col-12">
                            <div class="shop-grid">
                                <div class="shop-grid-info">
                                    <div class="row">
                                        <div class="col-md-9 col-sm-9 col-9 pr-0">
                                            <h4><a href="formulaire?formule=1&r=adhesion">formule 1</a></h4>
                                            <span>Dont droit entrée 30.00 €</span>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-3 pl-0">
                                            <h5>140.00 €</h5>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <p>- Consultations juridiques illimitées et gratuites Juriste Gestion locative</p><br>
                                    <p>- Consultations juridiques spécialisées illimitées et gratuites avec nos consultants: Notaire, Avocats, Commissaire de justice, Architecte, Spécialiste en copropriétés, Expert en assurances.</p><br>
                                    <p>- Revue 35 Millions de propriétaires format papier ou numérique, newsletter bimestrielle</p><br>
                                    <p>- Offres de nos partenaires : DEFIM, visale…</p><br>
                                    <p>- Ateliers au siège</p><br>
                                    <p>- Tarifs spécial abonnés pour la vente d’imprimés</p><br>
                                    <p style="color: #fff0;">-</p>
                                </ul>
                                <div class="center-holder">
                                    <a href="formulaire?formule=1&r=adhesion" class="position-relative primary-button button-md mt-10"> ADHÉRER </a>
                                </div>
                            </div>
                        </div>
                        <!-- Product End -->

                        <!-- Product Start -->
                        <div class="col-md-5 col-sm-6 col-12">
                            <div class="shop-grid">
                                <div class="shop-grid-info">
                                    <div class="row">
                                        <div class="col-md-9 col-sm-9 col-9 pr-0">
                                            <h4><a href="formulaire?formule=2&r=adhesion">Formule 2</a></h4>
                                            <span style="color: #fff0;">-</span>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-3 pl-0">
                                            <h5>150.00 €</h5>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <p>- Consultations juridiques illimitées et gratuites Juriste Gestion locative</p><br>
                                    <p>- Consultations juridiques spécialisées illimitées et gratuites avec nos consultants: Notaire, Avocats, Commissaire de justice, Architecte, Spécialiste en copropriétés, Expert en assurances.</p><br>
                                    <p>- Revue 35 Millions de propriétaires format papier ou numérique, newsletter bimestrielle</p><br>
                                    <p>- Offres de nos partenaires : DEFIM, visale…</p><br>
                                    <p>- Ateliers au siège</p><br>
                                    <p>- Tarifs spécial abonnés pour la vente d’imprimés</p><br>
                                    <p>- Réunions d'information extérieures gratuites</p>

                                </ul>
                                <div class="center-holder">
                                    <a href="formulaire?formule=2&r=adhesion" class="position-relative primary-button button-md mt-10"> ADHÉRER </a>
                                </div>
                            </div>
                        </div>
                        <!-- Product End -->
                    </div>
                </div>
            </div>

            <!-- Shop Grid START -->
            <div class="section-block" style="padding-top: 0;">
                <div class="container">
                    <div style="justify-content: center;" class="row">
                        <!-- Product Start -->
                        <div class="col-md-5 col-sm-6 col-12">
                            <div class="shop-grid">
                                <div class="shop-grid-info">
                                    <div class="row">
                                        <div class="col-md-9 col-sm-9 col-9 pr-0">
                                            <h4><a href="formulaire?formule=1&r=renouvellement">STANDARD 12 MOIS</a></h4>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-3 pl-0">
                                            <h5>110.00 €</h5>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <p>- Consultations juridiques illimitées et gratuites Juriste Gestion locative</p><br>
                                    <p>- Consultations juridiques spécialisées illimitées et gratuites avec notaire, avocats, huissier de justice, architecte, spécialiste en copropriétés, expert en assurances.</p><br>
                                    <p>- Revue 35 Millions de propriétaires format papier ou numérique, newsletter bimestrielle</p><br>
                                    <p>- Offres de nos partenaires : DEFIM, visale…</p><br>
                                    <p>- Ateliers au siège</p><br>
                                    <p>- Tarifs spécial abonnés pour la vente d’imprimés</p><br>
                                    <p style="color: #fff0;">-</p>
                                </ul>
                                <div class="center-holder">
                                    <a href="formulaire?formule=1&r=renouvellement" class="position-relative primary-button button-md mt-10">RENOUVELER</a>
                                </div>
                            </div>
                        </div>
                        <!-- Product End -->

                        <!-- Product Start -->
                        <div class="col-md-5 col-sm-6 col-12">
                            <div class="shop-grid">
                                <div class="shop-grid-info">
                                    <div class="row">
                                        <div class="col-md-9 col-sm-9 col-9 pr-0">
                                            <h4><a href="formulaire?formule=2&r=renouvellement">Formule 2</a></h4>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-3 pl-0">
                                            <h5>150.00 €</h5>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <p>- Consultations juridiques illimitées et gratuites Juriste Gestion locative</p><br>
                                    <p>- Consultations juridiques spécialisées illimitées et gratuites avec nos consultants: Notaire, Avocats, Commissaire de justice, Architecte, Spécialiste en copropriétés, Expert en assurances.</p><br>
                                    <p>- Revue 35 Millions de propriétaires format papier ou numérique, newsletter bimestrielle</p><br>
                                    <p>- Offres de nos partenaires : DEFIM, visale…</p><br>
                                    <p>- Ateliers au siège</p><br>
                                    <p>- Tarifs spécial abonnés pour la vente d’imprimés</p><br>
                                    <p>- Réunions d'information extérieures gratuites</p>

                                </ul>
                                <div class="center-holder">
                                    <a href="formulaire?formule=2&r=renouvellement" class="position-relative primary-button button-md mt-10">RENOUVELER</a>
                                </div>
                            </div>
                        </div>
                        <!-- Product End -->
                    </div>
                </div>
            </div>
            <!-- Shop Grid END -->
            <?php require_once 'newsletter.php' ?>
        </main> <?php
            }
                ?>


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