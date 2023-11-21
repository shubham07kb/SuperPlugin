<?php
/**
 * Plugin Name: Super Plugin
 * Plugin URI: https://shubkb.com
 * Description: This is a super plugin, it does super things.
 * Version: 1.0.0
 * Author: Shubham Kumar Bansal
 * Author URI: https://shubkb.com
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: superplugin
 * Domain Path: /languages
 * Requires at least: 6.0
 * Requires PHP: 8.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define constants.

define( 'SUPER_PLUGIN_NAME', 'SuperPlugin' );
define( 'SUPER_PLUGIN_VERSION', '1.0.0' );
define( 'SUPER_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SUPER_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'SUPER_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
define( 'SUPER_PLUGIN_TEXT_DOMAIN', 'super-plugin' );
define( 'SUPER_PLUGIN_MINIMUM_WP_VERSION', '6.0' );
define( 'SUPER_PLUGIN_MINIMUM_PHP_VERSION', '8.0' );

// Include autoloader.
require_once SUPER_PLUGIN_DIR . 'includes/installation/class-install.php';

// Include the main plugin class.
use SuperPlugin\Includes\Installation\Install as Installation;

// Installation Hooks.

// Register activation hook.
register_activation_hook( __FILE__, 'super_plugin_activation' );

/**
 * Activation
 *
 * This function is called when the plugin is activated.
 *
 * @since 1.0.0
 */
function super_plugin_activation() {

	// Call the activate method.
	Installation::activate();
}

// Register deactivation hook.
register_deactivation_hook( __FILE__, 'super_plugin_deactivate' );

/**
 * Deactivation
 *
 * This function is called when the plugin is deactivated.
 *
 * @since 1.0.0
 */
function super_plugin_deactivate() {

	// Call the deactivate method.
	Installation::deactivate();
}

// Register uninstall hook.
register_uninstall_hook( __FILE__, 'super_plugin_uninstall' );

/**
 * Uninstall
 *
 * This function is called when the plugin is uninstalled.
 *
 * @since 1.0.0
 */
function super_plugin_uninstall() {
	Installation::uninstall();
}
