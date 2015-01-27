<?php
/**
 * Template Name: Vendor
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Marketify
 */

$author = get_query_var( 'vendor' );
$author = get_user_by( 'slug', $author );

echo $author;

if ( ! $author ) {
	$author = get_current_user_id();
}

get_header(); ?>
 
	<?php while ( have_posts() ) : the_post(); ?>
	<?php do_action( 'marketify_entry_before' ); ?>



	<main id="main" class="site-main" role="main">

		<div class="entry-content">
			<?php the_content(); ?>
		</div>
<script type="text/javascript">
			
				jQuery(document).ready(function(){
					jQuery('input[type="radio"]').click(function(){
					
					 var radioval = jQuery( "input:radio[name=price_options]:checked" ).val();
					 //alert(radioval);
					 if(radioval=='Paid')
						$(".edd-price-field").show();
						 if(radioval=='Free')
						   $(".edd-price-field").hide();
					}); 
				});
				
			</script>
	</main><!-- #main -->



	<?php endwhile; ?>

<?php get_footer(); ?>