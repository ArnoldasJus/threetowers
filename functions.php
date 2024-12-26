<?php

function theme_enqueue_styles()
{
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_scripts()
{
    wp_enqueue_script('mobile-menu', get_template_directory_uri() . '/assets/js/mobile-menu.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function theme_setup()
{
    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo', array(
        'height'      => 40,
        'width'       => 136,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'threetowers'),
    ));

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

function theme_customize_register($wp_customize)
{
    $wp_customize->add_section('cta_section', array(
        'title'       => __('Header CTA', 'threetowers'),
        'priority'    => 30,
        'description' => 'Customize the CTA in the header',
    ));

    $wp_customize->add_setting('cta_text', array(
        'default'   => __('Click Here', 'threetowers'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('cta_text_control', array(
        'label'    => __('CTA Text', 'threetowers'),
        'section'  => 'cta_section',
        'settings' => 'cta_text',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('cta_url', array(
        'default'   => '#',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('cta_url_control', array(
        'label'    => __('CTA URL', 'threetowers'),
        'section'  => 'cta_section',
        'settings' => 'cta_url',
        'type'     => 'url',
    ));
}
add_action('customize_register', 'theme_customize_register');

function register_acf_blocks()
{
    register_block_type(__DIR__ . '/template-parts/hero-block');
    register_block_type(__DIR__ . '/template-parts/profile-block');
    register_block_type(__DIR__ . '/template-parts/three-column-block');
    register_block_type(__DIR__ . '/template-parts/text-image-block');
}
add_action('init', 'register_acf_blocks');
