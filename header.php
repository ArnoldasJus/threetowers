<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="header__container">
            <div class="header__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php
                    if (function_exists('the_custom_logo') && has_custom_logo()) {
                        the_custom_logo();
                    } else {
                    ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="<?php esc_attr_e('Logo', 'threetowers'); ?>">
                    <?php
                    }
                    ?>
                </a>
            </div>
            <nav class="header__nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'header__menu',
                ));
                ?>
            </nav>
            <div class="header__cta">
                <a href="<?php echo esc_url(get_theme_mod('cta_url', '#')); ?>" class="button__cta">
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
                    <span class="button__cta-text"><?php echo esc_html(get_theme_mod('cta_text', __('Click Here', 'threetowers'))); ?></span>
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
            </div>
            <div class="header__mobile-menu-icon" id="mobile-menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <nav class="header__mobile-menu" id="mobile-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'header__mobile-menu-list',
            ));
            ?>
        </nav>
    </header>