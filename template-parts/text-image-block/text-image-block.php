<?php
if (function_exists('get_field')):

    $heading = get_field('heading');
    $subheading = get_field('subheading');
    $title = get_field('title');
    $text = get_field('text');
    $number = get_field('number');
    $image = get_field('image');
    $button = get_field('button');
?>

    <div class="text-image-block">
        <div class="text-image-block__title">
            <h2 class="text-image-block__title-heading"><?php echo esc_html($heading); ?></h2>
            <p class="text-image-block__title-sub"><?php echo esc_html($subheading); ?></p>
        </div>
        <div class="text-image-block__content">
            <div class="text-image-block__text">
                <div class="text-image-block__text-content">
                    <h3 class="text-image-block__text-title"><?php echo esc_html($title); ?></h3>
                    <p class="text-image-block__text-text"><?php echo esc_html($text); ?></p>
                </div>
                <?php if ($button): ?>
                    <div class="button_cta">
                        <a href="<?php echo esc_url($button['url']); ?>" class="text-image-block__button"><?php echo esc_html($button['title']); ?></a>
                        <p class="text-image-block__text-number"><?php echo esc_html($number); ?></p>
                    </div>
                    <div class="button__cta">
                        <a href="<?php echo esc_url($button['url']); ?>" class="button_cta">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="Arrow Left" class="button_cta__icon button_cta__icon--left">
                            <span class="button_cta__text"><?php echo esc_html($button['title']); ?></span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow Right" class="button_cta__icon button_cta__icon--right">
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="text-image-block__image" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
            </div>
        </div>
    </div>
<?php endif; ?>