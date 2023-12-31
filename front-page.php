<?php

// 商品管理投稿タイプから4件だけnew itemとして記事を取得
$new_query = new WP_Query([
    'post_type' => 'item',
    'posts_per_page' => 4,
    'paged' => 1
]);


$product_query = new WP_Query([
    'post_type' => 'item',
    'posts_per_page' => 9,
    'paged' => 1
]);


?>
<?php get_header(); ?>
<main>
    <section class="new-products">
        <div class="container">
            <div class="title-wrapper">
                <h2 class="title slide-text">NEW RELEASE</h2>
            </div>
            <!-- Slider main container -->
            <div class="swiper new-products__main">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <?php if ($new_query->have_posts()) : ?>
                        <?php while ($new_query->have_posts()) : $new_query->the_post(); ?>
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="swiper-img-wrapper">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail();
                                        }
                                        ?>
                                    </div>
                                    <div class="swiper-text">
                                        <div class="swiper-text-inner">
                                            <h3><?php the_title(); ?></h3>
                                            <p class="price">
                                                <?php
                                                // カスタムフィールドから価格を取得後、1000区切にする
                                                $price = get_post_meta(get_the_ID(), 'price', true);
                                                $price = number_format((int)$price, 0, '.', ',');
                                                echo '¥' . $price . '+ tax';
                                                ?>
                                            </p>

                                            <?php
                                            // 日付情報の取得。(datetime属性用と表示用)
                                            $release_day = get_post_meta(get_the_ID(), 'release', true);
                                            $time_stamp = strtotime($release_day);
                                            ?>
                                            <time datetime="<?php echo date('Y-m-d', $time_stamp)  ?>">
                                                <?php echo date('Y/m/d', $time_stamp) . ' Release'; ?>
                                            </time>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </section>
    <section class="products">
        <div class="container">
            <div class="title-wrapper">
                <h2 class="title slide-text">PRODUCTS</h2>
            </div>
            <ul class="products__main">
                <?php if ($product_query->have_posts()) : ?>
                    <?php while ($product_query->have_posts()) : $product_query->the_post(); ?>
                        <li class="products__item appear down">
                            <a class="products__link" href="<?php the_permalink(); ?>">
                                <div class="products__img">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail();
                                    }
                                    ?>
                                </div>
                                <div class="products__text">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php the_excerpt(); ?></p>
                                    <p class="price"> 
                                        <?php
                                        // カスタムフィールドから価格を取得後、1000区切にする
                                        $price = get_post_meta(get_the_ID(), 'price', true);
                                        $price = number_format((int)$price, 0, '.', ',');
                                        echo '¥' . $price . '+ tax';
                                        ?>
                                    </p>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
        <div class="btn-wrapper">
            <a  class="btn cover-3d" href="/item/"><span>View More</span></a>
        </div>
    </section>
    <section class="topics">
        <div class="container">
            <div class="title-wrapper">
                <h2 class="title slide-text" id="#topic">TOPICS</h2>
            </div>
            <ul class="topics__main">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <li class="topics__item">
                            <a class="topics__link" href="<?php the_permalink(); ?>">
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
        <div class="btn-wrapper">
            <a class="btn shadow" href="/category/topic/">View More</a>
        </div>
    </section>
</main>
<?php get_footer(); ?>