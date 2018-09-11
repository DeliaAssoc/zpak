<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Zip_Pak
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found p60">
				<div class="constrain">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'zpak' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'zpak' ); ?></p>

						<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );
						?>

						<div class="widget widget_categories">
							<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'zpak' ); ?></h2>
							<ul>
								<?php
								wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								) );
								?>
							</ul>
						</div><!-- .widget -->

						<?php
						/* translators: %1$s: smiley */
						$zpak_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'zpak' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$zpak_archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
						?>

					</div><!-- .page-content -->
				</div>
			</section><!-- .error-404 -->
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
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
