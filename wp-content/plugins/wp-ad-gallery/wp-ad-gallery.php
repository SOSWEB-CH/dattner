<?php
/*
Plugin Name: WP AD Gallery 
Plugin URI: http://www.grazhya.com/work/wp-ad-gallery/
Description: AD Gallery jQuery plugin for Wordpress
Version: 1.3
Author: Wiellyam Roberto
Author URI: http://www.grazhya.com
License: GPL2
*/

// Set the core file path
define( 'WPAG_FILE_PATH', dirname( __FILE__ ) );

// Define the path to the plugin folder
define( 'WPAG_DIR_NAME',  basename( WPAG_FILE_PATH ) );

// Define the URL to the plugin folder
define( 'WPAG_FOLDER',    dirname( plugin_basename( __FILE__ ) ) );
define( 'WPAG_URL',       plugins_url( '', __FILE__ ) );

/*********************************************************************
 Load Scripts
**********************************************************************/

// jQuery Library
function wp_ad_gallery_jquery_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}    
 
add_action('wp_enqueue_scripts', 'wp_ad_gallery_jquery_scripts');

// AD Gallery script version 1.2.7
function wp_ad_gallery_scripts() {
    wp_register_script( 'ad-gallery', WPAG_URL. '/js/jquery.ad-gallery.min.js');
    wp_enqueue_script( 'ad-gallery' );
}    
 
add_action('wp_enqueue_scripts', 'wp_ad_gallery_scripts');

/*********************************************************************
 Load Plugin Components
**********************************************************************/

// Shortcode
require_once( 'shortcode/shortcode.php' );

// TinyMCE
require_once( 'tinymce/tinymce.php' );

?>