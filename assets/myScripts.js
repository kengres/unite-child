jQuery( document ).ready( function( $ ) {
    var $version = '0.3';
    console.log('version: ', $version);
	
	var $bcg = $('.carousel-inner div:first');

	// Script for mobile
	if ($(window).width() < 767) {

		// Set the height of carousel
		setTimeout(function() {

			$bcg.height(250);

		}, 100);
	}


	// Script for table
	if ($(window).width() > 767 && $(window).width() < 991 ) {

		// Set the height of carousel
		setTimeout(function() {

			$bcg.height(400);

		}, 100);
	}
	



} );
