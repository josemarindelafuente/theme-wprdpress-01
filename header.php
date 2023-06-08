<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer Theme en Wordpress</title>

    <?php wp_head(); ?>
</head>
<body>


<header>

<nav class="py-2 bg-body-tertiary border-bottom">
    <div class="container d-flex flex-wrap">
     

      <?php
      /* MENU PRINCIPAL DE WORDPRESS */
      wp_nav_menu( //https://developer.wordpress.org/reference/functions/wp_nav_menu/
        array(
        'menu' => 'primary',
        'menu_class' => 'nav me-auto',
        'container' => '',
        'walker' => new My_Theme_Walker_Nav_Menu(), //https://youtu.be/MvDAOa2zDrw?list=PLuvWCOZetD44AhINUd3WKdOt41tF8jh7B&t=590
        )
       ); 
      /* FIN MENU PRINCIPAL DE WORDPRESS */
      ?>



    </div>
  </nav>


  <header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
      <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Double header</span>
      </a>
      
      <?php get_search_form(); ?>

      
    </div>
  </header>
</header>