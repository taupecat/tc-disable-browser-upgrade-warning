<?php
/**
 * Disable Browser Upgrade Warning class file
 *
 * @package TC Disable Browser Upgrade Warning
 */

namespace taupecat;

/**
 * Disable the upgrade browser nag.
 */
class Disable_Browser_Upgrade_Warning {

	/**
	 * Constructor.
	 */
	public function __construct() {

		// Empty constructor.
	}

	/**
	 * Class initialization (action hooks).
	 *
	 * @return void
	 */
	public function init() {

		add_action( 'wp_dashboard_setup', array( $this, 'disable_browser_upgrade_warning' ) );
		add_action( 'init', array( $this, 'dbuw_i18n' ) );
	}

	/**
	 * Remove the dashboard_browser_nag meta box from the WordPress admin dashboard.
	 *
	 * @return void
	 */
	public function disable_browser_upgrade_warning() {

		remove_meta_box( 'dashboard_browser_nag', 'dashboard', 'normal' );
	}

	/**
	 * Set the internationalization directory.
	 *
	 * @return void
	 */
	public function dbuw_i18n() {

		load_plugin_textdomain( 'tc-dbuw', false, plugin_dir_path( __FILE__ ) . 'languages/' );
	}
}
