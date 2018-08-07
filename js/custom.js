$( document ).ready( function() {

	// VARIABLES
	$sh = $( '.site-header' ),
	$shHeight = $sh.outerHeight(),
	$th = $( '.top-header' ),
	$thTop = $th.css( 'top' ),
	$thHeight = $th.outerHeight(),
	$thSocial = $th.find( '.social' ),
	$mhHeight = $( '.main-header' ).outerHeight( true ),
	$thSeeMore = $th.find( '.see-more a' ),
	$sContent = $( '.site-content' );

	console.log( $thTop );

	// TOP HEADER
	$thSeeMore.on( 'click', function( e ){

		e.preventDefault();

		if ( $th.hasClass( 'open' ) ) {
			$th.removeClass( 'open' );
			$th.css( 'top', $thTop );
		} else {
			$th.addClass( 'open' );
			$th.css( 'top', 0 );
		}

	});

	$th.find( 'input[type=submit]' ).after( '<i class="fa fa-search" aria-hidden="true"></i>' );

	// SITE CONTENT OFFSET
	if ( $( window ).outerWidth() < 1024 ) {

		$sContent.css( 'paddingTop', $mhHeight );

	} else {
		$sContent.css( 'paddingTop', $shHeight );
	}

	// SET SOCIAL CONTAINER DEPENDING ON TOTAL SOCIAL ITEMS
	$socialCount = $thSocial.find( 'a' ).length;
	$thSocial.css( 'width',  25 * $socialCount );

	// OPEN/CLOSE VIDEO MODAL
	// $modalVidBtn.on( 'click', function( e ){

	// 	e.preventDefault();
	// 	$modalVid.fadeIn();

	// });

	// ( $ModalVidClose ).on( 'click', function( e ){
	// 	$modalVid.fadeOut();
	// });

	// OPEN SEARCH FORM
	// $( 'a.search' ).on( 'click', function( e ){

	// 		e.preventDefault();
			
	// 		if ( $('.search-field').hasClass( 'opened' ) ) {
	// 			$('.search-field').removeClass( 'opened' );
	// 		} else {
	// 			$('.search-field').addClass( 'opened' );
	// 		}
	// });

	// DEFAULT PAGE SLIDER
	$( '.hero-slider' ).slick({
		arrows: false
	});

	// CLIENT MODULE SLIDER
	// $( '.client-slider' ).slick({
	// 	slidesToShow: 4,
	// 	slideToScroll: 4,
	// 	responsive: [
	// 		{
	// 			breakpoint: 959,
	// 			settings: {
	// 				slidesToShow: 2,
	// 				slideToScroll: 2,
	// 				arrows: false
	// 			}
	// 		},
	// 		{
	// 			breakpoint: 567,
	// 			settings: {
	// 				slidesToShow: 1,
	// 				slideToScroll: 1,
	// 				arrows: false
	// 			}
	// 		}
	// 	]
	// });

	// TESTIMONIALS MODULE SLIDER
	$( '.testimonial-slider' ).slick({
		arrows: false,
		dots: true
	});

	// Smooth Scroll for Back To Top Button *Thank you CSS-TRICKS*
	$('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html, body').animate({
				scrollTop: target.offset().top
			}, 1000);
				return false;
			}
		}
	});
});

