<?php
/**
 * Installation
 *
 * Contains the installation class, like activating and deactivating the plugin.
 *
 * @package SuperPlugin
 * @since 1.0.0
 */

namespace SuperPlugin\Includes\Installation;

/**
 * Installation class
 *
 * This class contains all the methods for activating and deactivating the plugin.
 *
 * @since 1.0.0
 */
class Install {
	
	/**
	 * Activate
	 *
	 * This method is called when the plugin is activated.
	 *
	 * @since 1.0.0
	 */
	public static function activate() {
	
		// Flush rewrite rules.
		flush_rewrite_rules();
	}

	/**
	 * Deactivate
	 *
	 * This method is called when the plugin is deactivated.
	 *
	 * @since 1.0.0
	 */
	public static function deactivate() {

		// Flush rewrite rules.
		flush_rewrite_rules();
	}

	/**
	 * Uninstall
	 *
	 * This method is called when the plugin is uninstalled.
	 *
	 * @since 1.0.0
	 */
	public static function uninstall() {
		// Do something.
	}
}