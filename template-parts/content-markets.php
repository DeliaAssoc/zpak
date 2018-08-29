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
					<div class="intro-buttons flexxed">
						<a class="btn btn-sm red-bg" href="/contact">Request a Quote</a>
						<a class="btn btn-sm mdgray-brdr" href="/contact">Learn More About <?php the_title(); ?></a>
					</div>
				</div>
			</div>
		</section>

        <?php if ( have_rows( 'products' ) ) : ?>
            <section class="market-products ltgray-bg p60">
                <div class="constrain">
                    <div class="module-intro underlined">
                        <h2><?php the_field( 'product_title' ); ?></h2>
                    </div>
                    <div class="module-intro"><?php the_field( 'products_text_content' ); ?></div>
                </div>
                <div class="constrain md">
                    <div class="pros flexxed">
                        <?php while ( have_rows( 'products' ) ) : the_row(); ?>
                            <div class="market-product-tile flexxed">
                                <?php $mpImage = get_sub_field( 'product_image' ); ?>
                                <img src="<?php echo $mpImage[ 'url' ]; ?>" alt="<?php echo $mpImage[ 'alt' ]; ?>" class="mpimage">
                                <div class="mp-content">
                                    <h3><?php the_sub_field( 'product_name' ); ?></h3>
                                    <div class="snippet"><?php the_sub_field( 'product_snippet' ); ?></div>
                                    <a href="<?php the_sub_field( 'product_link' ); ?>"class="btn btn-sm" >Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if ( get_field( 'success_story_title' ) ) : ?>
            <section class="mp-successstory p60" style="background-image: url( '<?php the_field( 'success_story_background_image' ); ?>' );">
                <div class="constrain flexxed">
                    <?php $ssImage = get_field( 'success_story_image' ); ?>
                    <img src="<?php echo $ssImage[ 'url' ]; ?>" alt="<?php echo $ssImage[ 'alt' ]; ?>" class="ss-image">
                    <div class="mp-ss-content">
                        <div class="sub-heading"><?php the_field( 'success_story_sub_heading' ); ?></div>
                        <h2><?php the_field( 'success_story_title' ); ?></h2>
                        <div class="text"><?php the_field( 'success_story_snippet' ); ?></div>
                        <a href="<?php the_field( 'success_story_link' ); ?>" class="btn btn-sm red-bg"><?php the_field( 'success_story_link_text' ); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </section>
        <?php endif; ?>

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
