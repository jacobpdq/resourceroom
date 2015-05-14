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
                        <div class="col-md-9 footer-col">
						<?php wp_nav_menu( array('menu' => 'Footer Menu' )); ?>
                        </div>
                        <div class="col-md-3 footer-copyright footer-col"> 
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