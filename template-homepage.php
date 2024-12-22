<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<div class="content content__home">
    <div class="main-content">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        else :
            echo '<p>' . esc_html__('Sorry, no posts matched your criteria.', 'threetowers') . '</p>';
        endif;
        ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>