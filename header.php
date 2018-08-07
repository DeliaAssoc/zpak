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
						<div class="thl-item phone">
							<i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:<?php echo get_theme_mod( 'theme_company_tollfree' ); ?>"><?php echo get_theme_mod( 'theme_company_tollfree' ); ?></a>
						</div>
						<div class="thl-item blog">
							<i class="fa fa-file-text-o" aria-hidden="true"></i> <a href="">News & Events</a>
						</div>
						<div class="thl-item careers">
							<i class="fa fa-user" aria-hidden="true"></i> <a href="">Careers</a>
						</div>
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
