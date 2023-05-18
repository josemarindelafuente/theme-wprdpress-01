

<div class="card">

        <?php  the_post_thumbnail('medium', ['class' => 'card-img-top', 'title' => 'Feature image']); ?>

        <?php // https://youtu.be/zJow4A9csyE?list=PLuvWCOZetD44AhINUd3WKdOt41tF8jh7B&t=603 

        //the_post_thumbnail( 'my_theme_thumbnail' ); // tamaño declarado en el archivo functions.php
        
        ?>

        <div class="card-body">
            <h3 class="card-title"> 
                <a href="<?php the_permalink();?>">
                    <?php the_title(); ?>
                </a>            
            </h3>
            <p class="card-text"> <?php the_excerpt(); ?> </p>
            <p class="card-text"><small class="text-body-secondary"> <?php echo get_the_date();?> </small></p>
        </div>
        
</div>

    


