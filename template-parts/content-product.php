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
		<section class="intro-section product p45">
			<div class="constrain flexxed">
				<div class="intro-content-image">
					<?php $iImage = get_field( 'intro_section_image' ); ?>
					<img src="<?php echo $iImage[ 'url' ]; ?>" alt="<?php echo $iImage[ 'alt' ]; ?>">
				</div>
				<div class="page-intro-content">
					<h1 class="module-intro underlined left"><?php the_field( 'intro_section_title' ); ?></h1>
					<div class="intro-text">
						<?php the_field( 'intro_section_content' ); ?>
					</div>
					<div class="intro-buttons">
						<a class="btn btn-sm red-brdr" href="/contact">Contact us to learn More About <?php the_title(); ?></a>
					</div>
				</div>
			</div>
		</section>

		<?php if ( have_rows( 'content_section' ) ) : 

			while ( have_rows( 'content_section' ) ) : the_row();

				if ( get_row_layout() == 'half_half' ) : ?>
					<section class="product-section <?php the_sub_field( 'section_background_color' ); ?> p45">
						<div class="constrain md flexxed">
							<div class="left-half half">
								<?php the_sub_field( 'left_half_content' ); ?>
							</div>
							<div class="right-half half">
								<?php the_sub_field( 'right_half_content' ); ?>
							</div>
						</div>
					</section>
				<?php elseif ( get_row_layout() == 'full_width' ) : ?>
					<section class="product-section <?php the_sub_field( 'section_background_color' ); ?> p45">
						<div class="constrain md">
							<?php the_sub_field( 'full_content' ); ?>
						</div>
					</section>
				<?php endif; 

			endwhile;

		endif; ?>

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
