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



	// HOME PAGE SLIDER
	$( '.hero-slider' ).slick({
		arrows: true,
		responsive: [
			{
				breakpoint: 960,
				settings: {
					arrows: false
				}
			}
		]
	});


	// TABBED CONTENT
	$( '.select-tabs a:first-of-type' ).addClass( 'selected' );
	$( '.tabbed-content .tab-content:first-of-type' ).addClass( 'open' );

	$( '.select-tabs a' ).on( 'click', function( e ) {

		e.preventDefault();

		$tbdAnchs = $( '.select-tabs a' ),
		$clicked = $( this ),
		$curTab = $clicked.data( 'ref' ),
		$allTabs = $( '.tabbed-content' ).find( '.tab-content' ),
		$selectedTab = $( '.tabbed-content' ).find( '#' + $curTab );

		if ( !$selectedTab.hasClass( '.open' ) ) {
	
			// Remove active from all tabs
			$tbdAnchs.removeClass( 'selected' );
		
			// Add selected to clicked tab
			$clicked.addClass( 'selected' );
			
			// Hide all tab content
			$allTabs.removeClass( 'open' );
			
			// Display selected tab content
			$selectedTab.addClass( 'open' );
			
		} 
	});

	
	// TESTIMONIALS MODULE SLIDER
	$( '.product-slider' ).slick({
		arrows: false,
		dots: true,
		slidesToShow: 5,
		slidesToScroll: 5,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4,
					slideToScroll: 4
				}
			},
			{
				breakpoint: 960,
				settings: {
					slidesToShow: 3,
					slideToScroll: 3
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slideToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					dots: false,
					slidesToShow: 1,
					slideToScroll: 1
				}
			}
		]
	});




	if ( $( window ).outerWidth() > 767 ) {
		
		// SUCCESS SLIDER
		$( '.success-slider' ).slick({
			arrows: false,
			autoplay: true,
			autoplaySpeed: 4500
		});
	}


	
	// TESTIMONIALS SLIDER
	$( '.testimonial-slider' ).slick({
		arrows: false,
		dots: true
	});
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