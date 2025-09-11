/*
    Project Name : Business
    Author Company : SpecThemes
    Project Date: 5 Feb, 2017
    Template Developer: vsafaryan50@gmail.com
*/


/*
==============================================
TABLE OF CONTENT
==============================================

1. Owl Carousels
2. CountUp
3. Slider
4. Hover Drop Down
5. Youtube Video Section
6. Video Modal
7. Preloader
8. Scroll To Top
9. Isotop
10. WOW
11. Serach
12. Input Number, Shopping Cart
13. Tabs
14. Pie Chart
15. Charts.js

==============================================
[END] TABLE OF CONTENT
==============================================
*/


"use strict";


$('#preloader').fadeOut('normall', function () {
  $(this).remove();
});


$(document).ready(function () {

  /*---------------------
  Services carousel
  -----------------------*/
  $('#services-carousel').owlCarousel({
    loop: false,
    smartSpeed: 850,
    responsiveClass: true,
    dots: false,
    nav: true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsive: {
      0: {
        items: 1,
        margin: 15,
      },
      600: {
        items: 2,
        margin: 30,
      },
      1000: {
        items: 3,
        margin: 0,
      }
    }
  })

  /*---------------------
  Services carousel 2
  -----------------------*/
  $('#services-carousel-2').owlCarousel({
    loop: false,
    responsiveClass: true,
    dots: false,
    nav: true,
    smartSpeed: 850,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsive: {
      0: {
        items: 1,
        margin: 15,
      },
      767: {
        items: 2,
        margin: 30,
      },
      991: {
        items: 3,
        margin: 30,
      },
      1200: {
        items: 4,
        margin: 0,
      }
    }
  })

  /*---------------------
  Blog Grid carousel
  -----------------------*/
  $('#blog-grid').owlCarousel({
    loop: false,
    dots: true,
    nav: false,
    smartSpeed: 850,
    autoplay: true,
    autoplayTimeout: 2500,
    responsiveClass: true,
    autoplayHoverPause: false,
    responsive: {
      0: {
        items: 1,
        margin: 0,
      },
      600: {
        items: 2,
        margin: 0,
      },
      1000: {
        items: 3,
        margin: 0,
      }
    }
  })

  /*---------------------
  Revolution Slider
  -----------------------*/
  if ($("#rev_slider_24_1").length !== 0) {
    var tpj = jQuery;
    var revapi24;
    tpj(document).ready(function () {
      if (tpj("#rev_slider_24_1").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev_slider_24_1");
      } else {
        revapi24 = tpj("#rev_slider_24_1").show().revolution({
          sliderType: "standard",
          jsFileLocation: "revolution/js/",
          sliderLayout: "fullscreen",
          dottedOverlay: "none",
          delay: 9000,
          navigation: {
            keyboardNavigation: "off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            mouseScrollReverse: "default",
            onHoverStop: "off",
            bullets: {
              enable: true,
              hide_onmobile: false,
              style: "bullet-bar",
              hide_onleave: false,
              direction: "horizontal",
              h_align: "center",
              v_align: "bottom",
              h_offset: 0,
              v_offset: 50,
              space: 5,
              tmp: ''
            }
          },
          responsiveLevels: [1240, 1024, 778, 480],
          visibilityLevels: [1240, 1024, 778, 480],
          gridwidth: [1240, 1024, 778, 480],
          gridheight: [868, 768, 960, 720],
          lazyType: "none",
          shadow: 0,
          spinner: "off",
          stopLoop: "off",
          stopAfterLoops: -1,
          stopAtSlide: -1,
          shuffle: "off",
          autoHeight: "off",
          fullScreenAutoWidth: "off",
          fullScreenAlignForce: "off",
          fullScreenOffsetContainer: "",
          fullScreenOffset: "60px",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            nextSlideOnWindowFocus: "off",
            disableFocusListener: false,
          }
        });
      }

      if (revapi24) revapi24.revSliderSlicey();
    }); /*ready*/
  }

  /*------------------------------------
      4. Navbar
  --------------------------------------*/

  /*---------------------
  Fixed Nav
  -----------------------*/
  $("#navigation1").navigation();
  $("#navigation1").fixed();

  /*---------------------
  Transparent Nav Options
  -----------------------*/
  if ($("#nav-transparent").length !== 0) {
    if ($(window).width() > 991) {
      $("#nav-transparent #main_logo").css("display", "none");
    } else {
      $("#nav-transparent #light_logo").css("display", "none");
    }
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      if ($(window).width() > 991) {
        if (scroll > 30) {
          $(".navigation-fixed-wrapper").addClass("nav-white-bg");
          $("#nav-transparent #main_logo").css("display", "inline-block");
          $("#nav-transparent #light_logo").css("display", "none");
        } else {
          $(".navigation-fixed-wrapper").removeClass("nav-white-bg");
          $("#nav-transparent #light_logo").css("display", "inline-block");
          $("#nav-transparent #main_logo").css("display", "none");
        }
      }
    })
  }

  /*---------------------
  Nav Slide Effect
  -----------------------*/
  $("#navigation2").navigation({
    effect: "slide"
  });

  /*---------------------
  Nav Zoom Effect
  -----------------------*/
  $("#navigation3").navigation({
    animationOnShow: "zoom-in",
    animationOnHide: "zoom-out"
  });

  /*---------------------
  Overlay Nav
  -----------------------*/
  $("#navigation4").navigation({
    offset: 20,
    overlayColor: "rgba(0,0,0,0.6)",
    effect: "slide"
  });

  /*---------------------
  Affix Nav
  -----------------------*/
  $("#navigation4").fixed({
    offset: 20
  });

  /*---------------------
  Hidden Nav
  -----------------------*/
  $("#navigation5").navigation({
    hidden: true
  });

  if ($("#navigation-push").length !== 0) {
    if ($(window).width() > 991) {
      $("#navigation-push").find($(".nav-menus-wrapper").addClass("nav-menus-wrapper-open"));
      $("#navigation-push").find($(".nav-menus-wrapper-close-button").hide());
      $("#navigation-push").find($(".small-size-header").hide());
    } else {
      $("#navigation5 #main_logo").clone().appendTo(".small-size-header-logo");
      $("#main_logo").css("display", "none");
      $("#navigation-push").find($(".nav-menus-wrapper").removeClass("nav-menus-wrapper-open"));
    }
  }

  /*---------------------
  Button Nav
  -----------------------*/
  $(".btn-show").on('click', function () {
    $("#navigation5").data("navigation").toggleOffcanvas();
  });

  $("#navigation6").navigation({
    offCanvasSide: "right"
  });

  /*---------------------
  Simple Nav
  -----------------------*/
  $("#navigation7").navigation();

  /*------------------------------------
      5. Youtube Video Section
  --------------------------------------*/
  if ($(".video-section").length !== 0) {
    $('.player').mb_YTPlayer();
  }

  if ($(".main-video-section").length !== 0) {
    $('#main-video-play').mb_YTPlayer();
  }

  /*------------------------------------
      6. Video Modal
  --------------------------------------*/

  $('.modal').on('hidden.bs.modal', function () {
    var $this = $(this).find('iframe'),
      tempSrc = $this.attr('src');
    $this.attr('src', "");
    $this.attr('src', tempSrc);
  });

  /*------------------------------------
      8. Scroll To Top
  --------------------------------------*/

  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      $(".scroll-to-top").fadeIn(400);

    } else {
      $(".scroll-to-top").fadeOut(400);
    }
  });

  $(".scroll-to-top").on('click', function (event) {
    event.preventDefault();
    $("html, body").animate({scrollTop: 0}, 600);
  });

  /*------------------------------------
      9. Isotop
  --------------------------------------*/

// external js: isotope.pkgd.js
// init Isotope
  var $grid = $('.isotope-grid').isotope({
    itemSelector: '.isotope-item',
    layoutMode: 'fitRows',
    getSortData: {
      name: '.name',
      symbol: '.symbol',
      number: '.number parseInt',
      category: '[data-category]',
      weight: function (itemElem) {
        var weight = $(itemElem).find('.weight').text();
        return parseFloat(weight.replace(/[\(\)]/g, ''));
      }
    }
  });

// filter functions
  var filterFns = {
    // show if name ends with -ium
    ium: function () {
      var name = $(this).find('.name').text();
      return name.match(/ium$/);
    }
  };

// bind filter button click
  $('#filters').on('click', 'button', function () {
    var filterValue = $(this).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[filterValue] || filterValue;
    $grid.isotope({filter: filterValue});
  });


// change is-checked class on buttons
  $('.parent-isotope').each(function (i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
    $buttonGroup.on('click', 'button', function () {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $(this).addClass('is-checked');
    });
  });

  /*------------------------------------
      10. WOW
  --------------------------------------*/
  new WOW().init();

});


/*---------------------
Input Number
-----------------------*/
jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
jQuery('.quantity').each(function () {
  var spinner = jQuery(this),
    input = spinner.find('input[type="number"]'),
    btnUp = spinner.find('.quantity-up'),
    btnDown = spinner.find('.quantity-down'),
    min = input.attr('min'),
    max = input.attr('max');

  btnUp.on("click", function () {
    var oldValue = parseFloat(input.val());
    if (oldValue >= max) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue + 1;
    }
    spinner.find("input").val(newVal);
    spinner.find("input").trigger("change");
  });

  btnDown.on("click", function () {
    var oldValue = parseFloat(input.val());
    if (oldValue <= min) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue - 1;
    }
    spinner.find("input").val(newVal);
    spinner.find("input").trigger("change");
  });

});