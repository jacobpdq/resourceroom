<?php
/*
Plugin Name: Home Url
Description:  Enables you to use home_url() function with a shortcode when HTML editing.
Version: 1.0.0
Author: Joshua Garner
Author Email: wphomeurl@gmail.com
Change Log:
	See readme.txt for complete change log

Contributors:
	Joshua Garner, wphomeurl@gmail.com - Plugin author

Copyright 2011 Joshua Garner

License: GPL (http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt)
*/


/*
	Add the home_url when shortcode is encountered
	@param $args - arguments or attributes specified in the shortcode tag.
	@return the home_url() output.
*/
function home_url_shortcode_handler( $args )
{
	extract(shortcode_atts(array(
		"path" => '/',
		"scheme" => null
	), $args));

	return home_url($path, $scheme);
}

add_shortcode('home-url', 'home_url_shortcode_handler');

?>