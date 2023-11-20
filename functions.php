<?php


add_theme_support('align-wide');
add_theme_support('wp-block-styles');


add_action('wp_enqueue_scripts', function () {
    // wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/main.css');


    // wp_enqueue_script('main', get_stylesheet_directory_uri() . '/main.js');
    /**
     * Constants
     */
    define('THEME_ROOT', get_template_directory_uri());
    define('IMAGES', THEME_ROOT . '/images');
    define('SCRIPTS', THEME_ROOT . '/js');
    define('STYLES', THEME_ROOT . '/css');


    /**
     * Echo an SVG
     */

    function svg($name)
    {
        $image_url = get_template_directory_uri() . '/images/';
        echo '<img src="' . $image_url . $name . '.svg" class="injectable" />';
    }
    /**
     * Echo an PNG
     */

    function png($name)
    {
        $image_url = get_template_directory_uri() . '/images/';
        echo '<img src="' . $image_url . $name . '.png" class="injectable" />';
    }
});
