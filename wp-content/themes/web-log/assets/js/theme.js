jQuery(function($) {
	
	'use strict';
	
	$("#search-icon").click(function () {
	  $('#search-popup').addClass('popup-box-on');
	  $('#search-popup').find('.pop-up-form').focus();
	  return false;
	});
	  
	$("#search-popup .close").click(function () {
		$('#search-popup').removeClass('popup-box-on');
	});
	
	$("#mobile-search").click(function () {
	  $('#mobile-search-popup').addClass('popup-box');
	  $('#mobile-search-popup').find('.pop-up-form').focus();
	  return false;
	});
	  
	$("#close-icon").click(function () {
		$('#mobile-search-popup').removeClass('popup-box');
	});
	
	
	$('.main-menu').clone().appendTo('.mobile-menu');
	$( ".menu-icon" ).on( "click", function() {

		$(".mobile-menu").slideToggle();
	
		$('ul.main-menu').find('li').find('a').first().focus();// set focus to first anchor
		

	});	


 


	$(".mobile-nav").on('keydown',function(e) {

		$('ul.main-menu').find('li').find('a').first().focus();// set focus to first anchor
		

		$(".main-menu").find("li:first a").focus().addClass("active");

		if(e.which == 13) {
			
			$(".mobile-menu").slideToggle();

			$(".main-menu").find("li:first a").focus().addClass("active");


		
			
		}

	});




 $("li.menu-item-has-children").on('click',function(e) {
	

     $(this).children(".mobile-menu ul.sub-menu").slideToggle();


 	  $( this ).find('.zmm-dropdown-toggle').toggleClass('fa-minus');
		


	});


	$('.mobile-menu').find('.menu-item-has-children').append('<span class="zmm-dropdown-toggle fa fa-plus"></span>');
	$( ".mobile-menu .main-menu" ).find('.sub-menu').slideToggle();
	
	

	
	$('.mobile-menu-wrap').find('.mobile-menu').append('<a href="#" class="menu-close"><i class="fa fa-times"></i></a>');
	
	$('.mobile-menu-wrap .menu-close').on("click", function() { $(".mobile-menu").removeAttr("style") } );
	
	if ($(window).width() <= 1024) {
		
		//$( "body" ).addClass( "zmm-open" );
		if($('.menu-icon').on('click', function () {
			$( "body" ).addClass( "zmm-open" ); })
		);
		if($('.menu-close').on('click', function(){
			$( "body" ).removeClass( "zmm-open" ); })
		);
			
	}
	
	
		
});


