<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<?php
$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>

<style>
    .homepage::before {
        background-image: url('<?php echo esc_url($featured_image_url); ?>');
    }
</style>

<div class="homepage">
    <div class="homepage__container">
        <div class="homepage__sidebar">
            <?php get_sidebar(); ?>
        </div>
        <div class="homepage__content">
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
</div>

<?php get_footer(); ?>