<?php
require_once('../../../../wp-load.php');

if( !current_user_can('unfiltered_html') )
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

include 'adminer-2.3.2.php';
?>