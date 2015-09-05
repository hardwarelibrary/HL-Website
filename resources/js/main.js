/*jshint jquery:true */
/*global $:true */

var $ = jQuery.noConflict();


/* ==============================================
    Preloader
=============================================== */

$(window).load(function() {

    $('#preloader').delay(500).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('#preloader .inner').fadeOut(); // will first fade out the loading animation

    });


$(document).ready(function($) {
    "use strict";


    /* ==============================================
        Header effect
    =============================================== */

    $(".header").affix({
        offset: {
          top: 120, 
          bottom: function () {
          return (this.bottom = $('#footer-section').outerHeight(true));
          }
        }
    });


    /* ==============================================
        Full height home-section
    =============================================== */
    
    var windowHeight = $(window).height(),
        topSection = $('#hero-section');
    topSection.css('height', windowHeight);

    $(window).resize(function(){
        var windowHeight = $(window).height();
        topSection.css('height', windowHeight);       
    });

    /* ==============================================
        Collapse menu on click
    =============================================== */

    $('.navbar-collapse a:not(.dropdown-toggle)').click(function(){
        if($(window).width() < 768 )
            $('.navbar-collapse').collapse('hide');
    });

    /* ==============================================
        Scrollspy
    =============================================== */

    $('body').scrollspy({
       target: '#navigation-nav',
       offset: 150      //px/
    });

    /* ==============================================
        Smooth Scroll on anchors
    =============================================== */  

    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top -50
            }, 1000);
            return false;
          }
        }
    });

    /* ==============================================
        Counter increment
    =============================================== */

    function countUp() {   
        var dataperc;   
        $('.stats-percent').each(function(){
            dataperc = $(this).attr('data-perc'),
            $(this).find('.percentfactor').delay(6000).countTo({
                from: 0,                 // number to begin counting
                to: dataperc,      
                speed: 1000,             // ms
                refreshInterval: 10,
            });  
        });
    }
        
    $('.stats-percent').waypoint(function() {
        countUp();
    },
    {
        offset: '95%',                 
        triggerOnce: true
    });
        

    /* ==============================================
        Animated content
    =============================================== */

    $('.animated').appear(function(){
        var el = $(this);
        var anim = el.data('animation');
        var animDelay = el.data('delay');
        if (animDelay) {

            setTimeout(function(){
                el.addClass( anim + " in" );
                el.removeClass('out');
            }, animDelay);

        }

        else {
            el.addClass( anim + " in" );
            el.removeClass('out');
        }    
    },{accY: -150});  


    /* ==============================================
        Parallax
    =============================================== */
    
    $.stellar({
        horizontalScrolling: false,
        verticalOffset: 0
    });

    /* ==============================================
        Placeholder
    =============================================== */ 

    $('input, textarea').placeholder();


    /* ==============================================
        OWL Carousel (initialize screenshot carousel)
    =============================================== */
    
    $(".screenshots-carousel").owlCarousel({
 
        autoPlay: 3000, //Set AutoPlay to 3 seconds
 
        items : 5,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
 
    });

    /* ==============================================
        MagnificPopup - lightbox effect
    =============================================== */

    $('.zoom').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    /* ==============================================
        Responsive video
    =============================================== */
    
    $(".video-container").fitVids();

    /* ==============================================
        MailChip
    =============================================== */

    $('.mailchimp').ajaxChimp({
        callback: mailchimpCallback,
        url: "http://clas-design.us10.list-manage.com/subscribe/post?u=5ca5eb87ff7cef4f18d05e127&amp;id=9c23c46672" //Replace this with your own mailchimp post URL. Don't remove the "". Just paste the url inside "".  
    });

    function mailchimpCallback(resp) {
         if (resp.result === 'success') {
            $('.subscription-success').html('<i class="pe-7s-check"></i><br/>' + resp.msg).fadeIn(1000);
            $('.subscription-error').fadeOut(500);
        
        } else if(resp.result === 'error') {
            $('.subscription-error').html('<i class="pe-7s-close-circle"></i><br/>' + resp.msg).fadeIn(1000);
            $('.subscription-success').fadeOut(500);
        }  
    }
    
    /* ==============================================
        Scroll To Top
    =============================================== */

    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });

    // scroll body to 0px on click
    $('.back-to-top').click(function () {
        $('html, body').animate({
            scrollTop: 0,
            easing: 'swing'
        }, 750);
        return false;
    });

});