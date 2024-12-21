<?php get_header(); ?>

<div class="content">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <h1><?php the_title(); ?></h1>
            <div class="content__page">
                <?php the_content(); ?>
            </div>
        <?php
        endwhile;
    else :
        ?>
        <p><?php esc_html_e('Sorry, no pages matched your criteria.', 'threetowers'); ?></p>
    <?php
    endif;
    ?>
</div>

<?php get_footer(); ?>