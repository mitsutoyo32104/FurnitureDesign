<?php get_header(); ?>
<main>
    <!-- New Item Section -->
    <?php get_template_part('includes/new-products'); ?>

    <!-- Topic section -->
    <?php get_template_part('includes/topics'); ?>

    <!-- products section -->
    <?php get_template_part('includes/products');
</main>
<div class="view-more container">
    <a href="#">View More</a>
</div>
<?php get_footer(); ?>