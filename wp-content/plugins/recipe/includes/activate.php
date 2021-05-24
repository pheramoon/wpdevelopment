<?php

function r_activate_plugin(){
    // 5.8 < 5.0
    if ( version_compare( get_bloginfo ( 'version' ), '5.0', '<' ) ) {
        wp_die( __( "You must update wordpress to use this plugin", 'recipe' ) );
    }

    global $wpdb;
    $createSQL= 
    "CREATE TABLE `" . $wpdb->prefix . "recipe_ratings` (
        `ID` bigint(20) unsigned NOT NULL,
        `recipe_id` bigint(20) unsigned DEFAULT NULL,
        `rating` float unsigned DEFAULT NULL,
        `user_ip` varchar(50) DEFAULT NULL,
        PRIMARY KEY (`ID`),
        UNIQUE KEY `ID_UNIQUE` (`ID`)
    ) ENGINE=InnoDB " . $wpdb->get_charset_collate() . ";";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $createSQL );

}