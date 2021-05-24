<?php
/*
 * Plugin Name: Recipe
 * Description: A simple WordPress Recipe plugin.
 * Version: 1.0
 * Author: Mehdi Mousavi
 * text domain: recipe
 */

if ( !function_exists ('add_action' ) ) {
    echo "Hi there! Exit please";
    exit;
}

// Setup

// Includes
include( 'includes/activate.php' );
include( 'includes/init.php' );

// Hooks
register_activation_hook( __FILE__, 'r_activate_plugin' );
add_action ( 'init', 'recipe_init' );

// Shortcodes
