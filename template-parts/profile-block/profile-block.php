<?php
// Ensure ACF is active.
if (function_exists('get_field')):

    // Get ACF fields.
    $profile_image = get_field('profile_image');
    $profile_name = get_field('profile_name');
    $profile_description = get_field('profile_subtitle');
    $profile_points = get_field('profile_points');
?>
    <div class="profile-block">
        <div class="profile-block__profile">
            <?php if ($profile_image): ?>
                <img src="<?php echo esc_url($profile_image['url']); ?>" alt="<?php echo esc_attr($profile_image['alt']); ?>" />
            <?php endif; ?>
            <h2><?php echo esc_html($profile_name); ?></h2>
            <p>Wallet</p>
            <p><?php echo esc_html($profile_subtitle); ?></p>
            <?php if ($profile_points): ?>
                <p><?php echo number_format($profile_points, 3, ',', ''); ?></p>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>