<?php
/*
Plugin Name: TC Disable Browser Upgrade Warning
Plugin URI: http://www.taupecat.com/wordpress-plugins/tc-disable-browser-upgrade-warning/
Description: Disable the warning you see on the dashboard if you're using an older version of a particular browser.
Version: 1.1
Author: Tracy Rotton
Author URI: http://www.taupecat.com/
License: MIT
*/

function tc_disable_browser_upgrade_warning() {
    remove_meta_box( 'dashboard_browser_nag', 'dashboard', 'normal' );
}
add_action( 'wp_dashboard_setup', 'tc_disable_browser_upgrade_warning' );

/**
 * I18n
 */
function tc_dbuw_i18n() {
	load_plugin_textdomain('tc-dbuw', false, plugin_dir_path( __FILE__ ) . 'languages/' );
}
add_action( 'init', 'tc_dbuw_i18n' );
