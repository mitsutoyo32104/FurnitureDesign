<?php
add_action('wp_enqueue_scripts', function () {

    // スタイルシートの読み込み
    $my_theme = wp_get_theme();
    wp_register_style('reset_style', get_template_directory_uri() . '/styles/parts/reset.css', array(), $my_theme->get('Version')); 
    wp_enqueue_style('main_style', get_theme_file_uri() . '/style.css', ['reset_style'], $my_theme->get('Version'));

    // scriptファイルの読み込み
    wp_enqueue_script('import_scripts', get_theme_file_uri('/js/import.js'), [], $my_theme->get('Version'));
    wp_enqueue_script('main_scripts', get_theme_file_uri('/js/main.js'), ['import_scripts'], $my_theme->get('Vesion'));
});


add_action('init', function () {
    // サムネイルをサポート
    add_theme_support('post-thumbnails');

    // ナビゲーションメニューのサポート
    register_nav_menus([
        'global_navigation' => 'グローバルナビゲーション',
    ]);

    // 投稿タイプに商品管理を追加。
    register_post_type('item', [
        'label' => '商品管理',
        'menu_position' => 5,
        'menu_icon' => 'dashicons-store',
        'public' => true,
        'supports' => [
            'thumbnail',
            'title',
            'editor',
            'custom-fields'
        ],
        'has_archive' => true,
        'show_in_rest' => true,
    ]);
});


// 抜粋の文字制限
function custom_excerpt_length($length)
{
    return 50;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

// 抜粋の省略記号の変更
add_filter('excerpt_more', function ($more) {
    return '... <span class="check-detail">[Check the details]</span>';
});
