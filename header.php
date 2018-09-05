<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zip_Pak
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicons/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<style>
		/* Stops content flash on load */
		.hero-slider, .product-slider {
			display: none;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'zpak' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="top-header">
			<div class="constrain">
				<div class="flexxed">
					<div class="th-left flexxed">
						<?php if ( is_active_sidebar( 'top_header' ) ) : ?>
							<?php dynamic_sidebar( 'top_header' ); ?>
						<?php endif; ?>
						<div class="thl-item social">
							<div class="flexxed">
								<?php social_media_list(); ?>
							</div>
						</div>
					</div>
					<div class="search">
						<?php get_search_form(); ?>
					</div>
					<div class="th-right flexxed">
						<div class="thr-item worldwide-link">
							<a href="">
								<i class="fa fa-globe" aria-hidden="true"></i> Zip-Pak Worldwide
							</a>
						</div>
						<div class="thr-item language">
							<?php if ( is_active_sidebar( 'header_language' ) ) : ?>
								<ul class="language-options">
									<?php dynamic_sidebar( 'header_language' ); ?>
								</ul>
							<?php endif; ?> 
						</div>
					</div>
				</div>
				<div class="see-more">
					<a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
				</div>
			</div>
		</div><!-- .top-header -->
		<div class="main-header">
			<div class="constrain">
				<div class="flexxed">
					<div class="site-branding">
						<a href="/" class="site-logo">
							<img src="<?php echo get_theme_mod( 'theme_logo' ); ?>" alt="">
						</a>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div><!-- .main-header -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
