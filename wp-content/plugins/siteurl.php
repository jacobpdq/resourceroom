<?php

/*

Plugin Name: SITEURL

Description:  Returns site url.

*/

add_shortcode('SITEURL','sitefunction');
function sitefunction()
{
	return site_url();
}

?>