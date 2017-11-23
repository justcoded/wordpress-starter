<?php
/*
Plugin Name: Custom permalinks
Description: Set the permalinks to the post name format
Version: 1.0
Author: JustCoded
Author URI: http://justcoded.com/
License: GPL3
*/

add_action( 'init', 'permalinks_set' );
/**
 * Set custom permalinks
 */
function permalinks_set() {
	global $wp_rewrite;

	//Write the rule.
	$wp_rewrite->set_permalink_structure( '/%postname%/' );

    // Set the option.
	update_option( "rewrite_rules", false );

    // Flush the rules and tell it to write htaccess.
	$wp_rewrite->flush_rules( true );
}