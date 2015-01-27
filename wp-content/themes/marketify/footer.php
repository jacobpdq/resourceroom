<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Marketify
 */
?>

	
		
<footer id="colophon" class="fluid-container footer-bg" role="contentinfo">
			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<div class="footer">
        <div class="container">
				<div class="row">
					<div class="site-info col-md-12<?php echo is_active_sidebar( 'footer-1' ) ? ' has-widgets' : ''; ?>">
						<div class="footer-logo">
							<h3>
								<a href="<?php echo home_url(); ?>">
									<?php if ( marketify_theme_mod( 'footer', 'footer-logo' ) ) : ?>
										<img src="<?php echo marketify_theme_mod( 'footer', 'footer-logo' ); ?>" />
									<?php else : ?>
										<?php bloginfo( 'name' ); ?>
									<?php endif; ?>
								</a>
							</h3>
						</div>
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
				</div>
				<div class="footer-copyright text-right"> 
					<small>
					<?php printf( __( '&copy; %d %s. All rights reserved.', 'marketify' ), date( 'Y' ), get_bloginfo( 'name' ) ); ?></small>
				</div>
				</div>
				</div>
				
			<?php endif; ?>

			
	</footer><!-- #colophon -->
<!-- #page -->

<?php wp_footer(); ?>

</body>
</html>