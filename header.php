<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <h1 class="site-title"><a href="<?php home_url(); ?>">Furniture Design2</a></h1>
                <button class="menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <?php get_template_part('includes/navigation'); ?>
            </div>
        </div>
    </header>