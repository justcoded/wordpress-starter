<?php

if ( ( defined( 'WP_INSTALLING' ) && WP_INSTALLING ) || ! $h = opendir( WPMU_PLUGIN_DIR ) ) {
	return;
}

$mu_plugins_map = [
	'advanced-custom-fields'     => 'acf.php',
	'advanced-custom-fields-pro' => 'acf.php',
];

while ( false !== ( $entry = readdir( $h ) ) ) {
	if ( '.' === $entry || '..' === $entry || ! is_dir( WPMU_PLUGIN_DIR . '/' . $entry ) ) {
		continue;
	}

	$filename = $entry . '.php';
	if ( isset( $mu_plugins_map[ $entry ] ) ) {
		$filename = $mu_plugins_map[ $entry ];
	}

	$plugin_file = WPMU_PLUGIN_DIR . '/' . $entry . '/' . $filename;
	if ( is_file( $plugin_file ) ) {
		require_once $plugin_file;
	}
}