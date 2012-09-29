<?php
/*
Plugin Name: TC Disable Browser Upgrade Warning
Plugin URI: http://www.taupecat.com/wordpress-plugins/tc-disable-browser-upgrade-warning/
Description: Disable the warning you see on the dashboard if you're using an older version of a particular browser.
Version: 1.0.1
Author: Tracy Rotton
Author URI: http://www.taupecat.com/
License: GPLv2
*/

function tc_disable_browser_upgrade_warning() {
    remove_meta_box( 'dashboard_browser_nag', 'dashboard', 'normal' );
}

add_action( 'wp_dashboard_setup', 'tc_disable_browser_upgrade_warning' );

?>
