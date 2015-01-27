=== Home Url ===
Contributors: Joshua Garner
Donate link: wphomeurl@gmail.com
Tags: home_url, shortcode, relative links, relative urls
Requires at least: 3.0.0
Tested up to: 3.0.4
Stable tag: 1.0.0

== Description ==
Enables you to use the home_url() function(http://codex.wordpress.org/Function_Reference/home_url) when HTML editing.
This allows you to easily manage relative urls.

The home_url template tag retrieves the home url for the current site. 
Returns the 'home' option with the appropriate protocol, 'https' if is_ssl() and 'http' otherwise. 
If scheme is 'http' or 'https', is_ssl() is overridden.

How to use:

[home-url path=<path> scheme=<scheme>]

path
    (string) (optional) Path relative to the home url.
     Default: '/' 

scheme
    (string) (optional) Scheme to give the home url context. Currently 'http','https'.
     Default: null 

Examples:

[home-url]
-> http://www.mydomain.com/

[home-url path="about"]
-> http://www.mydomain.com/about

[home-url path="blog/category/news"]
-> http://www.mydomain.com/blog/category/news

== Installation ==
1. Copy the entire directory from the downloaded zip file into the /wp-content/plugins/ folder.
2. Activate the "Home Url" plugin in the Plugin Management page.
3. Add the shortcode [home-url path="your page"] to the page(s) of your choice.
		
== Changelog ==
= 1.0.0 =
* Released on 10/01/2011
* Initial release of Home Url plugin.

== Contributors ==
Joshua Garner wphomeurl@gmail.com

