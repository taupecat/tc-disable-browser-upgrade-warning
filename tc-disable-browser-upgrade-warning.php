<?php
/**
 * Plugin Name: TC Disable Browser Upgrade Warning
 * Plugin URI: https://github.com/taupecat/tc-disable-browser-upgrade-warning
 * Description: Disable the warning you see on the dashboard if you're using an older version of a particular browser.
 * Version: 2.0.0
 * Author: Tracy Rotton
 * Author URI: https://taupecat.com/
 * License: MIT
 *
 * @package TC Disable Browser Upgrade Warning
 */

namespace taupecat;

require_once __DIR__ . '/class-disable-browser-upgrade-warning.php';

( new Disable_Browser_Upgrade_Warning() )->init();
