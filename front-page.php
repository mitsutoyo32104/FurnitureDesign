<?php get_header(); ?>
<main class="product">
    <div class="container">
        <h2>NEW ITEMS</h2>
        <ul class="prodcut__main">
            <li class="product__item">
                <a href="<?php the_permalink(); ?>">
                    <?php if (have_posts()) : ?>
                        <?php for ($i = 0; $i < 3; $i++) : the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                        <?php endfor; ?>
                    <?php endif; ?>
                </a>
            </li>
        </ul>
    </div>
</main>
<div class="view-more container">
    <a href="#">View More</a>
</div>
<?php get_footer(); ?>