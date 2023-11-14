<?php

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function basewp_setup() {
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on basewp, use a find and replace
        * to change 'basewp' to the name of your theme in all the template files.
        */
    load_theme_textdomain( 'basewp', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support( 'title-tag' );

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'main-menu' => esc_html__( 'Primary', 'basewp' ),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'basewp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function basewp_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'basewp_content_width', 640 );
}
add_action( 'after_setup_theme', 'basewp_content_width', 0 );

/**
 * The path where JSON files are created when ACF field groups are saved/updated
 * @param string path of save point
 * @return string path of save point
 * @link http://www.advancedcustomfields.com/resources/local-json/
 * @link http://www.advancedcustomfields.com/resources/synchronized-json/
 */
function acf_json_save_point($path)
{
    return get_template_directory() . '/acf-json';
}

add_filter('acf/settings/save_json', 'acf_json_save_point');

/**
 * The path where JSON files are loaded when ACF field groups are initialized
 * @param array of string paths of load point(s)
 * @return array of string paths of load point(s)
 * @link http://www.advancedcustomfields.com/resources/local-json/
 * @link http://www.advancedcustomfields.com/resources/synchronized-json/
 */
function acf_json_load_point($paths)
{
    return array(get_template_directory() . '/acf-json');
}

add_filter('acf/settings/load_json', 'acf_json_load_point');
