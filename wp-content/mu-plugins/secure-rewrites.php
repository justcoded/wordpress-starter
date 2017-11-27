<?php
/**
 * Set custom rewrite rules for .htaccess (security patch).
 */

if ( ! is_multisite() ) {
	add_action('generate_rewrite_rules', function() {
		global $wp_rewrite;
		// block files started with . (dot).
		$wp_rewrite->non_wp_rules = array( '(^\.|\/\.)' => 'index.php' ) + $wp_rewrite->non_wp_rules;
	});
}
