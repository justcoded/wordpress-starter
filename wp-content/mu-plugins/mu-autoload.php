<?php

if ( ( defined( 'WP_INSTALLING' ) && WP_INSTALLING ) || ! $h = opendir( WPMU_PLUGIN_DIR ) ) {
	return;
}

while ( false !== ( $entry = readdir( $h ) ) ) {
	if ( '.' === $entry || '..' === $entry || ! is_dir( WPMU_PLUGIN_DIR . '/' . $entry ) ) {
		continue;
	}

	$plugin_file = WPMU_PLUGIN_DIR . '/' . $entry . '/' . $entry . '.php';
	if ( is_file( $plugin_file ) ) {
		require_once $plugin_file;
	}
}