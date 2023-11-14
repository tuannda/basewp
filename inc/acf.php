<?php
/**
 * Integration with Advanced Custom Fields
 */

// https://www.advancedcustomfields.com/resources/options-page/

if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-settings',
        'capability' => 'edit_posts',
        'redirect' => true,
    ]);

    acf_add_options_sub_page([
        'page_title' => 'Thông tin liên hệ',
        'menu_title' => 'Thông tin liên hệ',
        'parent_slug' => 'theme-settings',
    ]);

    acf_add_options_sub_page([
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-settings',
    ]);
}
