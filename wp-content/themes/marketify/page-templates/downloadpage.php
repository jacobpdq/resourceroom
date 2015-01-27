<?php
/**
 * Template Name: Download Page
 *
 * @package Marketify
 */

get_header(); ?>
	      <div class="container page-content">
        <div class="card-white double-padding">
          <div class="text-center">
            <h3> <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-downloads.svg" class="icon icon-xl icon-left">My Downloads</h3>
          </div>
          <div class="divider"></div>
          <div class="table">
           <?php echo do_shortcode('[purchase_history]'); ?>
          </div>
        </div>
      </div>
			
	
			   
	
<?php get_footer(); ?>