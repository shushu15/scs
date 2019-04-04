﻿jQuery(function($) {

	//Preloader
	var preloader = $('.preloader');
	$(window).load(function(){
		preloader.remove();
	});

	$('.carousel').bcSwipe({ threshold: 50 });   // touch support for bs.carousel

	//#main-slider
	var slideHeight = $(window).height() >  283?  283: $(window).height();
	$('#home-slider .item').css('height',slideHeight);

	
	$(window).resize(function(){'use strict',
		$('#home-slider .item').css('height',slideHeight);
	});
	
	//Scroll Menu
	$(window).on('scroll', function(){
		if( $(window).scrollTop()>slideHeight ){
			$('.main-nav').addClass('navbar-fixed-top');
		} else {
			$('.main-nav').removeClass('navbar-fixed-top');
		}
		Scroll();
	});
	
/*	// Navigation Scroll
	$(window).scroll(function(event) {
		Scroll();
	});
*/	
	
/*
// https://github.com/twbs/bootstrap/issues/12852     - colapse on mobiles after click	
	$(document).on('click','.navbar-collapse.in',function(e) {
		if( $(e.target).is('a') && ( $(e.target).attr('class') != 'dropdown-toggle' ) ) {
			$(this).collapse('hide');
		}
	});
// https://github.com/twbs/bootstrap/issues/12852     - colapse on mobiles after click	
	$('.navbar-collapse.in').on('click',function(e) {
		if( $(e.target).is('a') && ( $(e.target).attr('class') != 'dropdown-toggle' ) ) {
			$(this).collapse('hide');
		}
	});
*/	

// collapse on mobile after click	
	$('.navbar-collapse a:not(.dropdown-toggle)').click(function(){
		$(".navbar-collapse").collapse('hide');
	});	
	$('.navbar-collapse .dropdown-menu').click(function(){
		$(".navbar-collapse").collapse('hide');
	});
//--- end collapse mobile after click	
// smooth moving inside one-page . Please note, that real href is not executed, so 
// TODO: execute the href is needed (example - 'purchase'
	$('.navbar-collapse ul .scroll a').on('click', function() {  
		$('html, body').animate({scrollTop: $(this.hash).offset().top}, 1000);
		Scroll();		// force redrawing
		return false;
	});
	
	
	// User define function
	function Scroll() {
		var contentTop      =   [];
		var contentBottom   =   [];
		var winTop      =   $(window).scrollTop();
//		var rangeTop    =   200;
//		var rangeBottom =   500;
		$('.navbar-collapse').find('.scroll a').each(function(){
			contentTop.push( $( $(this.hash) ).offset().top -10 );
			contentBottom.push( $( $(this.hash) ).offset().top -10  + $( $(this.hash) ).height()+10 );
		})
		$.each( contentTop, function(i){
			if ( winTop >= contentTop[i]  ){
				if (winTop <= contentBottom[i] ) {
					$('.navbar-collapse li.scroll')
					.removeClass('active')
					.eq(i).addClass('active');			
				}
			}
		})
	};

	$('#tohash').on('click', function(){
		$('html, body').animate({scrollTop: $(this.hash).offset().top}, 1000);
		Scroll();		// force redrawing
		return false;
	});
	
	//Initiat WOW JS
	new WOW().init();
	//smoothScroll
	smoothScroll.init();
	
	// Progress Bar
	$('#about-us').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
		if (visible) {
			$.each($('div.progress-bar'),function(){
				$(this).css('width', $(this).attr('aria-valuetransitiongoal')+'%');
			});
			$(this).unbind('inview');
		}
	});

	//Countdown
	$('#features').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
		if (visible) {
			$(this).find('.timer').each(function () {
				var $this = $(this);
				$({ Counter: 0 }).animate({ Counter: $this.text() }, {
					duration: 2000,
					easing: 'swing',
					step: function () {
						$this.text(Math.ceil(this.Counter));
					}
				});
			});
			$(this).unbind('inview');
		}
	});

	// Portfolio Single View
	$('#portfolio').on('click','.folio-read-more',function(event){
		event.preventDefault();
		var link = $(this).data('single_url');
		var full_url = '#portfolio-single-wrap',
		parts = full_url.split("#"),
		trgt = parts[1],
		target_top = $("#"+trgt).offset().top;

		var $this = $(this),
        url = $this.attr("href"),
        title = $this.text();
	// we will add history only if portfolio not on the screen
		if ( /*$('#portfolio-details').length > 0 */ portfolio_on ) {
			window.history.replaceState({
				url: url,
				title: title
			}, title, url);
		} else {
			window.history.pushState({
				url: url,
				title: title
			}, title, url);
		}

		$('html, body').animate({scrollTop:target_top}, 600);
		$('#portfolio-single').slideUp(500, function(){
			$(this).load(link,function(){
				$(this).slideDown(500);
			});
		});
		portfolio_on = true;  // 
	});

	// Close Portfolio Single View
	$('#portfolio-single-wrap').on('click', '.close-folio-item',function(event) {
		ClosePortfolio(event);
		window.history.back();   // clear added history (if we have 
	});
	
	var portfolio_on = false;   // is Portfolio on screen

	function ClosePortfolio(event){
		event.preventDefault();
		var full_url = '#portfolio',
		parts = full_url.split("#"),
		trgt = parts[1],
		target_offset = $("#"+trgt).offset(),
		target_top = target_offset.top;
		$('html, body').animate({scrollTop:target_top}, 600);
		$("#portfolio-single").slideUp(500);
		if (portfolio_on) {
			portfolio_on = false;
		}
	}
	
	// prevent closing page on 'back' with the open portfolio page
	/*$(window).on("navigate", function (event, data) {
		var direction = data.state.direction;
		if (direction == 'back') {
			if ($('#portfolio-details').length > 0) {
			// exists.
				ClosePortfolio(event);
			}
		}
		if (direction == 'forward') {
			// do something else
		}
	});	*/
	
	 $(window).on('popstate', function (e) {
		 if ($('#portfolio-details').length > 0) {
			// exists.
			ClosePortfolio(e);
		}
    });


	// Contact form
	$('#main-contact-form').submit(function(event){
		event.preventDefault();
		// Serialize the form data.
		var form = $(this);
		var formData = form.serializeArray(); 
		
		var form_status = $('div.form_status');
		$.ajax({
			async: true,
			cache: false,
			type: 'POST', 
			url:   form.attr('action'),
			data: formData, 
			beforeSend: function(){
				form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Сообщение посылается...</p>').fadeIn() );
			},
			success: function(response) { //Данные отправлены успешно
				form_status.html('<p class="text-success">Спасибо за сообщение. В ближайшее время мы свяжемся с Вами</p>').delay(3000).fadeOut();
				// Clear the form. - not whole
				//$('#name').val('');
				//$('#email').val('');
				$('#subject1').val(''); 
				$('#message1').val(''); 
			},
			error: function(response) { // Данные не отправлены
				if (response.responseText !== '') {
					form_status.html('<p class="text-warning">${response.responseText}</p>').delay(3000).fadeOut();
				} else {
					form_status.html('<p class="text-warning">Опс! Что-то пошло не так и нам не удалось доставить ваше сообщение.</p>').delay(3000).fadeOut();
				}
			}			
		});
	});

	

	//Google Map
	/*** switched off
	var latitude = $('#google-map').data('latitude')
	var longitude = $('#google-map').data('longitude')
	function initialize_map() {
		var myLatlng = new google.maps.LatLng(latitude,longitude);
		var mapOptions = {
			zoom: 14,
			scrollwheel: false,
			center: myLatlng
		};
		var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
		var contentString = '';
		var infowindow = new google.maps.InfoWindow({
			content: '<div class="map-content"><ul class="address">' + $('.address').html() + '</ul></div>'
		});
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map
		});
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});
	}
	google.maps.event.addDomListener(window, 'load', initialize_map);
	*/
	
});

