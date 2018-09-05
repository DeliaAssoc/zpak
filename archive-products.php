<?php
/**
 * The template for displaying archive products
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Zip_Pak
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php

			get_template_part( 'template-parts/content', 'coreproducts' );

		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

