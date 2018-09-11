<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Zip_Pak
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main p60">

		<?php if ( have_posts() ) : ?>
			<div class="constrain">
			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'zpak' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
			</div>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</section><!-- #primary -->
    <?php if ( have_rows( 'quick_links_module', 'options' ) ) : ?>
        <section class="quick-links flexxed">
            <?php while ( have_rows( 'quick_links_module', 'options' ) ) : the_row(); ?>
                <a href="<?php the_sub_field( 'quick_link_url', 'options' ); ?>" class="quick-link">
                    <div class="flexxed">
                        <div class="ql-icon">
                            <?php $qlIcon = get_sub_field( 'quick_link_icon', 'options' ); ?>
                            <img src="<?php echo $qlIcon[ 'url' ]; ?>" alt="<?php echo $qlIcon[ 'alt' ]; ?>">
                        </div>
                        <div class="ql-content">
                            <div class="title"><?php the_sub_field( 'quick_link_title', 'options' ); ?></div>
                            <div class="btn white-brdr">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </a>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
<?php

get_footer();
