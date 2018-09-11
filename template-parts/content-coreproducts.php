<?php
/**
 * Template part for displaying page content in core-markets.php
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

        <section class="cp-intro p60">
            <div class="constrain md">
				<div class="module-intro">
					<h1 class="underlined center" ><?php the_field( 'core_products_introduction_title', 'options' ); ?></h1>
				</div>
				<div class="intro-text">
					<?php the_field( 'core_products_introduction_text', 'options' ); ?>
				</div>
				<div class="cm-intro-btns">

					<a href="<?php the_field( 'core_products_intro_button_1_link', 'options' ); ?>" class="btn btn-sm red-brdr"><?php the_field( 'core_products_intro_button_1_text', 'options' ); ?></a>
				</div>
            </div>

		</section>
		
		<?php if ( have_rows( 'core_products_products', 'options' ) ) : ?>
			<section class="core-products p60" style="background-image: url( '<?php the_field( 'core_products_product_list_background_image', 'options' ); ?>' );">
				<div class="module-intro">
					<h2 class="underlined center"><?php the_field( 'core_products_product_list_title', 'options' ); ?></h2>
					<div class="text"><?php the_field( 'core_products_product_list_content', 'options' ); ?></div>
				</div>
				<div class="constrain md flexxed">
					
					<?php while ( have_rows( 'core_products_products', 'options' ) ) : the_row(); ?>
						<a href="<?php the_sub_field( 'core_product_link', 'options' ); ?>" class="core-product-tile">
							<div class="core-product-image">
								<?php $pImage = get_sub_field( 'core_product_image', 'options' ); ?>
                                <img src="<?php echo $pImage[ 'url' ]; ?>" alt="<?php echo $pImage[ 'alt' ]; ?>">
                            </div>
                            <div class="core-product-content">
                                <h3 class="core-product-title"><?php the_sub_field( 'core_product_name', 'options' ); ?> </h3>
                                <div class="core-product-snippet">
                                    <?php the_sub_field( 'core_product_snippet', 'options' ); ?>
                                </div>
                                <div class="cp-learn-more">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                            </div>
						</a>
					<?php endwhile; ?>
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
