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
}
add_action('init', 'register_acf_blocks');

// Debugging information
add_action('init', function () {
    if (function_exists('acf_register_block_type')) {
        error_log('acf_register_block_type function exists.');
    } else {
        error_log('acf_register_block_type function does not exist.');
    }

    if (function_exists('get_field')) {
        error_log('get_field function exists.');
    } else {
        error_log('get_field function does not exist.');
    }
});

function tt3child_register_acf_blocks()
{
    /**
     * We register our block's with WordPress's handy
     * register_block_type();
     *
     * @link https://developer.wordpress.org/reference/functions/register_block_type/
     */
    register_block_type(__DIR__ . '/blocks/testimonial');
}
// Here we call our tt3child_register_acf_block() function on init.
add_action('init', 'tt3child_register_acf_blocks');
