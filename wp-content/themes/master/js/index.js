// Load our custom js here.

$(document).ready(function() {

  // mobile nav
  $('#toggle').click(function() {
    $(this).toggleClass('active');
    $('#overlay').toggleClass('open');
  });

  $('.nav-item').click(function() {
    $('.button_container').toggleClass('active');
    $('#overlay').toggleClass('open');
  })


  $('.cycle-testimonials').cycle();

// Animate.css effects
  $('.section').addClass("hidden").viewportChecker({
    classToAdd: 'visible animated fadeIn',
    offset: 100,
  });

// clear cf7 error msg on mouseover
 $(".wpcf7-form-control-wrap").mouseover(function(){
  $obj = $("span.wpcf7-not-valid-tip",this);
  $obj.css('display','none');
 });

// Parallax
  var movementStrength = 25;
  var height = movementStrength / $(window).height();
  var width = movementStrength / $(window).width();
  $('#hero').mousemove(function(e){
      var pageX = e.pageX - ($(window).width() / 2);
      var pageY = e.pageY - ($(window).height() / 2);
      var newvalueX = width * pageX * -1 - 25;
      var newvalueY = height * pageY * -1 - 50;
      $('#hero').css("background-position", newvalueX+"px     "+newvalueY+"px");
  });

// Custom Select
  $('select').customSelect();


// Mobile Menu Overlay Function
  $( ".mobileToggle" ).click(function() {
    var html = jQuery('html');

    if ($('body').hasClass('mobileOpen')) {

        $(".nav__overlay").fadeOut();
        $('body').removeClass('mobileOpen');

        
        var scrollPosition = html.data('scroll-position');
        html.css('overflow', html.data('previous-overflow'));
        window.scrollTo(scrollPosition[0], scrollPosition[1]);

    } else {

        $(".nav__overlay").fadeIn();
        $('body').addClass('mobileOpen');

        var scrollPosition = [
          self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
          self.pageYOffset || document.documentElement.scrollTop  || document.body.scrollTop
        ];
        html.data('scroll-position', scrollPosition);
        html.data('previous-overflow', html.css('overflow'));
        html.css('overflow', 'hidden');
        window.scrollTo(scrollPosition[0], scrollPosition[1]);

    }

  });

  $('.nav__overlay > ul > li > a').each(function(){
    $(this).click(function(e){
      if($(this).parent().has("ul").length){
        if ($(this).data('clicked_once')) {
          $(this).data('clicked_once', false);
          return true;
        } else {
          e.preventDefault();
          $('nav > ul > li > ul').stop().slideUp();
          $('nav > ul > li > a').data('clicked_once', false);
          $(this).data('clicked_once', true);
          $('nav > ul > li > ul').stop().slideUp();
          $(this).siblings('ul').stop().slideDown();
        }
      }
    });
  });

// Fix Hover Effects on Mobile Touchpoints
  function hasTouch() {
      return 'ontouchstart' in document.documentElement
             || navigator.maxTouchPoints > 0
             || navigator.msMaxTouchPoints > 0;
  }

  if (hasTouch()) { // remove all :hover stylesheets
      try { // prevent exception on browsers not supporting DOM styleSheets properly
          for (var si in document.styleSheets) {
              var styleSheet = document.styleSheets[si];
              if (!styleSheet.rules) continue;

              for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
                  if (!styleSheet.rules[ri].selectorText) continue;

                  if (styleSheet.rules[ri].selectorText.match(':hover')) {
                      styleSheet.deleteRule(ri);
                  }
              }
          }
      } catch (ex) {}
  }

});


// Responsify
$(window).load(function() {
  $('img').responsify();
});

$(window).resize(function(){
  $('img').responsify();
});


// Header Resize on Scroll
$(document).on("scroll", function(){
  if ($(document).scrollTop() > 155){
    $("header").addClass("smaller");
  } else {
    $("header").removeClass("smaller");
  }
});
