<?php get_header(); ?>

    
<?php
// puedo usar CONDITIONAL TAGS para mostrar algunos elementos
// si me encuentro en alguna pagina en especial:
// - home.php
// - archive
// - search
// uso los conditional tags:
// - is_home()
// - is_archive()
// - is_search()
// https://youtu.be/Xfr1a88NeRM?list=PLuvWCOZetD44AhINUd3WKdOt41tF8jh7B&t=397
?>


<div class="container">

<h1>Mi primer sitio</h1>

        <div class="row">
            
                    <?php

                        if ( have_posts() ){
                            while ( have_posts() )
                            {
                                the_post();          
                                echo "<div class='col-12 col-md-4 mb-4'>";  
                                get_template_part( 'template-parts/post-card' );
                                echo "</div>";
                            }
                        }

                    ?>
        
        </div>
        <div class="row">
            <div class="col-12">
                <?php get_template_part( 'template-parts/pagination' ); ?>
            </div>
        </div>

</div>









<?php get_footer(); ?>