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

/**
 * Reword Ultimate Member's empty-profile prompts for a friendlier, modern tone.
 */
add_filter( 'gettext', 'imman_um_profile_empty_copy', 10, 3 );
function imman_um_profile_empty_copy( $translation, $text, $domain ) {
    if ( 'ultimate-member' !== $domain ) {
        return $translation;
    }
    if ( 'Your profile is looking a little empty. Why not <a href="%s">add</a> some information!' === $text ) {
        return 'Make your profile yours — <a href="%s">add a bio</a>, your instruments, and where you play.';
    }
    if ( 'This user has not added any information to their profile yet.' === $text ) {
        return "This musician hasn't added details yet.";
    }
    return $translation;
}
