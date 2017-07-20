<?php
/*
Plugin Name: Customize Sitemap
Plugin URI: http://www.techhunts.com
Description:Customize sitemap Give  you the real website sitemap features
Version:0.1
Author:rsjeyakumar
Author URI: http://www.techhunts.com
Change Log: See readme.txt for change log
Contributors:rsjeyakumar
Copyright 2012 techhunts
License: GPL (http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt)
*/

/*
	Return the sitemap for pages.
	@param $args - arguments or attributes for wp_list_pages function.
	@return a formatted HTML list
*/
function customize_sitemap_fn($args) {

	$args["title_li"] = FALSE; // turn off the "Categories" top level <LI>
	$args["echo"] = FALSE; 	// turn off echo - we want to return

	$o = "";
	$o .= "<ul>\n";
	$o .= wp_list_pages($args);
	$o .= "</ul>\n";

	return $o;

}

add_shortcode('customize-sitemap', 'customize_sitemap_fn');

?>