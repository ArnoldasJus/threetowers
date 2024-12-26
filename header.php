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
            <?php /*
            <div class="header__cta">
                <a href="<?php echo esc_url(get_theme_mod('cta_url', '#')); ?>" class="button_cta">
                    <?php echo esc_html(get_theme_mod('cta_text', __('Click Here', 'threetowers'))); ?>
                </a>
            </div>
            */ ?>
            <div class="header-cta">
                <div class="button__cta">
                    <a href="<?php echo esc_url(get_theme_mod('cta_url', '#')); ?>" class="button_cta">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="Arrow Left" class="button_cta__icon button_cta__icon--left">
                        <span class="button_cta__text"><?php echo esc_html(get_theme_mod('cta_text', __('Click Here', 'threetowers'))); ?></span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow Right" class="button_cta__icon button_cta__icon--right">
                    </a>
                </div>
            </div>
        </div>
    </header>