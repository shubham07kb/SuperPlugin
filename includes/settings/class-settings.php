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
		$setting_page_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]";
		if (isset($_GET['po']) && $_GET['po'] != "") {
			$p = $_GET['po'];
		} else {
			$p = "home";
		}
		?>
		<div class="wrap">
		<div class="spmc">
			<a href="<?php echo $setting_page_link."?page=superplugin_settings"; ?>" class="spm left<?php echo $p==="home"?" sel":""; ?>">Home</a>
			<a href="<?php echo $setting_page_link."?page=superplugin_settings&po=settings"; ?>" class="spm in<?php echo $p==="settings"?" sel":""; ?>">Settings</a>
    		<a href="<?php echo $setting_page_link."?page=superplugin_settings&po=url"; ?>" class="spm in<?php echo $p==="url"?" sel":""; ?>">Url</a>
    		<a href="<?php echo $setting_page_link."?page=superplugin_settings&po=other"; ?>" class="spm right<?php echo $p==="other"?" sel":""; ?>">Others</a>
		</div>
		</div>
		<?php
	}

	/**
	 * URL Settings page
	 *
	 * @since 1.0.0
	 */
	function url_shortner() {
		wp_enqueue_style('superplugin-admin');
		$setting_page_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]?page=superplugin_url_shortner";
		if (isset($_GET['po']) && $_GET['po'] != "") {
			$p = $_GET['po'];
		} else {
			$p = "home";
		}
		?>
		<div class="wrap">
		<div class="spmc">
			<a href="<?php echo $setting_page_link.""; ?>" class="spm left<?php echo $p==="home"?" sel":""; ?>">Home</a>
			<a href="<?php echo $setting_page_link."&po=settings"; ?>" class="spm in<?php echo $p==="settings"?" sel":""; ?>">Settings</a>
    		<a href="<?php echo $setting_page_link."&po=url"; ?>" class="spm in<?php echo $p==="url"?" sel":""; ?>">Url</a>
    		<a href="<?php echo $setting_page_link."&po=other"; ?>" class="spm right<?php echo $p==="other"?" sel":""; ?>">Others</a>
		</div>
		</div>
		<?php
	}
}
