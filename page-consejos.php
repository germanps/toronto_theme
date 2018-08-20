<?php
/*
* Template name: Consejos
*/
get_header(); ?>

    <?php  while(have_posts() ) : the_post(); ?>

    <?php if(has_post_thumbnail() ) { ?>
        <div class="destacada">
            <?php the_post_thumbnail('destacada') ?>
            <h2><?php the_title(); ?></h2>
        </div>
    <?php } else { ?>
        <h2 class="noimagen"><?php the_title(); ?></h2>
    <?php } ?>
        
        <div class="flex-container">
            <div id="primary" class="primary">
                
                <?php $args = array(
                    'post_per_page' => 5,
                    'orderby' => 'date',
                    'cat' => 11,
                    'order' => 'DESC'
                ); ?>
                <?php $consejos = new WP_Query($args); ?>

                <?php while($consejos->have_posts() ) : $consejos->the_post(); ?>
                    <div class="consejo">
                        <?php the_post_thumbnail('consejos'); ?>
                        <h2 class="consejos-title"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>

                <?php endwhile ?>
            </div>
        
    <?php endwhile; ?>


            <?php get_sidebar(); ?>

        </div><!-- End flex-container -->

<?php get_footer(); ?>