<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<?php
// Retrieve the featured image URL
$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>

<div class="homepage" style="background-image: url('<?php echo esc_url($featured_image_url); ?>');">
    <div class="homepage__container">
        <?php get_sidebar(); ?>
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