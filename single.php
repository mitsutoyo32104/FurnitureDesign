<?php get_header(); ?>
<main class="topic">
    <div class="container">
        <h2 class="title slide-text"><?php the_title(); ?></h2>
        <div class="topic__content">
            <div class="topic__img__wrapper spread-cover">
                <span class="cover1"></span>
                <span class="cover2"></span>
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="topic__text">
                <h2></h2>
                <div class="topic__description">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="pagination">
    <?php next_post_link('%link', "<< latest <br> [%title]"); ?>
    <?php previous_post_link('%link', "older >> <br> [%title]"); ?>
</div>
<?php get_footer(); ?>