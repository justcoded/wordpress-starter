<?php

/**
 * Include composer autoload for 3d-party libraries
 */
require( __DIR__ . '/vendor/autoload.php' );

/** Loads the WordPress Cron */
require( dirname( __FILE__ ) . '/cms/wp-cron.php' );
