<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<div class="content__homepage">
    <?php get_sidebar(); ?>
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
</div>

<?php get_footer(); ?>