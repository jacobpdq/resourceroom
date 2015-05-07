<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Marketify
 */

get_header(); ?>

	<div class="container page-content">
		<div class="card-white double-padding">
			<div id="content" class="site-content row">
				<div id="primary" class="content-area col-md-<?php echo is_active_sidebar( 'sidebar-1' ) ? '8' : '12'; ?> col-xs-12">
					<main id="main" class="site-main" role="main">

				<section class="error-404 not-found">
					<div class="page-content">
                      <h3>Page not found!</h3>
                      <div class="divider"></div>
                      <p>Sorry, we can't find the page you're looking for! If you've stumbled across a broken link, <a href="<?php echo $siteurl ?>/contact-us">let us know</a>!</p>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

				</main><!-- #main -->
			</div><!-- #primary -->
          </div>
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>