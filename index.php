<?php get_header(); ?>

    <div class="flex-container">

        <div id="primary" class="primary">

            <?php while(have_posts() ) : the_post(); ?>
                <div class="entrada-blog">
                    <h2><?php the_title(); ?></h2>
                    <div class="contenido-entrada-blog"><?php the_content(); ?></div>
                </div>
            <?php endwhile ?>

        </div>
    


        <?php get_sidebar(); ?>
</div><!-- End flex-container -->


<?php get_footer(); ?>