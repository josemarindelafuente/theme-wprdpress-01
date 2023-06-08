
        <h1> <?php the_title(); ?> </h1>
        <p>publicado: <?php the_date(); ?> </p>

        <p>
        <?php  the_post_thumbnail('my_theme_feature_image', ['class' => 'card-img-top', 'title' => 'Feature image']); ?>
        </p>

        <section>
            <?php the_content(); ?>
        </section>


