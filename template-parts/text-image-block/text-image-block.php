<?php
// Ensure ACF is active.
if (function_exists('get_field')):

    // Get ACF fields.
    $heading = get_field('heading');
    $subheading = get_field('subheading');
    $text = get_field('text');
    $image = get_field('image');
?>
    <div class="text-image-block">
        <h2 class="block-heading"><?php echo esc_html($heading); ?></h2>
        <h3 class="block-subheading"><?php echo esc_html($subheading); ?></h3>
        <div class="text-image-block__content">
            <div class="text-image-block__text">
                <p><?php echo esc_html($text); ?></p>
            </div>
            <div class="text-image-block__image">
                <?php if ($image): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>