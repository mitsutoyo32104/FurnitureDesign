<?php get_header(); ?>
<section class="products">
    <div class="container">
        <h2 class="title slide-text">PRODUCTS</h2>
        <ul class="products__main">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <li class="products__item appear ">
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
</section>
<div class="pagination-wrapper">
    <?php
    the_posts_pagination([
        'mid_size' => 2,
        'prev_text' => __('&lt;'),
        'next_text' => __('&gt;'),
    ]);
    ?>
</div>
<?php get_footer(); ?>