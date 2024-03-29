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

<script type="text/javascript"> // default to Upload Media tab
jQuery(document).ready(function($){
wp.media.controller.Library.prototype.defaults.contentUserSetting=false;
});
</script>

<div class="container page-content">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="card-white double-padding">
              <h3 class="text-center"><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-upload.svg" class="icon icon-xl icon-left">Upload a resource</h3>
              <div class="divider"></div>
			  <?php if(!is_user_logged_in()){ ?>
              <div class="alert alert-info">
                <p>You have to be signed in to upload a resource. <a href="<?php echo site_url(); ?>/login">Sign in</a>, or <a href="<?php echo site_url(); ?>/member-register">create an account</a> for free!
                </p>
              </div>
			  <?php } ?>
              <div class="text-center margin-bottom">
              <small class="text-muted "><em>* - indicates a required field</em></small>
              </div>
	<?php echo do_shortcode('[fes_submission_form]');?>
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