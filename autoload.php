<?php
/**
 * Autoloader
 *
 * Loads all classes automatically so we don't have to manually require them.
 *
 * @package SuperPlugin
 * @since 1.0.0
 */

spl_autoload_register(
	function ( $autoloader_class ) {
		if ( !str_starts_with( $autoloader_class, SUPER_PLUGIN_NAME ) ) {
	        return;
	    }
		$autoloader_class       = str_replace( '_', '-', strtolower( $autoloader_class ) );
		$autoloader_class_array = explode( '\\', $autoloader_class );
		$autoloader_class_array[ count( $autoloader_class_array ) - 1 ] = 'class-' . $autoloader_class_array[ count( $autoloader_class_array ) - 1 ];
		array_shift( $autoloader_class_array );
		$autoloader_class = implode( '/', $autoloader_class_array );
		// Base directory for your plugin classes.

		// Replace namespace separators with directory separators.
		$file = plugin_dir_path( __FILE__ ) . str_replace( '\\', '/', $autoloader_class ) . '.php';

		// If the file exists, require it.
		var_dump($file);
		die();
		if ( file_exists( $file ) ) {
			require_once $file;
		}
	}
);
