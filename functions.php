<?php

// Enqueue styles
function theme_enqueue_styles()
{
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// Theme setup
function theme_setup()
{
    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 40,
        'width'       => 136,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Register navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'threetowers'),
    ));

    // Register default sidebar
    register_sidebar(array(
        'name'          => __('Default Sidebar', 'threetowers'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets in this area will be shown in the default sidebar.', 'threetowers'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('after_setup_theme', 'theme_setup');

// Customizer settings
function theme_customize_register($wp_customize)
{
    // Add CTA Section
    $wp_customize->add_section('cta_section', array(
        'title'       => __('Header CTA', 'threetowers'),
        'priority'    => 30,
        'description' => 'Customize the CTA in the header',
    ));

    // Add CTA Text Setting
    $wp_customize->add_setting('cta_text', array(
        'default'   => __('Click Here', 'threetowers'),
        'transport' => 'refresh',
    ));

    // Add CTA Text Control
    $wp_customize->add_control('cta_text_control', array(
        'label'    => __('CTA Text', 'threetowers'),
        'section'  => 'cta_section',
        'settings' => 'cta_text',
        'type'     => 'text',
    ));

    // Add CTA URL Setting
    $wp_customize->add_setting('cta_url', array(
        'default'   => '#',
        'transport' => 'refresh',
    ));

    // Add CTA URL Control
    $wp_customize->add_control('cta_url_control', array(
        'label'    => __('CTA URL', 'threetowers'),
        'section'  => 'cta_section',
        'settings' => 'cta_url',
        'type'     => 'url',
    ));
}
add_action('customize_register', 'theme_customize_register');

// Register ACF blocks using block.json
function register_acf_blocks()
{
    register_block_type(__DIR__ . '/template-parts/hero-block');
    register_block_type(__DIR__ . '/template-parts/simple-block');
    register_block_type(__DIR__ . '/template-parts/profile-block');
}
add_action('init', 'register_acf_blocks');
