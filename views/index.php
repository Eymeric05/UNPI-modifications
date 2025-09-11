<!DOCTYPE html>
<html lang="fr">

<head>
    <title>UNPI Nord</title>

    <!-- Inclusion des meta commun -->
    <?php
    $description = 'Propriétaire occupant, propriétaire bailleur ou propriétaire en devenir, notre association vous apporte aide et soutien pour toutes vos démarches.';
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
        <section style="background-color: #fff;">
            <!-- Video Section -->
            <div class="main-video-section">
                <div class="video-area" id="video-area">
                    <div class="player" id="main-video-play"
                        data-property="{videoURL:'https://youtu.be/1ZjS4irPJIw', containment:'#video-area', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:0, opacity:1, quality:'low',}">
                    </div>
                    <div class="main-video-overlay">
                        <div class="main-video-content">
                            <div class="container">
                                <div class="white-color">
                                    <h3><strong>Union Nationale des Propriétaires Immobiliers</strong></h3>
                                    <div class="mt-15">
                                        <h6>Défense et conseils aux propriétaires immobiliers.</h6>
                                    </div>
                                    <a href="rejoindre?param=adherer"
                                        class="primary-button button-lg mt-30" style="font-size: 25px;">ADHÉRER</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Features -->
            <div class="features-slider">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="feature-box-5 emphasised">
                                <i class="icon-tag2"></i>
                                <h4>Aider</h4>
                                <p>Nous faisons en sorte de vous accompagner pour faciliter vos démarches</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="feature-box-5">
                                <i class="icon-speech-bubble"></i>
                                <h4>Conseiller</h4>
                                <p>Nous sommes à votre disposition pour répondre à vos interrogations.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="feature-box-5">
                                <i class="icon-padlock"></i>
                                <h4>Défendre</h4>
                                <p>Nous nous engageons à représenter vos intérêts en cas de litiges.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Actualité Section -->

        <!-- SECTION : UNPI ASSURANCES -->
        <section>
            <div class="section-block" id="unpi-assurances">
                <div class="container">
                    <div class="row align-items-center mb-4">
                        <div class="col-lg-9 col-md-8 col-12">
                            <div class="section-heading center-holder">
                                <h2>L'assurance des propriétaires</h2>
                                <h5>Conçue par les propriétaires</h5>
                                <div class="section-heading-line" style="background-color: #d21e2b;"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 text-md-right text-center mt-3 mt-md-0">
                            <img src="/assets/img/logos/unpi-assurance.png" alt="UNPI Assurances Logo" style="max-width: 180px; height: auto;">
                        </div>
                    </div>

                    <div class="row mt-50">
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="number-box">
                                <h3>01</h3>
                                <div class="number-box-line"></div>
                                <h4>Garantie Loyers Impayés</h4>
                                <p>Assurez vos loyers et protégez votre bien !</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="number-box">
                                <h3>02</h3>
                                <div class="number-box-line"></div>
                                <h4>Assurance Propriétaire Non Occupant</h4>
                                <p>Des contrats extrêmement couvrants qui s'adaptent à tous les propriétaires.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <div class="number-box">
                                <h3>03</h3>
                                <div class="number-box-line"></div>
                                <h4>Protection Juridique</h4>
                                <p>Pour protéger vos intérêts et assurer votre défense en cas de litige.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-40">
      <!-- Project Block Start - Content from Left Side -->
      <div class="col-md-6 col-sm-12 col-12">
        <div class="case-block">
          <div class="row">
            <!-- Image column removed -->
            <div class="col-12"> <!-- Adjusted column width as image is removed -->
              <div class="case-block-inner">
                <h4>Des produits d'assurance immobiliers de haute qualité</h4>
                <p>Adaptés à vos besoins. À des tarifs préférentiels ! Informations et souscription sur :</p>
                <!-- Link points to the specified URL -->
                <a href="https://unpi-assurances.fr" target="_blank">unpi-assurances.fr</a>
                 <!-- Added the small footer text -->
                <p style="font-size: 0.8em; margin-top: 15px; line-height: 1.2;">UNPI Assurances, société de courtage en assurances, inscrite sous le N° ORIAS : 21008209</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Project Block End -->

      <!-- Project Block Start - Content from Right Side -->
      <div class="col-md-6 col-sm-12 col-12">
        <div class="case-block">
          <div class="row">
            <!-- Image column removed -->
            <div class="col-12"> <!-- Adjusted column width as image is removed -->
              <div class="case-block-inner">
                <h4>Depuis plus d'un siècle, l'UNPI défend vos intérêts.</h4>
                <p>Désormais, nous assurons aussi votre immobilier !</p>
                <!-- Using another paragraph for the service info -->
                <p >SERVICE EXCLUSIVEMENT<br>RÉSERVÉ AUX ADHÉRENTS<br>DE L'UNPI</p>
                <!-- Representing the logo text -->
                 <div style="margin-top: 10px;">
                     <strong>UNPI</strong>
                     <span style="background-color: #d83c6b; color: white; padding: 2px 5px; font-size: 0.9em; display: inline-block;">PROPRIÉTAIRES ENGAGÉS</span>
                 </div>
                <!-- Removed the generic 'Learn More' link as it doesn't fit this content -->
                <!-- <a href="#">Learn More</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                </div>
            </div>
        </section>
        <!-- FIN SECTION : UNPI ASSURANCES -->
        <!-- Actualité List -->
        <section>
            <div class="section-block">
                <div class="section-heading center-holder">
                    <h3>Nos permanences</h3>
                    <div class="section-heading-line"></div>
                </div>
                <div class="container" style="padding-top: 15px;">
                    <div id="carousel1">
                        <?php require 'article-container.php' ?>
                    </div>
                </div>
                <div class="section-heading center-holder">
                    <h3>Nos réunions d'information</h3>
                    <div class="section-heading-line"></div>
                </div>
                <div class="container" style="padding-top: 15px;">
                    <?php $carrousel = true ?>
                    <div id="carousel2">
                        <?php require 'article-container2.php' ?> 
                    </div>
                </div>
            </div>

        </section>

        <!--Competences Section -->
        <section>
            <div class="section-block-grey py-0" id="competences">
                <div class="container section-block-bg"
                    style="background-image: url('assets/img/map-shape.png'); background-size: cover; background-attachment: fixed;">
                    <div class="section-heading">
                        <h3 style="text-align: center;">Nos compétences principales résident dans :</h3>
                        <div class="row mt-60">
                            <div class="col-md-6">
                                <ul class="primary-list">
                                    <li><i class="fa fa-check-circle"></i>Le conseil en gestion locative</li>
                                    <li><i class="fa fa-check-circle"></i>Le conseil en copropriété</li>
                                    <li><i class="fa fa-check-circle"></i>L'accompagnement des propriétaires privés et
                                        bailleurs</li>
                                    <li><i class="fa fa-check-circle"></i>Le conseil d'un architecte</li>
                                </ul>
                            </div>

                            <div class="col-md-6">
                                <ul class="primary-list">
                                    <li><i class="fa fa-check-circle"></i>Le conseil en droit de l'urbanisme</li>
                                    <li><i class="fa fa-check-circle"></i>Le choix de partenaires pouvant répondre à vos
                                        besoins et / ou interrogations</li>
                                    <li><i class="fa fa-check-circle"></i>Le conseil en voies d'exécution, droit de
                                        succession - donation , création de SCI</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-60">
                            <div class="col-md-12 text-center justify">
                                <p>
                                    Nous mettons en place des actions appropriées à la localisation et aux besoins de la
                                    région,
                                    d'où la nécessité d'une antenne.<br>
                                    Notre association s'engage à rendre accessible le droit, mais aussi la liberté de
                                    propriété à
                                    tous, en aidant son processus et en fournissant des aides techniques et administratives.
                                    Elle
                                    aide au développement de l'offre locative et soutient les valeurs et l'avenir des
                                    personnes
                                    possédant des propriétés.<br>
                                    Pour rendre cela possible, nos spécialistes vous épaulent dans vos diverses démarches et
                                    rendent l'accès à certains documents plus facile, en organisant des réunions et ateliers
                                    pédagogiques mais aussi grâce à nos nombreux partenariats avec des entreprises telles
                                    que des artisans du bâtiment, des expertises de diagnostic immobilier. <br>
                                    Par amour du métier, nous nous battons pour la survie de notre profession. C'est pour
                                    cela
                                    que nous vous demandons de nous rejoindre dans la défense de nos valeurs et intérêts
                                    communs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Parallax Section -->
        <section>
            <div class="section-block-parallax" style="background-image: url('assets/img/parralax_4.jpg');">
                <div class="container">
                    <div class="section-heading center-holder white-color">
                        <h4>
                            Nous agissons pour la défense de la propriété privée.
                        </h4>
                        <button type="button" class="primary-button button-sm article-btn" style="font-size:1rem"
                            data-toggle="modal" data-target="#article1">
                            Les Acquis de l’UNPI 2024
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Nos spécialistes -->
        <section>
            <div class="section-block">
                <div class="container">
                    <div class="section-heading center-holder">
                        <h3>Nos spécialistes sont à votre écoute, sur rendez-vous</h3>
                        <div class="section-heading-line"></div>
                        <p>
                            <b>Juriste gestion locative :</b> du lundi au vendredi de 11h00 à 12h00 et 13h30 à 14h30 par téléphone et de 14h30 à 16h45 sur RDV.<br>
                            <b>Avocat :</b> 3ème vendredi de 9h à 11h30<br>
                            <b>Avocat en droit de la construction :</b> 3ème Jeudi du mois de 14h30 à 17h00<br>
                            <b>Notaire :</b> 1er mercredi de 14h à 16h30<br>
                            <b>Architecte :</b> 1er lundi de 9h à 11h<br>
                            <b>Commissaire de justice :</b> 2ème jeudi de 14h à 16h30<br>
                            <b>Copropriété :</b> 1 à 2 fois / mois<br>
                            <b> Expert en assurances : </b> 1 fois par mois
                        </p>
                        <div class="mt-20">
                            <button type="button" class="primary-button button-sm  article-btn" data-toggle="modal" data-target="#article2">
                                Le calendrier
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="section-block-parallax" style="background-image: url('assets/img/parralax1.jpg'); position: relative;">
                <div class="section-heading center-holder">
                    <h3 style="color: #fff">Nos imprimés</h3>
                    <div class="section-heading-line"></div>
                    <p style="color: #fff">
                        Vous avez la possibilité de commander et acheter les imprimés UNPI (baux, états des lieux...) mis à jour régulièrement à un tarif préférentiel selon les dernières dispositions légales.
                    </p>
                    <div class="mt-20">
                        <button type="button" class="primary-button button-sm  article-btn" data-toggle="modal" data-target="#article3">
                            Consultez nos imprimés
                        </button>
                    </div>
                    <!-- Modal article 3 -->
                    <div class="modal fade" id="article3" tabindex="-1" role="dialog" aria-labelledby="modalArticle2" aria-hidden="true">
                        <div class="modal-dialog" role="document" style="width: 100%; max-width: 50rem;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalArticle2">Union Nationale des Propriétaires Immobiliers</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <?php
                                    include_once("article3.php");
                                    ?>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background: #d21e2b;">FERMER</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal article 3 -->

                </div>
            </div>

        </section>

        <?php require_once 'newsletter.php' ?>
        <!-- ARTICLE MODAL -->
        <!-- Modal article 1 -->
        <div class="modal fade" id="article1" tabindex="-1" role="dialog" aria-labelledby="modalArticle1"
            aria-hidden="true">
            <div class="modal-dialog" role="document" style="width: 100%; max-width: 50rem;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalArticle1">Union Nationale des Propriétaires Immobiliers</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <?php
                        include_once("article1.php");
                        ?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            style="background: #d21e2b;">FERMER</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal article 2 -->
        <div class="modal fade" id="article2" tabindex="-1" role="dialog" aria-labelledby="modalArticle2"
            aria-hidden="true">
            <div class="modal-dialog" role="document" style="width: 100%; max-width: 50rem;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalArticle2">Union Nationale des Propriétaires Immobiliers</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <?php
                        include_once("article2.php");
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

    <!-- Scroll to top button -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

    <!-- Inclusion du footer pour mobile/tablette et scripts-->
    <?php
    include_once("mobileFooter.php");
    include_once("script.php");
    ?>

</body>

</html>