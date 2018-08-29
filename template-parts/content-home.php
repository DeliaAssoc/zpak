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

    <section class="hero">
        <?php if ( have_rows( 'slides' ) ) : ?>
            <div class="hero-slider p60" style="background-image: url( '<?php the_field( 'slider_background_image' ); ?>' );">
                <?php while ( have_rows( 'slides' ) ) : the_row();
                    $sImage = get_sub_field( 'slide_image' ); ?>
                    <div class="slide">
                        <div class="constrain">
                            <div class="slide-image">
                                <img src="<?php echo $sImage[ 'url' ]; ?>" alt="<?php echo $sImage[ 'alt' ]; ?>">
                            </div>
                            <div class="slide-content">
                                <div class="sub-heading"><?php the_sub_field( 'slide_sub-heading' ); ?></div>
                                <div class="slide-text"><?php the_sub_field( 'slide_text_content' ); ?></div>
                                <?php if ( have_rows( 'slide_buttons' ) ) : ?>
                                    <div class="slide-btns flexxed">
                                        <?php while ( have_rows( 'slide_buttons' ) ) : the_row(); ?>
                                            <a href="<?php the_sub_field( 'button_url' ); ?>" class="btn btn-sm <?php the_sub_field( 'button_color' ); ?>"><?php the_sub_field( 'button_text' ); ?></a>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </section>

    <section class="solutions-module p60" style="background-image: url( '<?php the_field( 'solutions_background_image' ); ?>' );">
        <div class="constrain">
           <div class="module-intro">
            <h2><?php the_field( 'solutions_heading' ); ?></h2>
                <div class="intro-text"><?php the_field( 'solutions_introduction_text' ); ?></div>
           </div>
           <?php if ( have_rows( 'solutions' ) ) : ?>
            <div class="tabbed-section">
                <div class="select-tabs flexxed">
                    <?php while ( have_rows( 'solutions' ) ) : the_row(); ?>
                        <?php $ref = substr( str_replace( ' ', '', strtolower( get_sub_field( 'solution_icon_title' )) ), 0, 7 ) ; ?>
                        <a href="#" data-ref="<?php echo $ref; ?>" class="tab-select">
                            <div class="tabbed-icon">
                                <?php
                                    $tIcon = get_sub_field( 'solution_icon' );
                                    $tIconH = get_sub_field( 'solution_icon_hovered' );
                                ?>
                                <img class="icon rest" src="<?php echo $tIcon[ 'url' ]; ?>" alt="<?php echo $tIcon[ 'alt' ]; ?>">
                                <img class="icon active" src="<?php echo $tIconH[ 'url' ]; ?>" alt="<?php echo $tIconH[ 'alt' ]; ?>">
                            </div>
                            <div class="icon-title"><?php the_sub_field( 'solution_icon_title' ); ?></div>
                        </a>
                    <?php endwhile; ?>
                </div>
                <div class="tabbed-content">
                    <?php while ( have_rows( 'solutions' ) ) : the_row(); ?>
                        <?php $ref = substr( str_replace( ' ', '', strtolower( get_sub_field( 'solution_icon_title' )) ), 0, 7 ) ; ?>
                        <div id="<?php echo $ref; ?>" class="tab-content flexxed">
                            <div class="text-wrapper">
                                <h3><?php the_sub_field( 'solution_content_title' ); ?></h3>
                                <div class="text"><?php the_sub_field( 'solution_content_text' ); ?></div>
                            </div>
                            <div class="img-btn">
                                <?php $tcImage = get_sub_field( 'solution_content__image' ); ?>
                                <div class="tab-image">
                                    <img src="<?php echo $tcImage[ 'url' ]; ?>" alt="<?php echo $tcImage[ 'url' ]; ?>">
                                </div>
                                <a href="<?php the_sub_field( 'solution_content_link_url' ); ?>" class="btn btn-sm red-bg"><?php the_sub_field( 'solution_content_link_text' ); ?></a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="product-line-module sub">
        <div class="constrain">
            <h2><?php the_field( 'product_line_slider_title', 'options' ); ?></h2>
            <?php
                // WP_Query arguments
                $args = array(
                    'post_type'              => array( 'products' ),
                    'order'                  => 'DESC',
                    'orderby'                => 'title',
                    'posts_per_page'        => '10'
                    
                );

                // The Query
                $pQuery = new WP_Query( $args );

                // The Loop
                if ( $pQuery->have_posts() ) { ?>
                    <div class="product-slider">
                        <?php while ( $pQuery->have_posts() ) : $pQuery->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="product-tile">
                            <div class="product-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="product-title"><?php the_title(); ?></div>
                            <div class="product-snippet">
                                <?php the_field( 'product_snippet' ); ?>
                            </div>
                            <div class="read-more btn btn-sm">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        </a><!-- .product-tile -->
                        <?php endwhile; ?>
                    </div><!-- .product-slider -->
                <?php } 
                // Restore original Post Data
                wp_reset_postdata();
            ?>
        </div>
    </section>

    <section class="markets-module p60" style="background-image: url( '<?php the_field( 'markets_background_image' ); ?>' );">
        <div class="constrain">
            <div class="module-intro underlined">
                <h2><?php the_field( 'markets_content_title' ); ?></h2>
                <div class="sub-title"><?php the_field( 'markets_content_text' ); ?></div>
            </div>
            <?php if ( have_rows( 'markets' ) ) : ?>
                <div class="flexxed">
                    <?php while ( have_rows( 'markets' ) ) : the_row(); ?>
                    <a href="<?php the_sub_field( 'market_link' ); ?>" class="market-tile">
                        <div class="market-icon">
                            <?php $icon = get_sub_field( 'market_icon' ); ?>
                            <img src="<?php echo $icon[ 'url' ]; ?>" alt="<?php echo $icon[ 'alt' ]; ?>">
                        </div>
                        <div class="market-title"><?php the_sub_field( 'market_title' ); ?> <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                    </a><!-- .market-tile -->
                    <?php endwhile; ?>
                </div><!-- .flexxed -->
            <?php endif; ?>
        </div>
    </section>

    <section class="cta-module p60" style="background-image: url( '<?php the_field( 'cta_module_background_image', 'options' ); ?>' );">
        <div class="constrain">
            <div class="module-intro underlined">
                <h2><?php the_field( 'cta_module_title', 'options' ); ?></h2>
                <div class="sub-title"><?php the_field( 'cta_module_text', 'options' ); ?></div>
            </div>
            <div class="cta-buttons flexxed">
                <a href="<?php the_field( 'cta_module_consultation_button_url', 'options' ); ?>" class="btn btn-md white-brdr"><i class="fa fa-envelope" aria-hidden="true"></i> <?php the_field( 'cta_module_consultation_button_text', 'options' ); ?></a>
                <a href="tel:<?php echo get_theme_mod( 'theme_company_tollfree' ); ?>" class="btn btn-md white-brdr"><i class="fa fa-phone" aria-hidden="true"></i> <?php the_field( 'cta_module_contact_button_text', 'options' ); ?> <?php echo get_theme_mod( 'theme_company_tollfree' ); ?></a>
            </div>
        </div>
    </section>

    <section class="success-module p60" style="background-image: url( '<?php the_field( 'success_module_background_image', 'options' ); ?>' );">
        <div class="constrain">
            <div class="flexxed">
                <?php
                    // WP_Query arguments
                    $args = array(
                        'post_type'              => array( 'success' ),
                        'order'                  => 'DESC',
                        'orderby'                => 'title',
                    );

                    // The Query
                    $sQuery = new WP_Query( $args ); ?>

                    <?php if ( $sQuery->have_posts() ) : ?>
                        <div class="success-slider flx-half">
                            <?php while ( $sQuery->have_posts() ) : $sQuery->the_post(); ?>
                                <div class="success-image">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                    <div class="success-content flx-half">
                        <div class="sub-heading"><?php the_field( 'success_module_subtitle', 'options' ); ?></div>
                        <h2><?php the_field( 'success_module_title', 'options' ); ?></h2>
                        <div class="text-wrapper"><?php the_field( 'success_module_text_content', 'options' ); ?></div>
                            <?php // The Loop
                            if ( $sQuery->have_posts() ) : ?>
                                <div class="success-links flexxed">
                                    <?php while ( $sQuery->have_posts() ) : $sQuery->the_post(); ?>
                                        <div class="link">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                    </div>
        
                    <?php wp_reset_postdata(); ?>
            </div><!-- .flexxed -->
        </div>
    </section>

    <section class="testimonials-slider-module p60">
        <div class="constrain">
            <div class="module-intro underlined">
                <h2><?php the_field( 'testimonials_slider_title', 'options' ); ?></h2>
            </div>
            <?php
                // WP_Query arguments
                $args = array(
                    'post_type' => array( 'testimonial' ),
                );

                // The Query
                $query = new WP_Query( $args );

                // The Loop
                if ( $query->have_posts() ) { ?>
                    <div class="testimonial-slider">
                        <?php while ( $query->have_posts() ) {
                            $query->the_post(); ?>
                            
                            <div class="slide">
                                <?php the_content(); ?>
                                <div class="client-wrapper">
                                    <div class="title">Client Name</div>
                                    <div class="name-comp"><?php the_field( 'client_company' ); ?>, <?php the_field( 'client_name' ); ?></div>
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                <?php } else {
                    // no posts found
                }

                // Restore original Post Data
                wp_reset_postdata();
            ?>        
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