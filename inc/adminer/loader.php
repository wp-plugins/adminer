<?php
// the path to wp-load.php
require_once '../../config.php';

// find wp-config.php
function fb_find_wp_config_path() {
	
	$dir = dirname(__FILE__);
	
	do {
		if( file_exists( $dir . "/wp-config.php" ) ) {
			return $dir;
		}
	} while ( $dir = realpath( "$dir/.." ) );
	
	return NULL;
}

// search and include wp-load.php
function fb_get_wp_root( $directory ) {
	
	$wp_root = FALSE;
	foreach( glob( $directory . "/*" ) as $f ) {
		
		if ( 'wp-load.php' == basename($f) ) {
			$wp_root = str_replace( "\\", "/", dirname($f) );
			return $wp_root;
		}
		
		if ( is_dir($f) )
			$newdir = dirname( dirname($f) );
	}
	
	if ( isset($newdir) && $newdir != $directory ) {
		if ( fb_get_wp_root( $newdir ) )
			$wp_root = FALSE;
	}
	
	return $wp_root;
} // end function to find wp-load.php

if ( ! defined( 'ABSPATH' ) ) {
	
	if ( ! empty( $wp_siteurl ) ) {
		if ( ! file_exists( $wp_siteurl . '/wp-load.php' ) ) {
			die( 'Cheatin&#8217; or you have the wrong path to <code>wp-load.php</code>, see the <a href="http://wordpress.org/extend/plugins/adminer/installation/">readme</a>?');
			exit;
		}
		
		define( 'WP_USE_THEMES', FALSE );
		require_once( $wp_siteurl . '/wp-load.php' );
	} elseif ( file_exists( fb_find_wp_config_path() . '/wp-config.php' ) ) {
		define( 'WP_USE_THEMES', FALSE );
		require_once( fb_find_wp_config_path() . '/wp-config.php' );
	} elseif ( file_exists( fb_get_wp_root( dirname( dirname(__FILE__) ) ) . '/wp-config.php' ) ) {
		define( 'WP_USE_THEMES', FALSE );
		require_once( fb_get_wp_root( dirname( dirname(__FILE__) ) ) . '/wp-config.php' );
	} else {
		die( 'Cheatin&#8217; or you have the wrong path to <code>wp-load.php</code>, see the <a href="http://wordpress.org/extend/plugins/adminer/installation/">readme</a>?');
		exit;
	}
	
}

if ( ! defined( 'ABSPATH' ) ) {
	wp_die( __('Cheatin&#8217; uh?') );
	exit;
}

if ( ! current_user_can( 'unfiltered_html' ) ) {
	wp_die( __( 'Cheatin&#8217; uh? You do not have permission to use this.' ) );
	exit;
}

/**
 * Call Adminer with custom params
 * 
 * @return  class AdminerUser
 */
function adminer_object() {
	
	// required to run any plugin
	include_once "../plugins/plugin.php";
	
	// autoloader
	foreach (glob("../plugins/*.php") as $filename) {
		include_once $filename;
	}
	
	$plugins = array(
		// specify enabled plugins here
		new AdminerDatabaseHide( array( 'information_schema' ) ),
		new AdminerDumpDate, 
		new AdminerDumpJson,
		new AdminerDumpBz2,
		new AdminerDumpZip,
		new AdminerDumpXml,
		new AdminerDumpAlter,
		//~ new AdminerSqlLog("past-" . rtrim(`git describe --tags --abbrev=0`) . ".sql"),
		//~ new AdminerEditCalendar("<script type='text/javascript' src='../externals/jquery-ui/jquery-1.4.4.js'></script>\n<script type='text/javascript' src='../externals/jquery-ui/ui/jquery.ui.core.js'></script>\n<script type='text/javascript' src='../externals/jquery-ui/ui/jquery.ui.widget.js'></script>\n<script type='text/javascript' src='../externals/jquery-ui/ui/jquery.ui.datepicker.js'></script>\n<script type='text/javascript' src='../externals/jquery-ui/ui/jquery.ui.mouse.js'></script>\n<script type='text/javascript' src='../externals/jquery-ui/ui/jquery.ui.slider.js'></script>\n<script type='text/javascript' src='../externals/jquery-timepicker/jquery-ui-timepicker-addon.js'></script>\n<link rel='stylesheet' href='../externals/jquery-ui/themes/base/jquery.ui.all.css'>\n<style type='text/css'>\n.ui-timepicker-div .ui-widget-header { margin-bottom: 8px; }\n.ui-timepicker-div dl { text-align: left; }\n.ui-timepicker-div dl dt { height: 25px; }\n.ui-timepicker-div dl dd { margin: -25px 0 10px 65px; }\n.ui-timepicker-div td { font-size: 90%; }\n</style>\n", "../externals/jquery-ui/ui/i18n/jquery.ui.datepicker-%s.js"),
		//~ new AdminerTinymce("../externals/tinymce/jscripts/tiny_mce/tiny_mce_dev.js"),
		//~ new AdminerWymeditor(array("../externals/wymeditor/src/jquery/jquery.js", "../externals/wymeditor/src/wymeditor/jquery.wymeditor.js", "../externals/wymeditor/src/wymeditor/jquery.wymeditor.explorer.js", "../externals/wymeditor/src/wymeditor/jquery.wymeditor.mozilla.js", "../externals/wymeditor/src/wymeditor/jquery.wymeditor.opera.js", "../externals/wymeditor/src/wymeditor/jquery.wymeditor.safari.js")),
		new AdminerFileUpload(""),
		new AdminerJsonColumn,
		new AdminerSlugify,
		new AdminerTranslation,
		new AdminerForeignSystem,
		new AdminerEnumOption,
		new AdminerTablesFilter,
		new AdminerEditForeign,
	);
	
	class AdminerUser extends AdminerPlugin {
		
		function name() {
			
			return 'Adminer';
		}
		
		function credentials() {
			
			return array( DB_HOST, DB_USER, DB_PASSWORD );
		}
		
		function database() {
			
			return DB_NAME;
		}
		
		function login( $login, $password ) {
			
			if ( current_user_can( 'unfiltered_html' ) )
				return ( $login == DB_USER );
			else {
				wp_die( __( 'Cheatin&#8217; uh? You do not have permission to use this.' ) );
				exit;
			}
		}
		
	}
	
	return new AdminerUser( $plugins );
}

include_once( 'index.php' );
