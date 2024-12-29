<?php
if (function_exists('get_field')):

    $heading = get_field('heading');
    $cards = get_field('cards');
?>
    <div class="cards-block swiper-container">
        <div class="cards-block__title">
            <h2 class="cards-block__title-heading"><?php echo esc_html($heading); ?></h2>
            <div class="cards-block__title-navigation">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="cards-block__cards swiper-wrapper">
            <?php if ($cards): ?>
                <?php foreach ($cards as $card): ?>
                    <div class="cards-block__card swiper-slide" onmouseover="this.classList.add('cards-block__card--hovered')" onmouseout="this.classList.remove('cards-block__card--hovered')">
                        <div class="cards-block__card-label">
                            <p class="cards-block__card-subtitle"><?php echo esc_html($card['subtitle']); ?></p>
                            <p class="cards-block__card-number"><?php echo esc_html($card['number']); ?></p>
                        </div>
                        <div class="cards-block__card-content">
                            <h3 class="cards-block__card-title"><?php echo esc_html($card['title']); ?></h3>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>