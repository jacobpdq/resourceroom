<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Marketify
 */
?>

</div> <!---- /wrap ----->
		
<footer id="colophon" class="fluid-container footer-bg" role="contentinfo">
		<div class="footer">
        <div class="container">
					<div class="site-info row">
						<div class="footer-logo col-md-3">
							<span>
								<a href="<?php echo home_url(); ?>">
									<?php if ( marketify_theme_mod( 'footer', 'footer-logo' ) ) : ?>
										<img src="<?php echo marketify_theme_mod( 'footer', 'footer-logo' ); ?>" />
									<?php else : ?>
										<?php bloginfo( 'name' ); ?>
									<?php endif; ?>
								</a>
							</span>
						</div>
                        <div class="col-md-6">
						<?php wp_nav_menu( array('menu' => 'Footer Menu' )); ?>
                        </div>
                        <div class="col-md-3 footer-copyright text-right"> 
                          <small>
					       <?php printf( __( '&copy; %d %s. All rights reserved.', 'marketify' ), date( 'Y' ), get_bloginfo( 'name' ) ); ?>
                          </small>
				        </div>
                    </div>
				</div>
				</div>

			
	</footer><!-- #colophon -->
<!-- #page -->

<?php wp_footer(); ?>
</body>
</html>