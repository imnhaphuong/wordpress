(function ($) {
  "use strict";
  //Loading AOS animation with css class

  //fade animation
  $(".homedroid-fade-up").attr({
    "data-aos": "fade-up",
  });
  $(".homedroid-fade-down").attr({
    "data-aos": "fade-down",
  });
  $(".homedroid-fade-left").attr({
    "data-aos": "fade-left",
  });
  $(".homedroid-fade-right").attr({
    "data-aos": "fade-right",
  });
  $(".homedroid-fade-up-right").attr({
    "data-aos": "fade-up-right",
  });
  $(".homedroid-fade-up-left").attr({
    "data-aos": "fade-up-left",
  });
  $(".homedroid-fade-down-right").attr({
    "data-aos": "fade-down-right",
  });
  $(".homedroid-fade-down-left").attr({
    "data-aos": "fade-down-left",
  });

  //slide animation
  $(".homedroid-slide-left").attr({
    "data-aos": "slide-left",
  });
  $(".homedroid-slide-right").attr({
    "data-aos": "slide-right",
  });
  $(".homedroid-slide-up").attr({
    "data-aos": "slide-up",
  });
  $(".homedroid-slide-down").attr({
    "data-aos": "slide-down",
  });

  //zoom animation
  $(".homedroid-zoom-in").attr({
    "data-aos": "zoom-in",
  });
  $(".homedroid-zoom-in-up").attr({
    "data-aos": "zoom-in-up",
  });
  $(".homedroid-zoom-in-down").attr({
    "data-aos": "zoom-in-down",
  });
  $(".homedroid-zoom-in-left").attr({
    "data-aos": "zoom-in-left",
  });
  $(".homedroid-zoom-in-right").attr({
    "data-aos": "zoom-in-right",
  });
  $(".homedroid-zoom-out").attr({
    "data-aos": "zoom-out",
  });
  $(".homedroid-zoom-out-up").attr({
    "data-aos": "zoom-out-up",
  });
  $(".homedroid-zoom-out-down").attr({
    "data-aos": "zoom-out-down",
  });
  $(".homedroid-zoom-out-left").attr({
    "data-aos": "zoom-out-left",
  });
  $(".homedroid-zoom-out-right").attr({
    "data-aos": "zoom-out-right",
  });

  //flip animation
  $(".homedroid-flip-up").attr({
    "data-aos": "flip-up",
  });
  $(".homedroid-flip-down").attr({
    "data-aos": "flip-down",
  });
  $(".homedroid-flip-left").attr({
    "data-aos": "flip-left",
  });
  $(".homedroid-flip-right").attr({
    "data-aos": "flip-right",
  });

  //animation ease attributes
  $(".homedroid-linear").attr({
    "data-aos-easing": "linear",
  });
  $(".homedroid-ease").attr({
    "data-aos-easing": "ease",
  });
  $(".homedroid-ease-in").attr({
    "data-aos-easing": "ease-in",
  });
  $(".homedroid-ease-in-back").attr({
    "data-aos-easing": "ease-in-back",
  });
  $(".homedroid-ease-out").attr({
    "data-aos-easing": "ease-out",
  });
  $(".homedroid-ease-out-back").attr({
    "data-aos-easing": "ease-out-back",
  });
  $(".homedroid-ease-in-out-back").attr({
    "data-aos-easing": "ease-in-out-back",
  });
  $(".homedroid-ease-in-shine").attr({
    "data-aos-easing": "ease-in-shine",
  });
  $(".homedroid-ease-out-shine").attr({
    "data-aos-easing": "ease-out-shine",
  });
  $(".homedroid-ease-in-out-shine").attr({
    "data-aos-easing": "ease-in-out-shine",
  });
  $(".homedroid-ease-in-quad").attr({
    "data-aos-easing": "ease-in-quad",
  });
  $(".homedroid-ease-out-quad").attr({
    "data-aos-easing": "ease-out-quad",
  });
  $(".homedroid-ease-in-out-quad").attr({
    "data-aos-easing": "ease-in-out-quad",
  });
  $(".homedroid-ease-in-cubic").attr({
    "data-aos-easing": "ease-in-cubic",
  });
  $(".homedroid-ease-out-cubic").attr({
    "data-aos-easing": "ease-out-cubic",
  });
  $(".homedroid-ease-in-out-cubic").attr({
    "data-aos-easing": "ease-in-out-cubic",
  });
  $(".homedroid-ease-in-quart").attr({
    "data-aos-easing": "ease-in-quart",
  });
  $(".homedroid-ease-out-quart").attr({
    "data-aos-easing": "ease-out-quart",
  });
  $(".homedroid-ease-in-out-quart").attr({
    "data-aos-easing": "ease-in-out-quart",
  });

  setTimeout(function () {
    AOS.init({
      once: true,
      duration: 1200,
    });
  }, 100);

  var homedroidBrands = document.querySelector(".homedroid-brands");
  if (homedroidBrands) {
    var homedroidCloneBrands = homedroidBrands.cloneNode(true);
    document.querySelector(".homedroid-brand-showcase").appendChild(homedroidCloneBrands);
  }

  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    var homedroidStickyMenu = $(".homedroid-sticky-menu");
    var homedroidStickyNavigation = $(".homedroid-sticky-navigation");

    if (homedroidStickyMenu.length && scrollTop > 0) {
      homedroidStickyMenu.addClass("sticky-menu-enabled homedroid-zoom-in-up");
    } else {
      homedroidStickyMenu.removeClass("sticky-menu-enabled");
    }
  });
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery(".homedroid-scrollto-top a").fadeIn();
    } else {
      jQuery(".homedroid-scrollto-top a").fadeOut();
    }
  });
  jQuery(".homedroid-scrollto-top a").click(function () {
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });

  // Function to check if an element is in the viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
  }

  // Function to start counter animation when element is in viewport
  function startCounterAnimation() {
    $(".homedroid-number-counter")
      .not(".counted")
      .each(function () {
        if (isElementInViewport(this)) {
          var $this = $(this);
          $this
            .addClass("counted")
            .prop("Counter", 0)
            .animate(
              {
                Counter: $this.text(),
              },
              {
                duration: 1000,
                easing: "swing",
                step: function (now) {
                  $this.text(Math.ceil(now));
                },
              }
            );
        }
      });
  }

  // Check if element is in viewport on page load
  $(document).ready(function () {
    startCounterAnimation();
  });

  // Check if element is in viewport on scroll
  $(window).on("scroll", function () {
    startCounterAnimation();
  });
})(jQuery);
