/**
 * Theme JS file.
 */
jQuery(function($) {
  "use strict";

  // Preloader
  $(document).ready(function() {
    setTimeout(function() {
      $(".loader").fadeOut("slow");
    }, 1000);
  });

  // Scroll to top
  $(function() {
    $(window).scroll(function() {
      if ($(this).scrollTop() >= 50) {
        $('#return-to-top').fadeIn(200);
      } else {
        $('#return-to-top').fadeOut(200);
      }
    });
    $('#return-to-top').click(function() {
      $('body,html').animate({
        scrollTop: 0
      }, 500);
    });
  });

  // Slider
  $(document).ready(function() {
    $('#slider .owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: true,
      rtl: false,
      items: 1,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
    });
  });

});

// Define functions in the global scope
function business_accountant_menu_open_nav() {
  jQuery(".sidenav").addClass('open');
}

function business_accountant_menu_close_nav() {
  jQuery(".sidenav").removeClass('open');
}

jQuery(document).ready(function($) {
    $('#service-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });
});