<?php
/**
 * Template Name: Edit Profile
 *
 * @package Marketify
 */

get_header(); ?>
<?php 
	$user_ID = get_current_user_id();
	
	
?>
<div class="container page-content page-editprofile">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="card-white double-padding">
				<h3 class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-user.svg" class="icon icon-xl icon-left">Edit your profile</h3>
				<div class="divider"></div>
				<div class="row">
                  <div class="profile-image col-md-6 col-md-offset-3 margin-bottom-bigger"><?php echo getUserimage($user_ID,'241','160') ?>              
                  </div>
                </div>
					 <?php echo do_shortcode('[fes_profile_form]');?>
				 </div>
			</div>
		</div>
	</div>
</div>
<style>
#fes-profile-page-title{
	display: none;
}
</style>
<script>
	$(document).ready(function(){

	  $("input").iCheck({
		checkboxClass: "icheckbox",
		radioClass: "iradio",
	  });
	});
</script>
<script>$("select").selecter();</script>
	  
	
<?php get_footer(); ?>