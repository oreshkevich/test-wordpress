<?php
add_action('wp_enqueue_scripts', 'tarragon_scripts');

function tarragon_scripts() {
    wp_enqueue_style( 'tarragon-style', get_stylesheet_uri() );

    wp_enqueue_script( 'tarragon-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
};

add_theme_support( 'custom-logo' );
?>