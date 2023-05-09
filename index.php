<?php get_header(); ?>

    <h1>Mi primer sitio</h1>

<?php

if ( have_posts() ){

    while ( have_posts() )
    {
        the_post();
        the_title();
        echo "<br>";
    }
     
}

?>




<?php get_footer(); ?>