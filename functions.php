<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('reset_style', get_theme_file_uri() . '/styles/parts/reset.css');
    wp_enqueue_style('common_style', get_theme_file_uri() . '/style.css');
    wp_enqueue_script('main_scripts', get_theme_file_uri('/js/main.js'));
});

add_action('init', function() {
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'global_navigation' => 'グローバルナビゲーション',
    ]);


});

