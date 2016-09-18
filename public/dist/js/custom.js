/* ------------------------------- 768 -------------------------------
  Project Name : TORNADOPACK
  Project Date: 29 July, 2016
  Author Website : http://www.faisalsamroz.com
  Author Email : faisalsamroz@gmail.com
---------------------------------------------------------------------- */
jQuery(document).ready(function(){
  
  "use strict";

  // Add animations on scroll
  if(jQuery('html').hasClass('.animate-in')){
    var topcoords = jQuery('.animate-in').offset().top;
  }
  jQuery(function(){
    // Get each on load data attribute elements
    jQuery('.animate-in:first').addClass('animated');
    jQuery('.animate-in').each(function(){
      var animationStyle = jQuery(this).data('animation');
      if(animationStyle == 'load'){
        var animationSpeed = jQuery(this).data('speed');
        jQuery(this).addClass('animated');
        jQuery(this).css({'transition':animationSpeed+'s'}); 
      }
    });
    var jQueryelems = jQuery('.animate-in');
    var winheight = jQuery(window).height();
    var fullheight = jQuery(document).height();     
    jQuery(window).scroll(function(){
      animate_elems();
    });
    function animate_elems() {
      var wintop = jQuery(window).scrollTop(); 
      jQueryelems.each(function(){
        var jQueryelm = jQuery(this);
        var animationShow = jQueryelm.data('show-screen');
        var animationSpeed = jQueryelm.data('speed');
        var topcoords = jQueryelm.offset().top; 
        if(wintop > (topcoords - (winheight*animationShow))) {
          jQueryelm.addClass('animated');
          jQueryelm.css({'transition':animationSpeed+'s'});
        }
              
      });
	  
	    // Skillz Bar
      if(jQuery('.skillz1').hasClass('animated')){
        jQuery('.outer').each(function(){
          var skillz = jQuery(this).data('skillz');
          jQuery(this).find('.inner').css({'width':skillz+'%'});
          jQuery(this).find('.count').css({'left':skillz+'%'});
          jQuery(this).find('.count').text(skillz+'%');
        });
      }
      
    } 
  });

  // Movile navigation

  jQuery(".flexnav").flexNav({
     'animationSpeed' : 250, // default drop animation speed 
    'transitionOpacity': true, // default opacity animation 
    'buttonSelector': '.menu-button', // default menu button class 
    'hoverIntent': false, // use with hoverIntent plugin 
    'hoverIntentTimeout': 150, // hoverIntent default timeout 
    'calcItemWidths': false // dynamically calcs top level nav item widths 
  });

  // Remove flexnav class on scroll
  jQuery(".nav ul li a").click(function() {
    jQuery(this).parents(".flexnav").removeClass("flexnav-show");
  });

  // Circel diagram
  jQuery(function() {
    jQuery('#diagram_1').circleDiagram();
    jQuery('#diagram_2').circleDiagram();
    jQuery('#diagram_3').circleDiagram();
    jQuery('#diagram_4').circleDiagram();

  });

  // On click go to target

  jQuery(".scroll").click(function(event){
    var wd = jQuery(window).width();
    var height_header = jQuery(".nav").outerHeight();
    var gethash = jQuery(this).attr('href');
    if ( gethash.indexOf('#') > -1 ) {
    event.preventDefault();
    var dest=0;
    if(jQuery(this.hash).offset().top > jQuery(document).height()-jQuery(window).height()){
      dest=jQuery(document).height()-jQuery(window).height();
    } else{
    if(wd < 768){
      dest=jQuery(this.hash).offset().top-73; 
    } 
    else {
      dest=jQuery(this.hash).offset().top-height_header;
    }
    }
    //go to destination
    jQuery('html,body').animate({scrollTop:dest}, 1000,'swing');
    }
  });
 
});

// Add class to body on scroll
jQuery(window).scroll(function(){
  var height_header = jQuery(".header").outerHeight();
  var winscroll_top = jQuery(window).scrollTop(); 
  if( winscroll_top > height_header ) {
    jQuery("body").addClass("fixed");
  } else {
    jQuery("body").removeClass("fixed");    
  }
});

jQuery(window).on('load',function(){
  // Responsive Carousel
  var wd = jQuery(window).width();

  if(wd < 768){
    jQuery('#wrap').find('.testimonial-block').unwrap();
    jQuery('.testimonial-block').addClass('item');
    jQuery('.carousel-inner').find('.testimonial-block:first').addClass('active');
  }    
});