"use strict";

jQuery(document).ready(function($){

	/************** Menu Content Opening *********************/
	$(".main_menu a, .responsive_menu a").click(function(){
		var id =  $(this).attr('class');
		id = id.split('-');
		$("#menu-container .content").hide();
		$("#menu-container #menu-"+id[1]).addClass("animated fadeInDown").show();
		$("#menu-container .homepage").hide();
		$(".support").hide();
		$(".testimonials").hide();
		return false;
	});

	$( window ).load(function() {
	  $("#menu-container .products").hide();
	});

	$(".main_menu a.templatemo_home").addClass('active');

	$(".main_menu a.templatemo_home").click(function(){
		$("#menu-container .homepage").addClass("animated fadeInDown").show();
		$(this).addClass('active');
		$(".main_menu a.templatemo_page3").removeClass('active');
		$(".main_menu a.templatemo_page4").removeClass('active');
		return false;
	});

	$(".main_menu a.templatemo_page3").click(function(){
		$("#menu-container .about").addClass("animated fadeInDown").show();
		$(".our-services").show();
		$(this).addClass('active');
		$(".main_menu a.templatemo_home").removeClass('active');
		$(".main_menu a.templatemo_page4").removeClass('active');
		return false;
	});

	
	$(".main_menu a.templatemo_page4").click(function(){
		$("#menu-container .contact").addClass("animated fadeInDown").show();
		$(this).addClass('active');
		$(".main_menu a.templatemo_page3").removeClass('active');
		$(".main_menu a.templatemo_home").removeClass('active');
		
		loadScript();
		return false;
	});



	loadScript();

	/************** Gallery Hover Effect *********************/
	$(".overlay").hide();

	$('.gallery-item').hover(
	  function() {
	    $(this).find('.overlay').fadeIn(1000);
	  },
	  function() {
	    $(this).find('.overlay').fadeOut(1000);
	  }
	);
	
	/*********** Menu Top ****************/
	 var num = 50;
	$(window).bind('scroll', function () {
		if ($(window).scrollTop() > num) {
			$('.menu').addClass('fixed');
		} else {
			$('.menu').removeClass('fixed');
		}
	});


	/************** LightBox *********************/
	$(function(){
		$('[data-rel="lightbox"]').lightbox();
	});


	$("a.menu-toggle-btn").click(function() {
	  $(".responsive_menu").stop(true,true).slideToggle();
	  return false;
	});
 
    $(".responsive_menu a").click(function(){
		$('.responsive_menu').hide();
	});

});

/********* Map  *********** 
	*/
function loadScript() {


  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
      'callback=initialize';
  document.body.appendChild(script); 
   
}

function initialize() {
    var mapOptions = {
	center: new google.maps.LatLng(40.7828839,-73.9652425),
	zoom: 15,
	scrollwheel: false,
	mapTypeId: google.maps.MapTypeId.ROADMAP
	};
    var map = new google.maps.Map(document.getElementById('templatemo_map'), mapOptions);
}

	    google.maps.event.addDomListener(window, 'load', initialize);
		google.maps.event.addDomListener(window, 'resize', function() 
		{
			map.setCenter(center);
		});