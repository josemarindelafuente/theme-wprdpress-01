<?php get_header(); ?>

    



<div class="container">

<h1>Resultado de Búsquedas en nuestro sitio web</h1>

<p>
    <?php
    global $wp_query;
    echo '<h3 >Entradas encontradas: ' . $wp_query->found_posts . '</h3>';
    ?>
</p>

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