<?php

// reconfiguracion de las clases de estilo del menu
require get_template_directory() . '/includes/class-my-theme-walker-nav-menu.php';


add_action( 'after_setup_theme', 'add_features' ); //https://youtu.be/zJow4A9csyE?list=PLuvWCOZetD44AhINUd3WKdOt41tF8jh7B&t=114

function add_features() {

    // agregar este Feature que no esta por defecto en wordpress
    add_theme_support( 'post_thumbnails' );

    // custom image sizes
    add_image_size('my_theme_thumbnail', 700, 350, true);
    add_image_size('my_theme_feature_image', 900, 400, true);

}

add_action( 'after_setup_theme', 'add_menus' );

function add_menus() {

    register_nav_menus( array('Primary' => 'Menú Principal function.php') );

}


add_action( 'wp_enqueue_scripts', 'add_assets' );

function add_assets() {

                // cargo los CSS de bootstrap
                wp_enqueue_style( 
                    'my_blog_style_bootstrap' , 
                    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' 
                );

                // cargamos el archivo style.css de la raiz del theme
                wp_enqueue_style( 
                    'my_blog_style' , 
                    get_stylesheet_uri() 
                );
                
                // cargamos el archivo home.css de la carpeta /css
                wp_enqueue_style( 
                    'my_blog_home_style' , 
                    get_template_directory_uri() . '/css/home.css' 
                );

                //https://developer.wordpress.org/reference/functions/wp_enqueue_script/
                /*wp_enqueue_script( 
                    'my_blog_script' , 
                    get_template_directory_uri().'/js/script.js', 
                    array(), 
                    false, 
                    true  
                );*/

                wp_enqueue_script( 
                    'my_blog_script-bootstrap' , 
                    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js', 
                    array(), 
                    false, 
                    true  
                );

}