<?php
/**
 * Enqueue scripts and styles.
 */
function basewp_scripts() {
    wp_enqueue_style( 'basewp-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'basewp-main', get_template_directory_uri() . '/assets/css/main.css', false, _S_VERSION, 'all' );

    wp_enqueue_script( 'basewp-main', get_template_directory_uri() . '/assets/js/main.js', false, _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'basewp_scripts' );
