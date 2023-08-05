<?php get_header(); ?>
<section class="products">
    <ul class="products__main">
        <li class="products__item">
            <?php the_post_thumbnail(); ?>
            <h3><?php the_title(); ?></h3>
            <?php get_post_meta($post->id, 'price', true); ?>
        </li>
    </ul>
</section>
<?php get_footer(); ?>