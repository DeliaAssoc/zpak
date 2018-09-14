<?php
/**
 * Template part for displaying page content in single-markets.php
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

        <section class="success-story">
            <div class="constrain md p60">
                <?php the_content(); ?>
            </div>
        </section>

    <section class="cta-module p60" style="background-image: url( '<?php the_field( 'cta_module_background_image', 'options' ); ?>' );">
        <div class="constrain">
            <div class="module-intro underlined center">
                <h2><?php the_field( 'cta_module_title', 'options' ); ?></h2>
                <div class="sub-title"><?php the_field( 'cta_module_text', 'options' ); ?></div>
            </div>
            <div class="cta-buttons flexxed">
                <a href="<?php the_field( 'cta_module_consultation_button_url', 'options' ); ?>" class="btn btn-md red-bg"><i class="fa fa-envelope" aria-hidden="true"></i> <?php the_field( 'cta_module_consultation_button_text', 'options' ); ?></a>
                <a href="tel:<?php echo get_theme_mod( 'theme_company_tollfree' ); ?>" class="btn btn-md white-bg"><i class="fa fa-phone" aria-hidden="true"></i> <?php the_field( 'cta_module_contact_button_text', 'options' ); ?> <?php echo get_theme_mod( 'theme_company_tollfree' ); ?></a>
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
</article><!-- #post-<?php the_ID(); ?> -->
