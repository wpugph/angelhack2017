<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BootstrapFast
 */

?>
			</div><!-- #contennt -->
		</div><!-- .row -->
	</div><!-- .container --> <?php
	if ( ! main_sidebar_placement() ) {
			get_sidebar();
	} ?>
	<footer id="colophon" class="site-footer <?php echo esc_attr( container_type() ) ?>" role="contentinfo">
		<div class="row">
			<div class="col-md-12">
				<div class="site-info">
					Digital Basurero 2017
				</div><!-- .site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>
</html>
