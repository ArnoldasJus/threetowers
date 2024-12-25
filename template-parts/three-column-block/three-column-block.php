<?php
if (function_exists('get_field')):

    $heading = get_field('heading');
    $subheading = get_field('subheading');
    $cards = get_field('cards');
?>
    <div class="three-column-block">
        <div class="three-column-block__title">
            <h2 class="three-column-block__title-heading"><?php echo esc_html($heading); ?></h2>
            <p class="three-column-block__title-sub"><?php echo esc_html($subheading); ?></p>
        </div>
        <div class="three-column-block__cards">
            <?php if ($cards): ?>
                <?php foreach ($cards as $card): ?>
                    <div class="three-column-block__card">
                        <h4><?php echo esc_html($card['title']); ?></h4>
                        <h5><?php echo esc_html($card['subtitle']); ?></h5>
                        <p><?php echo esc_html($card['text']); ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>