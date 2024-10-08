<?php  
function play(){
    wp_enqueue_script('custom.js',get_template_directory_uri().'/assets/js/custom.js', array('jquery'),false,true);
    wp_enqueue_style('custom.css', get_template_directory_uri().'/assets/css/custom.css',array(),'1.0.0','all');
}

add_action('wp_enqueue_scripts','play');

add_theme_support('menus');

//wp_nav_menu();

register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
        'footer_menu' => 'Footer Menu'
    )
);
