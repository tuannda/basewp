<?php

/**
 * Enqueue scripts and styles.
 */
function base_scripts()
{
    wp_enqueue_style('base-style', get_template_directory_uri() . '/assets/main.min.css', array(), _S_VERSION);

    wp_enqueue_script('base-navigation', get_template_directory_uri() . '/assets/main.min.js', false, _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'base_scripts');
