<?php get_header(); ?>
<main class="product">
    <div class="container">
        <h2 class="title slide-text"><?php the_title(); ?></h2>
        <div class="product__content">
            <div class="product__img__wrapper spread-cover">
                <span class="cover1"></span>
                <span class="cover2"></span>
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="product__text">
                <h2></h2>
                <div class="product__description">
                    <?php the_content(); ?>
                </div>
                <dl class="product__information">
                    <dt>PRICE</dt>
                    <dd>
                        <?php
                        // カスタムフィールドから価格を取得後、1000区切にする
                        $price = get_post_meta(get_the_ID(), 'price', true);
                        $price = number_format((int)$price, 0, '.', ',');
                        echo '¥' . $price . ' + tax';
                        ?>
                    </dd>
                    <dt>COLOR</dt>
                    <dd><?php echo get_post_meta(get_the_ID(), 'color', true); ?></dd>
                    <dt>SIZE</dt>
                    <dd><?php echo get_post_meta(get_the_ID(), 'size', true); ?></dd>
                    <dt>MATERIAL</dt>
                    <dd><?php echo get_post_meta(get_the_ID(), 'material', true); ?></dd>
                    <dt>RELEASE</dt>
                    <dd>
                        <?php
                        $day = get_post_meta(get_the_ID(), 'release', true);
                        $time_stamp = strtotime($day);
                        echo date('Y/m/d', $time_stamp);
                        ?>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</main>
<div class="pagination">
    <?php next_post_link('%link', "[%title] <br> << latest"); ?>
    <?php previous_post_link('%link', "[%title] <br> older >>"); ?>
</div>
<?php get_footer(); ?>