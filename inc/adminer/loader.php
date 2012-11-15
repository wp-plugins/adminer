<?php
// the path to wp-load.php
require_once '../../config.php';

// search and include wp-load.php
function get_wp_root( $directory ) {
	global $wp_root;
	
	foreach( glob( $directory . "/*" ) as $f ) {
		
		if ( 'wp-load.php' == basename($f) ) {
			$wp_root = str_replace( "\\", "/", dirname($f) );
			return TRUE;
		}
		
		if ( is_dir($f) )
			$newdir = dirname( dirname($f) );
	}
	
	if ( isset($newdir) && $newdir != $directory ) {
		if ( get_wp_root ( $newdir ) )
			return FALSE;
	}
	
	return FALSE;
} // end function to find wp-load.php

if ( ! defined( 'ABSPATH' ) ) {
	
	get_wp_root( dirname( dirname(__FILE__) ) );
	if ( ! empty( $wp_siteurl ) ) {
		if ( ! file_exists( $wp_siteurl . '/wp-load.php' ) ) {
			die( 'Cheatin&#8217; or you have the wrong path to <code>wp-load.php</code>, see the <a href="http://wordpress.org/extend/plugins/adminer/installation/">readme</a>?');
			exit;
		}
		
		define( 'WP_USE_THEMES', FALSE );
		include_once( $wp_siteurl . '/wp-load.php' );
	} else if ( $wp_root ) {
		if ( ! file_exists( $wp_root . '/wp-load.php' ) ) {
			die( 'Cheatin&#8217; or the plugin can`t fint the path to <code>wp-load.php</code>, see the <a href="http://wordpress.org/extend/plugins/adminer/installation/">readme</a>?');
			exit;
		}
		
		define( 'WP_USE_THEMES', FALSE );
		include_once( $wp_root . '/wp-load.php' );
	} else {
		die( 'Cheatin&#8217; or you must define the path to <code>wp-load.php</code>, see the <a href="http://wordpress.org/extend/plugins/adminer/installation/">readme</a>?');
		exit;
	}
	
}

if ( ! defined( 'ABSPATH' ) ) {
	wp_die( __('Cheatin&#8217; uh?') );
	exit;
}
/**
 * Call Adminer with custom params
 * 
 * @return  class AdminerUser
 */
function adminer_object() {
	
	class AdminerUser extends Adminer {
		
		function name() {
			
			return get_option('blogname');
		}
		
		function credentials() {
			global $wpdb;
			
			return array(DB_HOST, DB_USER, DB_PASSWORD);
		}
		
		function database() {
			global $wpdb;
			
			return DB_NAME;
		}
		
		function login($login, $password) {
			global $wpdb;
			
			return ($login == DB_USER);
		}
		
	}
	
	return new AdminerUser;
}

include_once ( 'index.php' );
