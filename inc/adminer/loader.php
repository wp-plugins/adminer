<?php
// search and include wp-load.php
// require_once('../../../../../wp-load.php');
$thispath = dirname( __FILE__ );
$path_seperator = '/';
$path_to_load = explode( $path_seperator, $thispath );
if ( count ( $path_to_load ) < 2 ) { //try windows folderlist style
	$path_seperator = '\\';
	$path_to_load   = explode( $path_seperator , $thispath );
}

$found = FALSE;
$length = count( $path_to_load );
$count = 0;
while( $found == FALSE && $count < 10 ) {
	$count ++;
	array_pop( $path_to_load );
	$wploadpath = implode( $path_seperator, $path_to_load) . $path_seperator . 'wp-load.php';
	if ( file_exists( $wploadpath ) ) {
		require_once( $wploadpath );
		if ( ABSPATH != '' ) { //WP successfully loaded
			$path_wp_include = get_option( 'siteurl' ) . '/' . WPINC;
			require_once( ABSPATH . 'wp-admin/includes/file.php' );
			require_once( ABSPATH . 'wp-includes/pluggable.php' );
		}
	}
}

if ( ! current_user_can('unfiltered_html') )
	wp_die( __('Cheatin&#8217; uh?') );

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
