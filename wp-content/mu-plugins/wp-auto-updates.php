<?php
/*
* Plugin Name: wp-auto-updates
* Description: Automatically updates core, plugins & optionally themes. Paste to ./wp-content/mu-plugins/wp-auto-updates.php
* Author: Constantin Oesterling @ infinitnet.de
* License: GNU General Public License v3 or later
* License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

// Update core
add_filter( 'auto_update_core', '__return_true' );

// Update plugins
add_filter( 'auto_update_plugin', '__return_true' );

// Update themes (disabled by default)
//add_filter( 'auto_update_theme', '__return_true' );

