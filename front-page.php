<?php

// 商品管理投稿タイプから4件だけ記事を取得
$new_query = new WP_Query([
    'post_type' => 'item',
    'posts_per_page' => 4,
    'paged' => 1
]);

?>
<?php get_header(); ?>
<main>
    <section class="new-products">
        <div class="container">
            <h2>New Items</h2>
            <ul class="new-products__main">
                <?php if ($new_query->have_posts()) : ?>
                    <?php while ($new_query->have_posts()) : $new_query->the_post(); ?>
                        <li class="new-products__item">
                            <a class="new-products__link" href="<?php esc_url(the_permalink()); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php endif; ?>
                                <h2 class="title"><?php esc_html(the_title()); ?></h2>
                                <p class="excerpt"><?php esc_html(the_excerpt()); ?></p>
                                
                                

                                <dl class="product-info">
                                    <dt>価格</dt>
                                    <dd>
                                        <?php
                                        $price = get_post_meta(get_the_ID(), 'price', true );
                                        $price = number_format((int)$price, 0, '.', ',');
                                        echo $price;
                                        ?>
                                    </dd>
                                    <dt>カラー</dt>
                                    <dd>
                                        <?php 
                                        $colors = get_post_meta(get_the_ID(), 'color', false); 
                                        foreach($colors as $color) {
                                            echo '<dd>' . $color . '</dd>';
                                        }
                                        ?>
                                    </dd>
                                </dl>
                                





                            </a>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </ul>
        </div>
    </section>
    <section class="topics">
        <div class="container">
            <h2 id="#topic">Topics</h2>
            <ul class="topics__main">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <li class="topics__item">
                            <a class="topics__link" href="#">
                                <h3>コラム: <?php esc_html(the_title()); ?></h3>
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full'); ?>
                                <?php endif; ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </section>
    <section class="products">
        <ul class="products__main">
            <li class="products__item">
            
            </li>
        </ul>
    </section>
</main>
<div class="view-more container">
    <a href="#">View More</a>
</div>
<?php get_footer(); ?>