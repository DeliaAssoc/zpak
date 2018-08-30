<?php
/**
 * Template part for displaying page content in single-service.php
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
		<section class="intro-section product p45">
			<div class="constrain flexxed">
				<div class="intro-content-image">
					<?php $iImage = get_field( 'introduction_image' ); ?>
					<img src="<?php echo $iImage[ 'url' ]; ?>" alt="<?php echo $iImage[ 'alt' ]; ?>">
				</div>
				<div class="page-intro-content">
					<h1 class="module-intro underlined left"><?php the_field( 'introduction_title' ); ?></h1>
					<div class="intro-text">
						<?php the_field( 'introduction_content_text' ); ?>
					</div>

					<?php if ( get_field( 'accordion_items_option' ) == 'yes' ) : ?>

						<div class="accordion white-theme">
							<?php if ( get_field( 'accordion_title' ) ) : ?>
								<div class="accordion-title"><?php the_field( 'accordion_title' ); ?></div>
							<?php endif; ?>
							<?php while ( have_rows( 'accordion_items' ) ) : the_row(); ?>
								<a href="#" class="acc-title">
									<?php the_sub_field( 'item_title' ); ?>
								</a>
								<div class="acc-content">
									<?php the_sub_field( 'item_content' ); ?>
								</div>
							<?php endwhile; ?>
						</div>

					<?php endif; ?>

					<div class="intro-buttons flexxed">
						<a class="btn btn-sm red-bg" href="/contact">Request a Quote</a>
						<a class="btn btn-sm mdgray-brdr" href="/contact">Contact Us for More Information</a>
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
