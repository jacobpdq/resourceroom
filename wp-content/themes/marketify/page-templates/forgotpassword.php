<?php
/**
 * Template Name: Forgot Password
 *
 * @package Marketify
 */

get_header(); 
$error = '';
$message = '';
require_once(site_url()."/wp-load.php");
if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	if(!empty($email))
	{

		$data =  get_user_by( 'email', $email );
		if(empty($data))
			$error = 'Please input a valid email';
		else
		{
			$headers = 'From: noreply@'.$_SERVER['SERVER_NAME'].'' . "\r\n" .
			$headers .= "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			'X-Mailer: PHP/' . phpversion();
			$password = wp_generate_password();
			$fpassword = stripslashes($password);
			$set_password = wp_set_password($fpassword,$data->ID);
			$message = 
			'Hello,
			<br/>A password change request has been made for your email. Here is your new password: <b> '.$fpassword.'</b>
			<br/><br/>
			Thanks,<br/>
			Resource Room 
			';
			$mail = mail($_POST['email'],'Forgot Password',$message,$headers);
			if($mail)
			{
				$message = '<span style="color:red;">A new password has been sent to your email.</span>';
			}
		}
	}
	else
		$error = '<span style="color:red;">Email is a required field</span>';
}
?>

<div class="container page-content">
	
        <div class="row margin-bottom">
          <div class="col-md-6 col-md-offset-3">
            <div class="card-white double-padding">
              <h3 class="text-center"><img src="<?php bloginfo('template_url') ?>/img/icons/icon-key.svg" class="icon icon-left icon-xl">Password Recovery</h3>
              <div class="divider"></div>
              <p class="margin-bottom-bigger">Forgot or lost your password? Just enter the e-mail address associated with your account and we'll send you a new password.</p>
			<?php 
			if(!empty($message)) 
				echo $message;
			else	{
			?>
             <div class="LoginForm">
				    <div class="row">
                <div class="col-md-6 col-md-offset-3">
		<form method="post">
			
				 <input type="email" name="email" placeholder="Email Address" class="form-control">
                    
				<?php if(!empty($error)) echo $error ?>
			</p>
			<p>
				<input type="submit" name="submit" class="btn btn-3d btn-lg btn-primary btn-block" value="Submit">
			</p>
			
		</form>	
		</div></div>		 
		</div>
		<?php } ?>
            </div>
          </div>
        </div>		
</div>
<?php 
 get_footer(); ?>
