<?php
/**
 * @package Privacy_Tag
 * @version 1.0
 */
/*
Plugin Name: Privacy Tag
Plugin URI: http://wordpress.org/extend/plugins/privacy-tag/
Description: Return the 'Search Engines Blocked' tag to Wordpress 3.2.
Author: Derek Lucas
Version: 1.0
Author URI: http://www.derekplucas.com/
*/


// This just echoes the chosen line, we'll position it later
function privacy_tag() { 

	if (get_option('blog_public') == 0) { ?>
		<style>
			#site-heading:after {
				color: #aaa;
				font-size: 75%;
				padding: 0 6px;
				content: "Search Engines Blocked";
			}
		</style>
	<?php }
}

add_action( 'admin_head', 'privacy_tag' );

?>
