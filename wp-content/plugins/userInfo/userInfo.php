<?php
/*
Plugin Name:User Info
Description:show whole info of current user
*/
 add_shortcode('USERINFO','userinfo');
function userinfo()
{
	global $wpdb;
    $user_ID = get_current_user_id();
	$usersql = $wpdb->get_results("select * from wp_users where ID=".$user_ID."");
	return $usersql[0]->user_email;
	/* echo "<pre>";
	print_r($usersql);
	echo "</pre>"; */
} 

