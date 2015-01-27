<?php
/**
 * Template Name: Registration
 *
 * @package Marketify
 */

get_header(); ?>
<div class="container page-content">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
            <div class="card-white double-padding">
              <h3 class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-user.svg" class="icon icon-xl icon-left">Create your account</h3>
              
             <?php echo do_shortcode('[fes_registration_form]');?>
			 
			 <script type="text/javascript">
			 jQuery(document).ready(function (){
			 jQuery("#user_login").blur(function(){
			  var login = jQuery("#user_login").val();
			  var display = jQuery("#display_name").val(login);
			 })
			
					});
			 </script>
			 
            </div>
          </div>
        </div>
      </div>	
<?php get_footer(); ?>