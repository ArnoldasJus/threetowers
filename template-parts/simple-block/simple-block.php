<?php
if (function_exists('get_field')):
    error_log('get_field function is available in simple-block.php');

    // Get ACF fields.
    $simple_text = get_field('simple_text');
?>
    <div class="simple-block">
        <p><?php echo esc_html($simple_text); ?></p>
    </div>
<?php else: ?>
    <div class="simple-block">
        <p>ACF is not initialized or get_field function is not available.</p>
    </div>
<?php endif; ?>