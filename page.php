<?php get_header(); ?>

    



<div class="container">


        <div class="row">

                <div class="col-12 col-md-8">
                        <?php 
                        if ( have_posts() ) {
                                the_post();
                                
                                get_template_part( 'template-parts/content' , 'page' ); //https://youtu.be/wLIRQoZF0HQ?list=PLuvWCOZetD44AhINUd3WKdOt41tF8jh7B&t=458
                        } 
                        ?>
                </div>

                <div class="col-12 col-md-4">

                        sidebar

                </div>
            

        

        
        </div>


</div>









<?php get_footer(); ?>