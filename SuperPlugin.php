<?php
/**
 * Plugin Name: Super Plugin
 * Plugin URI: https://shubkb.com
 * Description: This is a super plugin, it does super things.
 * Version: 1.0.0
 * Author: Shubham Kumar Bansal (Shub)
 * Author URI: https://shubkb.com
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: superplugin
 * Domain Path: /languages
 * Requires at least: 6.0
 * Requires PHP: 8.0
 * php version 8.0
 * 
 * @category Tools
 * @package  SuperPlugin
 * @author   Shubham Kumar Bansal <shub@shubkb.com>
 * @license  https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2 or later
 * @link     https://shubkb.com
 * @since    1.0.0
 */

/**
 * Contributors: Shubham Kumar Bansal (Shub),
 * Please Add your name here if you have contributed to this plugin, seprated by comma+space and end with comma.
 * Contribution can be anything, like code, idea, suggestion, bug report, fix etc.
 */

/**
 * Hi, I am Shubham, You can call me Shub. I am a Full Stack Developer. and This plugin is for my own use first at stating of development,
 * But later, I am Thinking to make it public, so that other developers can also use it.
 * Once, You make changes to this plugin, Please add your name to the Contributors list above.
 * And message me on my email, so that I can add you to the contributors list.
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


// Load Site Config.
require_once __DIR__ . '/site.php';

// Include autoloader.
require_once SUPER_PLUGIN_DIR . 'autoload.php';

// Include the main plugin classes.
use SuperPlugin\Includes\Enqueue\Enqueue;
use SuperPlugin\Includes\Settings\Settings;

// Call the main plugin class.
new Settings();
new Enqueue();

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
	
	// Call the uninstall method.
	
}
