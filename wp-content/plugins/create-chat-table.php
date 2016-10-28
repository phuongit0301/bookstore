<?php
/*
Plugin Name: Create table chat
Description: The plugin to create table chat
Plugin URI: http://yensaohoangkhai.com/
Author URI: http://yensaohoangkhai.com/
Author: Phan Thanh Phuong
License: Public Domain
Version: 1.0
*/


global $chat_db_version;
$chat_db_version = '1.0';

function chat_plugin_activated() 
{
     // This will run when the plugin is activated, setup the database
    global $wpdb;

	$table_name = $wpdb->prefix . 'chat';
	
	$charset_collate = $wpdb->get_charset_collate();


	$sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		username VARCHAR(255) NOT NULL, 
		chattext TEXT NOT NULL,
		chattime TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		PRIMARY KEY (id)
	) $charset_collate;";


	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	add_option( 'chat_db_version', $chat_db_version );


	$installed_ver = get_option('chat_db_version');
    if ($installed_ver != $chat_db_version) {
        $sql = "CREATE TABLE " . $table_name . " (
			id mediumint(9) NOT NULL AUTO_INCREMENT,
			username VARCHAR(255) NOT NULL, 
			chattext TEXT NOT NULL,
			chattime TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
			PRIMARY KEY (id)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);

        // notice that we are updating option, rather than adding it
        update_option('chat_db_version', $chat_db_version);
    }

}

register_activation_hook(__FILE__, 'chat_plugin_activated');


function chat_plugin_deactivated() 
{
	global $wpdb;
    $table = $wpdb->prefix."chat";

	$wpdb->query("DROP TABLE IF EXISTS $table");
}
register_deactivation_hook( __FILE__, 'chat_plugin_deactivated' );