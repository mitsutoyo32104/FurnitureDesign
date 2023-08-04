<?php

$query = new WP_Query([
    'post_type' => 'item',
    'posts_per_page' => 4,
    'paged' => 1
]);

?>
<section class="new-products">
    <div class="container">
        <h2>New Items</h2>
        <ul class="new-products__main">
            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <li class="new-products__item">
                        <a class="new-products__link" href="<?php esc_url(the_permalink()); ?>">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                            <h2 class="title"><?php esc_html(the_title()); ?></h2>
                            <p class="excerpt"><?php esc_html(the_excerpt()); ?></p>
                        </a>
                    </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </ul>
    </div>
</section>