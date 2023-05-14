<?php get_header(); ?>

    



<div class="container">


        <div class="row">
            

        <?php 

        if ( have_posts() ) {
                the_post();
                
                get_template_part( 'template-parts/content' );
        } 
        
        ?>

        
        </div>


</div>









<?php get_footer(); ?>