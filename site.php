<?php
/**
 * Include Site Config
 *
 * This file is used to include the site config file.
 *
 * @package SuperPlugin
 * @since 1.0.0
 */

use SuperPlugin\Includes\Config\Run;

require_once __DIR__ . '/includes/config/class-run.php';

// define site config json fisle path.
define( 'SUPER_PLUGIN_SITE_CONFIG', __DIR__ . '/site.json' );

// check if site config files exists as constant path.
try {
	if( get_option( 'super_plugin' ) ) {
		
	} elseif( file_exists( SUPER_PLUGIN_SITE_CONFIG ) ) {

		$super_plugin_site_config = file_get_contents( SUPER_PLUGIN_SITE_CONFIG );
	} else  {

		// load default site config.
		$super_plugin_site_config = file_get_contents( __DIR__ . '/assets/json/site.default.json' );
}
} catch ( Exception $e ) {

	// either file is not readable as json or does not exists.
	die( 'Site config file is not readable as json format or does not exists.' );
}

$super_plugin_schema = json_decode( file_get_contents( __DIR__ . '/site-schema.json' ), true );

if ( get_option( 'super_plugin_site_config' ) ) {

	// get site config from database.
	$super_plugin_site_config = get_option( 'super_plugin_site_config' );
} else {

	// save site config to database.
	update_option( 'super_plugin_site_config', $super_plugin_site_config );
}
