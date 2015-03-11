<?php
/**
 * Template Name: Contact us
 *
 * @package Marketify
 */

get_header(); ?>

       <div class="container page-content">
        <div class="row margin-bottom">
          <div class="col-md-6 col-md-offset-3">
            <div class="card-white double-padding">
              <h3 class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-mail.svg" class="icon icon-left icon-xl">Contact Us</h3>
              <div class="divider"></div>
				<?php the_content(); ?>
            </div>
          </div>
         </div>
        </div>
		

<?php get_footer(); ?>
