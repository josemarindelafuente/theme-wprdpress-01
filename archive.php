<?php get_header(); ?>

    



<div class="container">

<h1> <?php echo get_the_archive_title(); ?> </h1>

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