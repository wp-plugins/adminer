<?php
/**
 * @package Adminer
 * @author Frank B&uuml;ltge
 * @version 0.2.5
 */

/*
Plugin Name: Adminer
Plugin URI: http://bueltge.de/
Description: <a href="http://www.adminer.org/en/">Adminer</a> (formerly phpMinAdmin) is a full-featured MySQL management tool written in PHP. This plugin include this tool in WordPress for a fast management of your database.
Author: Frank B&uuml;ltge
Version: 0.2.5
Author URI: http://bueltge.de/adminer-fuer-wordpress/1014/
Donate URI: http://bueltge.de/wunschliste/
License: Apache License
Last change: 23.04.2010 08:24:15
*/ 

/**
License:
==============================================================================
Copyright 2009 Frank Bueltge  (email : frank@bueltge.de)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Requirements:
==============================================================================
This plugin requires WordPress >= 2.7 and tested with PHP Interpreter >= 5.2.9
*/

//avoid direct calls to this file, because now WP core and framework has been used
if ( !function_exists('add_action') ) {
	header('Status: 403 Forbidden');
	header('HTTP/1.1 403 Forbidden');
	exit();
}

if ( function_exists('add_action') ) {
	//WordPress definitions
	if ( !defined('WP_CONTENT_URL') )
		define('WP_CONTENT_URL', get_option('siteurl') . '/wp-content');
	if ( !defined('WP_CONTENT_DIR') )
		define('WP_CONTENT_DIR', ABSPATH . 'wp-content');
	if ( !defined('WP_PLUGIN_URL') )
		define('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
	if ( !defined('WP_PLUGIN_DIR') )
		define('WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins');
	if ( !defined('PLUGINDIR') )
		define( 'PLUGINDIR', 'wp-content/plugins' ); // Relative to ABSPATH.  For back compat.
	if ( !defined('WP_LANG_DIR') )
		define('WP_LANG_DIR', WP_CONTENT_DIR . '/languages');

	// plugin definitions
	define( 'FB_ADM_BASENAME', plugin_basename(__FILE__) );
	define( 'FB_ADM_BASEDIR', dirname( plugin_basename(__FILE__) ) );
	define( 'FB_ADM_TEXTDOMAIN', 'adminer' );
}


if ( !class_exists('AdminerForWP') ) {
	class AdminerForWP {
		
		function AdminerForWP() {
			
			if ( is_admin() ) {
				add_action( 'init', array(&$this, 'text_domain') );
				add_action( 'admin_menu', array( &$this, 'on_admin_menu' ) );
			}
		}
		
		function text_domain() {
			
			if ( function_exists('load_plugin_textdomain') )
				load_plugin_textdomain( FB_ADM_TEXTDOMAIN, false, FB_ADM_BASEDIR . '/languages' );
		}
		
		function on_load_page() {
			add_thickbox();
		}
		
		function on_admin_menu() {
			
			if( current_user_can('unfiltered_html') ) {
				$this->pagehook = add_management_page( __( 'Adminer', FB_ADM_TEXTDOMAIN ), __( 'Adminer', FB_ADM_TEXTDOMAIN ), 'unfiltered_html', FB_ADM_BASENAME, array(&$this, 'on_show_page'), '' );
				add_action( 'load-' . $this->pagehook, array(&$this, 'on_load_page') );
			}
		}
		
		function on_show_page() {
			global $wpdb;
			
			if ( DB_USER == '' )
				$db_user = __( 'empty', FB_ADM_TEXTDOMAIN );
			else
				$db_user = DB_USER;
				
			if ( DB_PASSWORD == '' )
				$db_password = __( 'empty', FB_ADM_TEXTDOMAIN );
			else
				$db_password = DB_PASSWORD;
			?>
			<div class="wrap">
				<?php screen_icon('tools'); ?>
				<h2><?php _e( 'Adminer for WordPress', FB_ADM_TEXTDOMAIN ); ?></h2>
				<img class="alignright" src="<?php echo WP_PLUGIN_URL . '/' . FB_ADM_BASEDIR; ?>/images/logo.png" alt="Adminer Logo" />
				<p><a href="http://www.adminer.org/">Adminer</a> <?php _e( '(formerly phpMinAdmin) is a full-featured MySQL management tool written in PHP. Conversely to phpMyAdmin, it consist of a single file ready to deploy to the target server.', FB_ADM_TEXTDOMAIN ); ?></p>
				<br class="clear"/>
				
				<script type="text/javascript">
				<!--
					var viewportwidth;
					var viewportheight;
				
					if (typeof window.innerWidth != 'undefined') {
						viewportwidth = window.innerWidth-80,
						viewportheight = window.innerHeight-100
					} else if (typeof document.documentElement != 'undefined'
						&& typeof document.documentElement.clientWidth !=
						'undefined' && document.documentElement.clientWidth != 0)
					{
						viewportwidth = document.documentElement.clientWidth,
						viewportheight = document.documentElement.clientHeight
					} else { // older versions of IE
						viewportwidth = document.getElementsByTagName('body')[0].clientWidth,
						viewportheight = document.getElementsByTagName('body')[0].clientHeight
					}
					//document.write('<p class="textright">Your viewport width is '+viewportwidth+'x'+viewportheight+'</p>');
					document.write('<a onclick="return false;" href="<?php echo WP_PLUGIN_URL . '/' . FB_ADM_BASEDIR; ?>/inc/index.php?username=<?php echo DB_USER; ?>&?KeepThis=true&amp;TB_iframe=true&amp;height='+viewportheight+'&width='+viewportwidth+'" class="thickbox button">Start Adminer</a>');
					//-->
				</script>
				<p>&nbsp;</p>
				
				<noscript>
					<iframe src="inc/index.php?username=<?php echo DB_USER; ?>" width="100%" height="600" name="adminer">
						<p><?php _e('Your browser does not support embedded frames.', FB_ADM_TEXTDOMAIN); ?></p>
					</iframe>
				</noscript>
				
				<h4><?php _e('Your Datebase data', FB_ADM_TEXTDOMAIN); ?></h4>
				<table class="widefat post fixed">
					<thead>
						<tr>
							<th><?php _e('Typ', FB_ADM_TEXTDOMAIN); ?></th>
							<th><?php _e('Value', FB_ADM_TEXTDOMAIN); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr valign="top">
							<th scope="row"><?php _e('Server', FB_ADM_TEXTDOMAIN); ?></th>
							<td><?php echo DB_HOST; ?></td>
						</tr>
						<tr valign="top" class="alternate">
							<th scope="row"><?php _e('User', FB_ADM_TEXTDOMAIN); ?></th>
							<td><?php echo $db_user; ?></td>
						</tr>
						<tr valign="top">
							<th scope="row"><?php _e('Password', FB_ADM_TEXTDOMAIN); ?></th>
							<td><?php echo $db_password; ?></td>
						</tr>
					</tbody>
				</table>
			
			</div>
			<?php
		}
		
	}
	
	$AdminerForWP = new AdminerForWP();
}
?>