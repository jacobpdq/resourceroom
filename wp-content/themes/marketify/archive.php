<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Marketify
 */

get_header(); ?>

	<header class="page-header">
		<h1 class="page-title">
			<?php
				if ( is_category() ) :
					single_cat_title();

				elseif ( is_tag() ) :
					single_tag_title();

				elseif ( is_author() ) :
					if ( have_posts() ) : the_post();
						printf( __( 'Blog Author: %s', 'marketify' ), '<span class="vcard">' . get_the_author() . '</span>' );
						rewind_posts();
					else :
						printf( 'Author Not Found', 'marketify' );
					endif;

				elseif ( is_day() ) :
					printf( __( 'Day: %s', 'marketify' ), '<span>' . get_the_date() . '</span>' );

				elseif ( is_month() ) :
					printf( __( 'Month: %s', 'marketify' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

				elseif ( is_year() ) :
					printf( __( 'Year: %s', 'marketify' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

				elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
					_e( 'Asides', 'marketify' );

				elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
					_e( 'Images', 'marketify');

				elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
					_e( 'Videos', 'marketify' );

				elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
					_e( 'Quotes', 'marketify' );

				elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
					_e( 'Links', 'marketify' );

				else :
					_e( 'Archives', 'marketify' );

				endif;
			?>
		</h1>
	</header><!-- .page-header -->

	<div class="container">
		<div id="content" class="site-content row">

			<div id="primary" class="content-area col-md-<?php echo is_active_sidebar( 'sidebar-1' ) ? '8' : '12'; ?>">
				<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', get_post_format() ); ?>

					<?php endwhile; ?>

					<?php marketify_content_nav( 'nav-below' ); ?>

				<?php else : ?>

					<?php get_template_part( 'no-results', 'index' ); ?>

				<?php endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->

			<?php get_sidebar(); ?>

		</div>
	</div>

<?php get_footer(); ?>