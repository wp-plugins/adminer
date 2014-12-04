<?php
// the path to wp-load.php
require_once '../../config.php';

// find wp-config.php
function adminer_get_wp_load_path() {

	$dir = dirname( __FILE__ );

	do {
		if ( file_exists( $dir . "/wp-load.php" ) ) {
			return $dir;
		}
	} while ( $dir = realpath( "$dir/.." ) );

	return FALSE;
}

// search and include wp-load.php
function adminer_get_wp_root_path( $directory ) {

	$wp_root = FALSE;
	foreach ( glob( $directory . "/*" ) as $f ) {

		if ( 'wp-load.php' == basename( $f ) ) {
			$wp_root = str_replace( "\\", "/", dirname( $f ) );

			return $wp_root;
		}

		if ( is_dir( $f ) ) {
			$newdir = dirname( dirname( $f ) );

			foreach ( glob( $f . "/*" ) as $subf ) {

				if ( 'wp-load.php' == basename( $subf ) ) {
					$wp_root = str_replace( "\\", "/", dirname( $subf ) );

					return $wp_root;
				}
			}
		}
	}

	if ( isset( $newdir ) && $newdir != $directory ) {
		if ( FALSE !== adminer_get_wp_root_path( $newdir ) ) {
			$wp_root = adminer_get_wp_root_path( $newdir );
		}
	}

	return $wp_root;
} // end function to find wp-load.php

if ( ! defined( 'ABSPATH' ) ) {

	if ( ! empty( $wp_siteurl ) ) {

		if ( ! file_exists( $wp_siteurl . '/wp-load.php' ) ) {
			die( 'Cheatin&#8217; or you have the wrong path to <code>wp-load.php</code>, see the <a href="http://wordpress.org/extend/plugins/adminer/installation/">readme</a>?' );
			exit;
		}

		define( 'WP_USE_THEMES', FALSE );
		require_once( $wp_siteurl . '/wp-load.php' );

	} elseif ( file_exists( adminer_get_wp_load_path() . '/wp-load.php' ) ) {

		define( 'WP_USE_THEMES', FALSE );
		require_once( adminer_get_wp_load_path() . '/wp-load.php' );

	} elseif ( file_exists( adminer_get_wp_root_path( dirname( dirname( __FILE__ ) ) ) . '/wp-load.php' ) ) {

		define( 'WP_USE_THEMES', FALSE );
		require_once( adminer_get_wp_root_path( dirname( dirname( __FILE__ ) ) ) . '/wp-load.php' );

	} else {

		die( 'Cheatin&#8217; or you have the wrong path to <code>wp-load.php</code>, see the <a href="http://wordpress.org/extend/plugins/adminer/installation/">readme</a>?' );
		exit;

	}

}

if ( ! defined( 'ABSPATH' ) ) {
	wp_die( __( 'Cheatin&#8217; uh?' ) );
	exit;
}

if ( ! function_exists( 'is_plugin_active' ) )
	require_once( ABSPATH . '/wp-admin/includes/plugin.php' );

if ( ! defined( 'ADMINER_BASE_FILE' ) || ! is_plugin_active( ADMINER_BASE_FILE ) ) {
	wp_die( __( 'Cheatin&#8217; uh? The plugin is not active or can`t found the WordPress configuration file.' ) );
	exit;
}

if ( ! is_user_logged_in() ) {
	wp_die( __( 'Cheatin&#8217; uh? You do not have permission to use this or can`t found the WordPress configuration file.' ) );
	exit;
}

if ( ! current_user_can( 'unfiltered_html' ) ) {
	wp_die( __( 'Cheatin&#8217; uh? You do not have permission to use this or can`t found the WordPress configuration file.' ) );
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

	// auto loading for Adminer plugins
	foreach ( glob( "../plugins/*.php" ) as $filename ) {
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
		new AdminerFileUpload( "" ),
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

			if ( is_user_logged_in() && current_user_can( 'unfiltered_html' ) ) {
				return ( $login == DB_USER );
			} else {
				wp_die( __( 'Cheatin&#8217; uh? You do not have permission to use this.' ) );
				exit;
			}
		}

	}

	return new AdminerUser( $plugins );
}

include_once( 'index.php' );
