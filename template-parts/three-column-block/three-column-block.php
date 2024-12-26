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
                    <div class="three-column-block__card" onmouseover="this.classList.add('three-column-block__card--hovered')" onmouseout="this.classList.remove('three-column-block__card--hovered')">
                        <div class="three-column-block__card-label">
                            <p class="three-column-block__card-subtitle"><?php echo esc_html($card['subtitle']); ?></p>
                            <p class="three-column-block__card-number"><?php echo esc_html($card['number']); ?></p>
                        </div>
                        <div class="three-column-block__card-content">
                            <h3 class="three-column-block__card-title"><?php echo esc_html($card['title']); ?></h3>
                            <p class="three-column-block__card-text"><?php echo esc_html($card['text']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>