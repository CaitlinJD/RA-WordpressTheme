<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-content row">
					<div class="site-info small-12 small-centered medium-12 medium-centered large-8 columns">
						<div class="widget-list flex">
							<?php dynamic_sidebar('footer-sidebar') ?>
						</div>
					</div><!-- .site-info -->
					<div class="footer-logo small-12 medium-12 large-4 columns">
						<img src="<?php bloginfo('template_directory'); ?>/images/logos/inhabitent-logo-text.svg" alt="logo" title="logo">
					</div>
					<div class="copyright small-12 columns">
						<p>COPYRIGHT &copy; 2016 INHABITENT</p>
					</div>
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
