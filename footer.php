<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zip_Pak
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="main-footer p60" style="background-image:url('<?php the_field( 'footer_background_image', 'options' ); ?>');">
			<div class="constrain">
				<div class="flexxed">
					<div class="footer-col">
						<?php if ( get_theme_mod( 'theme_footer_logo' ) ) : ?>
							<div class="footer-logo">
								<img src="<?php echo get_theme_mod( 'theme_footer_logo' ); ?>" alt="">
							</div>
						<?php endif; ?>
						<?php if ( get_theme_mod( 'theme_company_snippet' ) ) : ?>
							<div class="footer-snippet">
								<p><?php echo get_theme_mod( 'theme_company_snippet' ); ?></p>
								<p><?php echo get_theme_mod( 'theme_company_second_snippet' ); ?></p>
							</div>
						<?php endif; ?>
						<div class="footer-contacts">
							<div class="thr-item worldwide-link">
								<a href="">
									<i class="fa fa-globe" aria-hidden="true"></i> Zip-Pak Worldwide
								</a>
							</div>
							<div class="footer-phone">
								<i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:<?php echo get_theme_mod( 'theme_company_tollfree' ); ?>"><?php echo get_theme_mod( 'theme_company_tollfree' ); ?></a>
							</div>
							<div class="footer-email">
								<i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo get_theme_mod( 'theme_company_email' ); ?>"><?php echo get_theme_mod( 'theme_company_email' ); ?></a>
							</div>
							<div class="footer-social">
								<div class="flexxed">
									<?php social_media_list(); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-col">
						<?php if ( is_active_sidebar( 'column_1' ) ) : ?>
							<?php dynamic_sidebar( 'column_1' ); ?>
						<?php endif; ?>
					</div>
					<div class="footer-col">
						<?php if ( is_active_sidebar( 'column_2' ) ) : ?>
							<?php dynamic_sidebar( 'column_2' ); ?>
						<?php endif; ?>
					</div>
					<div class="footer-col">
						<?php if ( is_active_sidebar( 'column_3' ) ) : ?>
							<?php dynamic_sidebar( 'column_3' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer legal-info">
			<div class="constrain">
				<?php if ( is_active_sidebar( 'legal' ) ) : ?>
					<?php dynamic_sidebar( 'legal' ); ?>
				<?php endif; ?>
				<div class="copy">&copy; Copyright <?php echo date( 'Y' ); ?> Zip-Pak<sup>&reg;</sup></div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
