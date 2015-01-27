<?php
/**
 * Template Name: Resource
 *
 * @package Marketify
 */

get_header(); ?>

<style type="text/css">
.media-menu-item:nth-of-type(2) {
display:none
}
.attachments-browser .attachments {
display:none !important;
}

</style>
<div class="container page-content">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="card-white double-padding">
              <h3 class="text-center"><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-upload.svg" class="icon icon-xl icon-left">Upload a resource</h3>
              <div class="divider"></div>
			  <?php if(!is_user_logged_in()){ ?>
              <div class="alert alert-info">
                <p>You haven't signed up yet! Sign up to upload free-to-download resources or <a href="<?php echo site_url(); ?>/member-register">register your PayPal acocunt </a>to set your own prices .
                </p>
              </div>
			  <?php } ?>
	<?php echo do_shortcode('[fes_submission_form]');?>
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
			  </div>
			  </div>
			  </div>
			  </div>
<script>
	/* $(document).ready(function(){

	  $("input").iCheck({
		checkboxClass: "icheckbox",
		radioClass: "iradio",
	  });
	}); */
</script>
<script>$("select").selecter();</script>		  
	
<?php get_footer(); ?>