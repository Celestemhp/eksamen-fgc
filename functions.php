<?php add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');

    // wp_enqueue_script('main', get_stylesheet_directory_uri() . '/main.js');

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
