<meta charset="UTF-8">
<link rel="shortcut icon" href="assets/img/logos/logo-shortcut.svg"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="<?= (isset($description)) ? $description : "" ?>">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-T9NFXPD74M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-T9NFXPD74M');
</script>

<!-- OGD -->
<meta property="og:title" content="UNPI">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.unpi5962.org/">
<meta property="image" content="https://www.unpi5962.org/img/logounpi.svg">
<meta property="og:description" content="Union Nationale des Propriétaires Immobiliers. Association de défense et conseils aux propriétaires immobiliers.">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="UNPI">
<meta name="twitter:site" content="https://www.unpi5962.org/">
<meta name="twitter:description" content="Union Nationale des Propriétaires Immobiliers. Association de défense et conseils aux propriétaires immobiliers.">
<meta name="twitter:image" content="https://www.unpi5962.org/img/logounpi.svg">
<meta name="twitter:image:alt" content="Logo UNPI">

<!-- CSS spécifique au formulaire de vote -->
<link rel="stylesheet" type="text/css" href="assets/css/vote-correspondance.css">

<!-- Bootstrap CSS-->
<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">

<!-- Font-Awesome -->
<link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">

<!-- Icomoon -->
<link rel="stylesheet" type="text/css" href="/assets/css/icomoon.css">

<!-- Slider -->
<link rel="stylesheet" type="text/css" href="/assets/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="/assets/css/rev-settings.css">
<link rel="stylesheet" href="assets/css/slider.css">

<!-- Animate.css -->
<link rel="stylesheet" href="assets/css/animate.css">

<!-- Color Switcher -->
<!--<link rel="stylesheet" type="text/css" href="css/switcher.css">-->

<!-- Owl Carousel  -->
<link rel="stylesheet" href="assets/css/owl.carousel.css">

<!-- Main Styles -->
<link rel="stylesheet" type="text/css" href="assets/css/default.css">
<link rel="stylesheet" type="text/css" href="assets/css/styles.css" id="colors">

<!-- Fonts Google -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800,900">

<!-- Footer Styles -->
<style>
    *, *::before, *::after{
        box-sizing: border-box;
    }
    html,
    body{
        margin: 0;
        padding: 0;
    }
    main{
        position: relative;
        margin: 0 0 70vh 0;
    }
    #parallaxFooter{
        position: fixed;
        bottom: 0;
        width: 100%;
        height: auto;
        background: #1161AA;
        display: flex;
        
    }
    #mobilFooter{
        display: none;
    }
    @media screen and (max-width: 997px){
        main{
            margin-bottom: 0;
        }
        #parallaxFooter{
            display: none;
        }
        #mobilFooter{
            display: flex;
            background: #1161AA;
        }
    }
</style>
<div id="carousel-modal" class="modal">
  <div class="modal-content">
    <span class="close-btn">&times;</span>
    <div id="modal-body">Contenu ici...</div>
  </div>
</div>