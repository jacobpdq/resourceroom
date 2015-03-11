<?php
/**
 * Template Name: Account Settings
 *
 * @package Marketify
 */

	get_header();
	$site_url = site_url();
	$error_password='';
	$incorrect = false;
	$error_current_password='';
	if ( is_user_logged_in() || isset($_GET['userid']) ) {
	$idget = get_current_user_id( );
	if(!empty($idget))
		$user_id = get_current_user_id( );
	else
		$user_id = $_GET['userid'];
	$user_data = get_userdata( $user_id );
	$hash =	$user_data->data->user_pass;
	require_once(site_url()."/wp-load.php");

		if(isset($_POST['submit']))
		{
			if( !empty($_POST['password']) && !empty($_POST['current_password']))
			{
				$password = $_POST['current_password'];
				$new_password = $_POST['password'];
				$check = wp_check_password($password, $hash);
				if($check==1)
				{
					?>
					<script>
						window.location="<?php echo $site_url ?>/login?changed=yes";
					</script>
					<?php
					$set_password = wp_set_password( $new_password, $user_id );
					
				}
				else
				{
					$incorrect=true;
				}
			}
			else
			{
				if(empty($_POST['password']))
					$error_password = '<span style="color:red">New password is a required field</span>';
				
				if(empty($_POST['current_password']))
					$error_current_password = '<span style="color:red">Current password is a required field</span>';
				
			}

			
		}
		
	?>
      <div class="container page-content">
        <div class="row margin-bottom">
          <div class="col-md-6 col-md-offset-3">
            <div class="card-white double-padding">
              <h3 class="text-center"><img class="icon icon-left icon-xl" src="<?php echo  get_template_directory_uri(); ?>/img/icons/icon-user.svg">Account Settings</h3>
              <div class="divider"></div>
			  <?php if($incorrect==true) echo 'Invalid current password'; ?>
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form method="post" action="" name="" id="">
                    <div class="form-group">
                      <label>E-mail Address:</label>
                      <input type="email" class="form-control" readonly value="<?php echo $user_data->data->user_email ?>">
                    </div>
                    <div class="margin-bottom-bigger"></div> 
                    <div class="form-group">
                      <label>New Password:</label>
                      <p class="form-field-info">If you want to change your password, you can enter a new password here</p>
                      <input name="password" type="password" class="form-control">
					  <?php echo $error_password ?>
                    </div>
                    <div class="form-group">
                      <label>Current Password:</label>
                      <input name="current_password" type="password" class="form-control">
					   <?php echo $error_current_password ?>
                    </div>
                    <div class="divider"></div>
                    <input class="btn btn-3d btn-lg btn-primary btn-block" name="submit" type="submit" value="Save">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	<?php 
	}
	else
	{
		?>
			<script>window.location="<?php echo site_url() ?>"</script>
		<?php
	}	
	?>
	<?php get_footer(); ?>