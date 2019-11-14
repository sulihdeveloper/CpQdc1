 (function($) {

  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.scrollup').fadeIn();
    } else {
      $('.scrollup').fadeOut();
    }
  });

  $('.scrollup').click(function() {
    $("html, body").animate({
      scrollTop: 0
    }, 1000);
    return false;
  });

  // local scroll
  jQuery('.navbar').localScroll({
    hash: true,
    offset: {
      top: 0
    },
    duration: 800,
    easing: 'easeInOutExpo'
  });

  $('.scrollto').on('click', function(e) {
      e.preventDefault();
      var target = $(this.hash);
      $('html, body').animate({
        scrollTop: target.offset().top - 60
      }, 1500, 'easeInOutExpo');
  });

  $(".navbar-collapse a").on('click', function() {
  $(".navbar-collapse").removeClass('in');
  $(".navbar-collapse").addClass('collapse');
  });

  // fancybox
  jQuery(".fancybox").fancybox();

  //testimonial
  jQuery('.testimonials-slider').flexslider({
    animation: "slide",
    directionNav: true,
    controlNav: true,
    pauseOnHover: true,
    slideshowSpeed: 4000,
    direction: "horizontal" //Direction of slides
  });

  if (Modernizr.mq("screen and (max-width:1024px)")) {
    jQuery("body").toggleClass("body");

  } else {
    var s = skrollr.init({
      mobileDeceleration: 1,
      edgeStrategy: 'set',
      forceHeight: true,
      smoothScrolling: true,
      smoothScrollingDuration: 300,
      easing: {
        WTF: Math.random,
        inverted: function(p) {
          return 1 - p;
        }
      }
    });
  }
  //scroll menu
  jQuery('.appear').appear();
  jQuery(".appear").on("appear", function(data) {
    var id = $(this).attr("id");
    jQuery('.nav li').removeClass('active');
    jQuery(".nav a[href='#" + id + "']").parent().addClass("active");
  });

  //stats
  var runOnce = true;
  jQuery(".stats").on("appear", function(data) {
    var counters = {};
    var i = 0;
    if (runOnce) {
      jQuery('.number').each(function() {
        counters[this.id] = $(this).html();
        i++;
      });
      jQuery.each(counters, function(i, val) {
        //console.log(i + ' - ' +val);
        jQuery({
          countNum: 0
        }).animate({
          countNum: val
        }, {
          duration: 3000,
          easing: 'linear',
          step: function() {
            jQuery('#' + i).text(Math.floor(this.countNum));
          }
        });
      });
      runOnce = false;
    }
  });

  //parallax
  var isMobile = false;

  if (Modernizr.mq('only all and (max-width: 1024px)')) {
    isMobile = true;
  }


  if (isMobile == false && ($('#parallax1').length || isMobile == false && $('#parallax2').length || isMobile == false && $('#testimonials').length)) {

    $(window).stellar({
      responsive: true,
      scrollProperty: 'scroll',
      parallaxElements: false,
      horizontalScrolling: false,
      horizontalOffset: 0,
      verticalOffset: 0
    });

  }

  //nicescroll
  $("html").niceScroll({
    zindex: 999,
    cursorborder: "",
    cursorborderradius: "2px",
    cursorcolor: "#191919",
    cursoropacitymin: .5
  });

  function initNice() {
    if ($(window).innerWidth() <= 960) {
      $('html').niceScroll().remove();
    } else {
      $("html").niceScroll({
        zindex: 999,
        cursorborder: "",
        cursorborderradius: "2px",
        cursorcolor: "#191919",
        cursoropacitymin: .5
      });
    }
  }
  $(window).load(initNice);
  $(window).resize(initNice);

})(jQuery);

$(window).load(function(){
  // portfolio
  if ($('.isotopeWrapper').length) {

    var $container = $('.isotopeWrapper');
    var $resize = $('.isotopeWrapper').attr('id');
    // initialize isotope

    $container.isotope({
      itemSelector: '.isotopeItem',
      resizable: false, // disable normal resizing
      masonry: {
        columnWidth: $container.width() / $resize
      }

    });

    $('#filter a').click(function() {

      $('#filter a').removeClass('current');
      $(this).addClass('current');
      var selector = $(this).attr('data-filter');
      $container.isotope({
        filter: selector,
        animationOptions: {
          duration: 1000,
          easing: 'easeOutQuart',
          queue: false
        }
      });
      return false;
    });

    $(window).smartresize(function() {
      $container.isotope({
        // update columnWidth to a percentage of container width
        masonry: {
          columnWidth: $container.width() / $resize
        }
      });
    });
      // Preloader (if the #preloader div exists)
      $(window).on('load', function () {
          if ($('#preloader').length) {
              $('#preloader').delay(100).fadeOut('slow', function () {
                  $(this).remove();
              });
          }
      });

      // Back to top button
      $(window).scroll(function() {
          if ($(this).scrollTop() > 100) {
              $('.back-to-top').fadeIn('slow');
          } else {
              $('.back-to-top').fadeOut('slow');
          }
      });
      $('.back-to-top').click(function(){
          $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
          return false;
      });

      // Initiate the wowjs animation library
      new WOW().init();

      // Header scroll class
      $(window).scroll(function() {
          if ($(this).scrollTop() > 100) {
              $('#header').addClass('header-scrolled');
          } else {
              $('#header').removeClass('header-scrolled');
          }
      });

      if ($(window).scrollTop() > 100) {
          $('#header').addClass('header-scrolled');
      }

      // Smooth scroll for the navigation and links with .scrollto classes
      $('.main-nav a, .mobile-nav a, .scrollto').on('click', function() {
          if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
              var target = $(this.hash);
              if (target.length) {
                  var top_space = 0;

                  if ($('#header').length) {
                      top_space = $('#header').outerHeight();

                      if (! $('#header').hasClass('header-scrolled')) {
                          top_space = top_space - 20;
                      }
                  }

                  $('html, body').animate({
                      scrollTop: target.offset().top - top_space
                  }, 1500, 'easeInOutExpo');

                  if ($(this).parents('.main-nav, .mobile-nav').length) {
                      $('.main-nav .active, .mobile-nav .active').removeClass('active');
                      $(this).closest('li').addClass('active');
                  }

                  if ($('body').hasClass('mobile-nav-active')) {
                      $('body').removeClass('mobile-nav-active');
                      $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
                      $('.mobile-nav-overly').fadeOut();
                  }
                  return false;
              }
          }
      });

      // Navigation active state on scroll
      var nav_sections = $('section');
      var main_nav = $('.main-nav, .mobile-nav');
      var main_nav_height = $('#header').outerHeight();

      $(window).on('scroll', function () {
          var cur_pos = $(this).scrollTop();

          nav_sections.each(function() {
              var top = $(this).offset().top - main_nav_height,
                  bottom = top + $(this).outerHeight();

              if (cur_pos >= top && cur_pos <= bottom) {
                  main_nav.find('li').removeClass('active');
                  main_nav.find('a[href="#'+$(this).attr('id')+'"]').parent('li').addClass('active');
              }
          });
      });

      // jQuery counterUp (used in Whu Us section)
      $('[data-toggle="counter-up"]').counterUp({
          delay: 10,
          time: 1000
      });



      // Testimonials carousel (uses the Owl Carousel library)
      $(".testimonials-carousel").owlCarousel({
          autoplay: true,
          dots: true,
          loop: true,
          items: 1
      });
  }
  })(jQuery);

