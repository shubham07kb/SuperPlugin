<?php
/**
 * Enqueue class
 *
 * @package SuperPlugin
 * @since   1.0.0
 */

namespace SuperPlugin\Includes\Enqueue;

/**
 * Settings class
 *
 * @package SuperPlugin
 * @since   1.0.0
 */
class Enqueue {

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 */
	public function __construct() {

		add_action('admin_enqueue_scripts', array( $this, 'enqueue_styles_admin' ));
	}

	/**
	 * Enqueue styles for admin
	 *
	 * @since 1.0.0
	 */
	public function enqueue_styles_admin() {

		wp_register_style( 'superplugin-admin', SUPER_PLUGIN_URL . 'assets/css/admin.css', array(), filemtime(SUPER_PLUGIN_DIR . 'assets/css/admin.css'), 'all' );
	}
}