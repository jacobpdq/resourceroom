<?php
/*
Template Name:loginpage
Description:show login page for users
*/
get_header();

$themedirectory = get_template_directory_uri();
/* prefix_wp_login_redirect(); */
if ( is_user_logged_in() ) { 
	?>
	<script>window.location="<?php echo site_url() ?>"</script>
	<?php
} 
 ?> 

<div class="container page-content">
	
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="card-white double-padding">
              <h3 style="display:block !important" class="text-center">
				<img class="icon icon-lg icon-left" src="<?php echo $themedirectory ?>/img/icons/icon-user.svg">Sign in
			
			  </h3>
              <div class="divider"></div>
			  	<span class="text-red"><?php if(!empty($_GET['login'])) echo 'The information you entered did not match our records.' ?></span>
			  	<span class="text-blue"><?php if($_GET['changed']=='yes') echo 'Your password has been changed successfully . Please login again.' ?></span>
             <div class="LoginForm">
				<?php
					  $args = array(
					'redirect' => site_url(),
					'form_id' => 'loginform',
					'label_username' => __( 'Username or E-mail:' ),

					);
					wp_login_form( $args ); 
				?>
			 </div>
			 <div style="display:none"><a href="javascript:void(0)">Forgot Password</a></div>
            </div>
          </div>
        </div>		
</div>
<script>
	$(document).ready(function(){

	  $("input").iCheck({
		checkboxClass: "icheckbox",
		radioClass: "iradio",
	  });
	});
</script>
<script>$("select").selecter();</script>
<?php

get_footer();
 ?>
