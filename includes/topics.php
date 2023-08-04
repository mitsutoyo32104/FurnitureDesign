<section class="topics">
    <div class="container">
        <h2 id="#topic">Topics</h2>
        <ul class="topics__main">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <li class="topics__item">
                        <a class="topics__link" href="#">
                            <h3><?php esc_html(the_title()); ?></h3>
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