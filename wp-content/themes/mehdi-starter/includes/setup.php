<?php

function ju_setup_theme() {
    add_theme_support( 'post_thumbnails' );
    register_nav_menu( 'primary', __('Primary Menu', 'mehdi-stater') );
}