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
                    <a href="<?php echo esc_url($button['url']); ?>" class="button__cta">
                        <svg class="chevron-svg" width="27" height="42" viewBox="0 0 27 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27 1H17.7714C16.5492 1 15.3941 1.55873 14.6354 2.51688L1.9662 18.5169C0.814122 19.9718 0.81412 22.0282 1.9662 23.4831L14.6354 39.4831C15.3941 40.4413 16.5492 41 17.7714 41H27"
                                stroke="url(#paint0_linear)" stroke-width="1.5" fill="none" />
                            <defs>
                                <linearGradient id="paint0_linear" x1="13.5" y1="1" x2="13.5" y2="41" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#5EDFFF" />
                                    <stop offset="1" stop-color="#1D58F5" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <span class="button__cta-text"><?php echo esc_html($button['title']); ?></span>
                        <svg class="chevron-svg" width="27" height="42" viewBox="0 0 27 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 1H9.22863C10.4508 1 11.6059 1.55873 12.3646 2.51688L25.0338 18.5169C26.1859 19.9718 26.1859 22.0282 25.0338 23.4831L12.3646 39.4831C11.6059 40.4413 10.4508 41 9.22863 41H0"
                                stroke="url(#paint1_linear)" stroke-width="1.5" fill="none" />
                            <defs>
                                <linearGradient id="paint1_linear" x1="13.5" y1="1" x2="13.5" y2="41" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#5EDFFF" />
                                    <stop offset="1" stop-color="#1D58F5" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
            <div class="text-image-block__image" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
            </div>
        </div>
    </div>
<?php endif; ?>