<?php get_header(); ?>
<main class="topic">
    <div class="container">
        <div class="title-wrapper">
            <h2 class="title slide-text">TOPIC一覧</h2>
        </div>
        <ul class="topic__main">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <li class="topic__item">
                        <a class="topic__link" href="<?php the_permalink(); ?>">
                            <h3 class="sub-title"><?php the_title(); ?></h3>
                            <div class="excerpt-wrapper">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="thumnail-wrapper">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </a>
                    </li>
                <?php endwhile; ?>
            <?php else : ?>
                <p>現在投稿中の記事はありません。
            <?php endif; ?>
        </ul>
    </div>
</main>
<?php get_footer(); ?>