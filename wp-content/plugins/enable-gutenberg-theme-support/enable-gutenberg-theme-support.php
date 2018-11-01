<?php 
/*
	Plugin Name: Enable Gutenberg Theme Support
	Description: This plugin enable gutenberg theme support features to your WordPress theme.
	Author: Israel Escuer, Jose Angel Vidania
	Tags: Gutenberg, Theme Support, Add Theme Support, Align Wide, Align Full, Color Palette, WordPress Editor, Block Style Editor
	Contributors: iescuer, vdevidania
	Requires at least: 4.5
	Tested up to: 4.9
	Stable tag: 1.0
	Version: 1.1
	Requires PHP: 5.6
	Text Domain: enable-gutenberg-theme-support
	Domain Path: /languages
	License: GPL v2 or later
	License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/*

	{Plugin Name} is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 2 of the License, or
	any later version.
	
	{Plugin Name} is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with {Plugin Name}. If not, see {URI to Plugin License}.

*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'EGTS_BASE_PATH', plugin_dir_path( __FILE__ ) );
define( 'EGTS_BASE_URL', plugin_dir_url( __FILE__ ) );

require_once EGTS_BASE_PATH . 'inc/resources-enqueue.php';
require_once EGTS_BASE_PATH . 'inc/plugin-supports.php';
require_once EGTS_BASE_PATH . 'inc/admin-options.php';
require_once EGTS_BASE_PATH . 'inc/plugin-functions.php';
 
/**
 * Function to load the plugin's textdomain
 */
function egts_load_plugin_textdomain() {
	load_plugin_textdomain( 'enable-gutenberg-theme-support', false, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'egts_load_plugin_textdomain' );


// Add "settings" link to Enable Gutenberg Theme Support in the plugin list.
add_filter( 'plugin_action_links', function( $plugin_actions, $plugin_file ) {
	$new_actions = array();
	if ( basename( dirname( __FILE__ ) ) . '/enable-gutenberg-theme-support.php' === $plugin_file ) {
		/* translators: %s: url of plugin settings page */
		$new_actions['sc_settings'] = sprintf( __( '<a href="%s">Settings</a>', 'enable-gutenberg-theme-support' ), esc_url( add_query_arg( array( 'page' => 'enable-gutenberg-theme-support%2Finc%2Fadmin-options.php' ), admin_url( 'admin.php' ) ) ) );
	}
	return array_merge( $new_actions, $plugin_actions );
}, 10, 2 );


//Enqueue files

function egts_enqueue_resources_wp() {
		
    wp_enqueue_style('gutenberg_style_theme_support', EGTS_BASE_URL .'css/enable-gutenberg-theme-support.css', array() );
            
	wp_enqueue_script('gutenberg_script_theme_support', EGTS_BASE_URL .'js/settings.js');
	
}

add_action( 'wp_enqueue_scripts', 'egts_enqueue_resources_wp' );


function egts_enqueue_resources_admin( $hook_suffix ) {
	
	// first check that $hook_suffix is appropriate for your admin page
    wp_enqueue_style( 'wp-color-picker' );
	
	wp_enqueue_script( 'egts-settings-plugin', plugins_url('js/settings-plugin.js', __FILE__ ), array( 'wp-color-picker' ), false, true );

	wp_enqueue_style('gutenberg_style_theme_support', EGTS_BASE_URL .'css/enable-gutenberg-theme-support-admin.css', array() );

}

add_action( 'admin_enqueue_scripts', 'egts_enqueue_resources_admin' );


//Functions activate y deactivate plugin

function egts_activate_enable_gutenberg_theme_support() {
	// Lo que quiero que haga el plugin cuando un usuario lo activa	
}
register_activation_hook( __FILE__, 'egts_activate_enable_gutenberg_theme_support' );
 
function egts_deactivate_enable_gutenberg_theme_support() {
    // Lo que quiero que haga el plugin cuando un usuario lo desactiva
}
register_deactivation_hook( __FILE__,'egts_deactivate_enable_gutenberg_theme_support' );






