<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Zip_Pak
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
            the_content();
        ?>
	</div><!-- .entry-content -->

    <section class="hero-slider">
        HERO SLIDER    
    </section>

    <section class="solutions-module">
        <div class="constrain">
            SOLUTIONS
        </div>
    </section>

    <section class="product-line-module">
        <div class="constrain">
            PRODUCTS SLIDER
        </div>
    </section>

    <section class="markets-module">
        <div class="constrain">
            MARKETS
        </div>
    </section>

    <section class="success-module">
        <div class="constrain">
            SUCCESS STORIES
        </div>
    </section>

    <section class="cta-module">
        <div class="constrain">
            CTA MODULE
        </div>
    </section>

    <section class="testimonials-slider-module">
        <div class="constrain">
            TESTIMONIALS SLIDER
        </div>
    </section>

    <section class="quick-links">
        QUICK LINKS
    </section>

</article><!-- #post-<?php the_ID(); ?> -->
