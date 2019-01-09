$(document).ready(function(){
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});

	/*$(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');
        }
    );*/

	$('.diu-resource-person.owl-carousel').owlCarousel({
	    loop: true,
	    margin: 15,
	    nav: false,
	    items:5,
	    dots:true,
        autoplay:true,
        autoplayTimeout:3000
	})

	$('.diu-partners.owl-carousel').owlCarousel({
	    loop: true,
	    margin: 15,
	    nav: false,
        /*autoplay:true,
        autoplayTimeout:3000,*/
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:5
	        }
	    }
	});







    $('.diu-scroll-top').click(function(){
        jQuery('html,body').animate({scrollTop:0},800);
    });

    var initialize = function() {
        var mapOptions = {
            zoom: 10,
            scrollwheel: false,
            center: new google.maps.LatLng(40.837936, -73.412551),
            styles: [{
                stylers: [{
                    saturation: -100
                }]
            }]
        };
        var map = new google.maps.Map(document.getElementById("diu-map"),
            mapOptions);
    }
    // Add the map initialize function to the window load function
    google.maps.event.addDomListener(window, "load", initialize);


    $('.diu-fg .form-control').on('focus', function() {
        $(this).parent('.diu-fg').addClass('focused');
    });
    $('.diu-fg input').on('focusout', function() {
        if ($(this).val().length === 0) {
            $(this).parent('.diu-fg').removeClass('focused');
        }
    });


	$('.diu-apply-btn').click(function () {
		$('#loginRegistrationModal').modal().show();
        $('.tab-pane.diu-forgot-password').hide().fadeOut();
        $('.tab-pane.diu-login').hide().fadeOut();
        $('.tab-pane.diu-registration').show().fadeIn();
    })

	$('.diu-registration-btn').click(function () {
        $('.tab-pane.diu-forgot-password').hide().fadeOut();
        $('.tab-pane.diu-login').hide().fadeOut();
        $('.tab-pane.diu-registration').show().fadeIn();
    });

    $('.diu-forgot-password-btn').click(function () {
        $('.tab-pane.diu-registration').hide().fadeOut();
        $('.tab-pane.diu-login').hide().fadeOut();
        $('.tab-pane.diu-forgot-password').show().fadeIn();
    });

    $('.diu-login-btn').click(function () {
        $('.tab-pane.diu-registration').hide().fadeOut();
        $('.tab-pane.diu-forgot-password').hide().fadeOut();
        $('.tab-pane.diu-login').show().fadeIn();
    });

    $('.diu-mega ul li a').hover(function () {
        var controls = $(this).attr('aria-controls')
    	$('.page').hide();
    	$('#'+controls+'').show();
    })
})