<?php
// Ensure ACF is active.
if (function_exists('get_field')):

    // Get ACF fields.
    $profile_image = get_field('profile_image');
    $profile_name = get_field('profile_name');
    $profile_subtitle = get_field('profile_subtitle');
    $profile_subtitle_2 = get_field('profile_subtitle_2');
    $profile_points = get_field('profile_points');
    $profile_progress = get_field('profile_progress');
?>
    <div class="profile-block">
        <div class="profile-block__user">
            <div class="profile-block__image">
                <?php if ($profile_image): ?>
                    <img src="<?php echo esc_url($profile_image['url']); ?>" alt="<?php echo esc_attr($profile_image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="profile-block__details">
                <p><?php echo esc_html($profile_name); ?></p>
                <p><?php echo esc_html($profile_subtitle); ?></p>
                <p><?php echo esc_html($profile_subtitle_2); ?></p>
            </div>
        </div>
        <hr class="profile-block__divider">
        <div class="profile-block__points">
            <p class="profile-block__points-label"><?php _e('Total points', 'threetowers'); ?></p>
            <?php if ($profile_points): ?>
                <p class="profile-block__points-value"><?php echo number_format($profile_points, 3, ',', ''); ?></p>
            <?php endif; ?>
        </div>
        <div class="profile-block__progress">
            <?php if ($profile_progress): ?>
                <div class="profile-block__progress-bar">
                    <div class="profile-block__progress-bar-fill" style="width: <?php echo esc_attr($profile_progress); ?>%;"></div>
                </div>
            <?php endif; ?>
            <div class="profile-block__progress-label">
                <p><?php _e('Lvl 1', 'threetowers'); ?></p>
                <p><?php _e('Lvl 2', 'threetowers'); ?></p>
            </div>
        </div>
    </div>
<?php endif; ?>