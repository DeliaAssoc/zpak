<?php
/**
 * Template part for displaying page content in single-products.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Zip_Pak
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<section class="breadcrumbs">
			<div class="constrain">
				<?php bcn_display(); ?>
			</div>
		</section>

        <section class="full-width p60">
            <div class="constrain">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </section>
		
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
