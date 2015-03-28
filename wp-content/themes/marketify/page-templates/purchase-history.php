<?php
/**
 * Template Name: Purchase History
 *
 * @package Marketify
 */

get_header(); ?>
	      <div class="container page-content">
        <div class="card-white double-padding">
          <div class="text-center">
            <h3> <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-cart.svg" class="icon icon-xl icon-left">Purchase History</h3>
          </div>
          <div class="divider"></div>
           <?php echo do_shortcode('[purchase_history]'); ?>
        </div>
      </div>
			
	
			   
	
<?php get_footer(); ?>