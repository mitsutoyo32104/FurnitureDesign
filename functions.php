<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('reset_style', get_theme_file_uri() . '/styles/parts/reset.css');
    wp_enqueue_style('common_style', get_theme_file_uri() . '/style.css');

    wp_enqueue_script('import_scripts', get_theme_file_uri('/js/import.js'));
    wp_enqueue_script('main_scripts', get_theme_file_uri('/js/main.js'));
});

add_action('init', function() {
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'global_navigation' => 'グローバルナビゲーション',
    ]);

    register_post_type('item', [
        'label' => '商品管理',
        'menu_position' => 5,
        'menu_icon' => 'dashicons-store',
        'public' => true,
        'supports' => [
            'thumbnail',
            'title',
            'editor'
        ],
        'has_archive' => true,
    ]);
});