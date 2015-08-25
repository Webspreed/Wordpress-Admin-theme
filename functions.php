<?php
/*
Plugin Name: Spreed Admin Theme
Plugin URI: http://webspreed.com/plugin
Description: A user-friendly admin theme. Responsive as far as CSS can manage on the core.
Author: Shakil HOssain
Version: v0.1.1
Author URI: http://webspreed.com
*/

/*
 * The Spreed Admin Theme is a user-firendly theme for the admin section in Wordpress.
 * 
 * Copyright (C) 2015  Shakil HOssain
 * This is a Full Free plugin; you can redistribute it and/or
 * modify it under the terms of the webspreed General Public License
 * as published by the Free Software Foundation; either version 0.1.1
 * of the License, or (at your option) any later version.
 *
 * Spreed Admin Theme is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 
 * You should have received a copy of the GNU General Public License
 * along with {Plugin Name}. If not, see  http://webspreed.com/plugin.
 */


/*
 * inserting  custom admin css js and font
 *
 */
add_action('admin_head', 'custom_admin_css');
function custom_admin_css() {
	echo "<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>";
	echo '<link rel="stylesheet" type="text/css" href="' .plugins_url('admin.css', __FILE__). '">';
	echo '<link rel="stylesheet" type="text/css" href="' .plugins_url('css/bootstrap.min.css', __FILE__). '">';	
    echo '<link rel="stylesheet" type="text/css" href="' .plugins_url('css/bootstrap-theme.min.css', __FILE__). '">';
    echo '<link rel="stylesheet" type="text/css" href="' .plugins_url('js/bootstrap.min.js', __FILE__). '">';
}
/* What to do when the plugin is activated? */
register_activation_hook(__FILE__,'my_first_plugin_install');

/* What to do when the plugin is deactivated? */
register_deactivation_hook( __FILE__, 'my_first_plugin_remove' );
?>

