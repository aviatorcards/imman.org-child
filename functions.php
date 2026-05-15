<?php
add_action( 'wp_enqueue_scripts', 'imman_custom_child_enqueue_styles', 5 );

function imman_custom_child_enqueue_styles() {
    // The parent theme's style handle is 'imman-style' as defined in imman-custom/functions.php
    // Enqueue parent style
    wp_enqueue_style( 'imman-parent-style', get_template_directory_uri() . '/style.css' );

    // The parent theme already enqueues get_stylesheet_uri() (which is THIS child theme's style.css)
    // However, it does it with the handle 'imman-style'.
    // We don't need to enqueue the child style again, but we just want to ensure parent is loaded.
}
