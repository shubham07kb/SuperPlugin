<?php
/**
 * Settings class
 *
 * @package SuperPlugin
 * @since   1.0.0
 */

namespace SuperPlugin\Includes\Settings;

/**
 * Settings class
 *
 * @package SuperPlugin
 * @since   1.0.0
 */
class Settings {

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 */
	public function __construct() {

		// Initialize the settings.
		add_action('admin_menu', array($this, 'superplugin_Settings'));
	}

	/**
	 * Initialize the settings
	 *
	 * @since 1.0.0
	 */
	public function superplugin_Settings() {
		add_menu_page(
			'SuperPlugin Settings',
			'SuperPlugin',
			'manage_options',
			'superplugin_settings',
			array($this, 'settings_page'),
			'dashicons-admin-generic',
			73
		);
		add_submenu_page(
			'superplugin_settings',
			'URL Shortner',
			'URL Shortner',
			'manage_options',
			'superplugin_url_shortner',
			array($this, 'url_shortner')
		);
	}

	/**
	 * Settings page
	 *
	 * @since 1.0.0
	 */
	public function settings_page() {
		wp_enqueue_style('superplugin-admin');
		?>
		<div class="wrap">
			<h1>SuperPlugin Settings</h1>
			<p>Welcome to SuperPlugin Settings!</p>
			<form method="post" action="options.php">
				<?php
				settings_fields('superplugin_settings');
				do_settings_sections('superplugin_settings');
				submit_button();
				?>
			</form>
		</div>
		<?php
	}

	/**
	 * URL Settings page
	 *
	 * @since 1.0.0
	 */
	function url_shortner() {
		?>
		<div class="wrap">
			<h1>URL Settings</h1>
			<p>Manage URL settings here.</p>
		</div>
		<?php
	}
}
