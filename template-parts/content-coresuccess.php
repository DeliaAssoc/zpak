<?php
/**
 * Template part for displaying page content in archive-success.php
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

        <section class="succ-intro p60">
            <div class="constrain md">
				<div class="module-intro">
					<h1 class="underlined center" ><?php the_field( 'core_success_stories_title', 'options' ); ?></h1>
				</div>
				<div class="intro-text">
					<?php the_field( 'core_success_stories_text', 'options' ); ?>
				</div>
				<div class="cm-intro-btns">

					<a href="<?php the_field( 'core_success_stories_button_1_link', 'options' ); ?>" class="btn btn-sm red-brdr"><?php the_field( 'core_success_stories_button_1_text', 'options' ); ?></a>
				</div>
            </div>

		</section>
		
		<?php if ( have_rows( 'core_success_stories_stories', 'options' ) ) : ?>
			<section class="core-stories p60" style="background-image: url( '<?php the_field( 'core_success_stories_list_background_image', 'options' ); ?>' );">
				<div class="module-intro underlined center">
					<h2><?php the_field( 'core_success_stories_list_title', 'options' ); ?></h2>
					<div class="text"><?php the_field( 'core_success_stories_list_content', 'options' ); ?></div>
				</div>
				<div class="constrain flexxed">
					
					<?php while ( have_rows( 'core_success_stories_stories', 'options' ) ) : the_row(); ?>
						<a href="<?php the_sub_field( 'core_stories_story_link', 'options' ); ?>" class="success-tile">
                            <?php if ( get_sub_field( 'core_stories_story_icon', 'options' ) ) : ?>
                                <div class="success-icon">
                                    <?php $icon = get_sub_field( 'core_stories_story_icon', 'options' ); ?>
                                    <img src="<?php echo $icon[ 'url' ]; ?>" alt="<?php echo $icon[ 'alt' ]; ?>">
                                </div>
                            <?php endif; ?>
							<div class="success-title"><?php the_sub_field( 'core_stories_story_title', 'options' ); ?> <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
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
