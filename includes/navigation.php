<?php
// メニュー情報の取得
$menu_name = 'global_navigation';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object($locations[$menu_name]);
$menu_items = wp_get_nav_menu_items(($menu->term_id));
?>
<nav class="nav">
    <ul class="nav__main">
        <?php foreach ($menu_items as $item) : ?>
            <li class="nav__item">
                <a href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>