<?php

add_action( 'wp_enqueue_scripts', 'add_assets' );

function add_assets() {
    wp_enqueue_style( 'my_blog_style' , get_stylesheet_uri() );
    
    //https://developer.wordpress.org/reference/functions/wp_enqueue_script/
    wp_enqueue_script( 'my_blog_script' , get_template_directory_uri().'/js/script.js', array(), false, true  );
}