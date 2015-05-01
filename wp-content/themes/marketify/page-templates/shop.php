<?php
/**
 * Template Name: Shop
 *
 * Load the [downloads] shortcode.
 *
 * @package Marketify
 */

get_header(); ?>

	<!-- .page-header -->

<div class="container page-content">
	<div class="card-white double-padding">
		<div class="text-center">
            <h3><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-cart.svg" class="icon icon-xl icon-left">Shopping Cart</h3>
        </div>
		<div class="divider"></div>

		<?php// if ( ! is_paged() && ! get_query_var( 'm-orderby' ) && ! is_page_template( 'page-templates/popular.php' ) ) : ?>
			<?php //get_template_part( 'content-grid-download', 'popular' ); ?>
		<?php //endif; ?>

		<div id="content" class="site-content row" style="min-height:150px">

			<section id="primary" class="content-area col-md-6 col-md-offset-3">
				<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php if ( '' == get_the_content() ) : ?>
						<?php echo do_shortcode( sprintf( '[downloads number="%s"]', get_option( 'posts_per_page' ) ) ); ?>
					<?php else : ?>
						<?php the_content(); ?>
					<?php endif; ?>

				<?php endwhile; ?>

				</main><!-- #main -->
			</section><!-- #primary -->

			<?php get_sidebar( 'archive-download' ); ?>

		</div><!-- #content -->
	</div>
</div>

<?php get_footer(); ?>