<?php
// Ensure ACF is active.
if (function_exists('get_field')):

    // Get ACF fields.
    $profile_image = get_field('profile_image');
    $profile_name = get_field('profile_name');
    $profile_description = get_field('profile_description');
    $cards = get_field('cards');
?>
    <div class="hero-block">
        <div class="hero-block__profile">
            <?php if ($profile_image): ?>
                <img src="<?php echo esc_url($profile_image['url']); ?>" alt="<?php echo esc_attr($profile_image['alt']); ?>" />
            <?php endif; ?>
            <h2><?php echo esc_html($profile_name); ?></h2>
            <p><?php echo esc_html($profile_description); ?></p>
        </div>

    </div>
<?php endif; ?>