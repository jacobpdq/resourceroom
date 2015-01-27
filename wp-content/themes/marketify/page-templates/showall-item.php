<?php
/**
 * Template Name: All Items page
 *
 * @package Marketify
 */

get_header(); ?>
<div class="container page-content">
	<div class="card-white double-padding">
		<div class="text-center">
            <h3><?php the_title(); ?></h3>
        </div>
		<div class="divider"></div>
		<div class="row">
			<?php echo do_shortcode('[ALLITEMS]'); ?>
		</div>
	</div>
</div>
			  
	
<?php get_footer(); ?>