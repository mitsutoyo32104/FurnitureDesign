<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <h1 class="site-title"><a href="#">Furniture Design2</a></h1>
                <button class="menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <?php get_template_part('includes/navigation'); ?>
            </div>
        </div>
    </header>