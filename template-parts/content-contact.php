<?php
/**
 * Template part for displaying page content in contact.php
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

        <section class="contact-intro p60">
            <div class="constrain md">
				<div class="module-intro">
					<h1 class="underlined center" ><?php the_field( 'introduction_title' ); ?></h1>
				</div>
				<div class="intro-text">
					<?php the_field( 'introduction_content' ); ?>
				</div>
            </div>

		</section>

        <section class="form-locs p45">
            <div class="constrain">
                <div class="flexxed">
                    <div class="half locs">
                        <?php if ( have_rows( 'locations' ) ) : ?>
                            <?php while ( have_rows( 'locations' ) ) : the_row(); ?>
                                <div class="region-block">
                                    <h3 class="dk-underlined"><?php the_sub_field( 'region_title' ); ?></h3>
                                        <?php while ( have_rows( 'region_locations' ) ) : the_row(); ?>
                                            <div class="location">
                                                <div class="location-title">
                                                    <?php the_sub_field( 'location_title' ); ?>
                                                </div>
                                                <div class="location-info">
                                                    <?php the_sub_field( 'location_information' ); ?>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="half form">
                        <?php the_field( 'contact_page_form' ); ?>
                    </div>
                </div>
            </div>
        </section>

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

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
