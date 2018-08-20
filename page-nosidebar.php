<?php
/*
* Template Name: No sidebar
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
            <div id="primary" class="primary no-sidebar">
                
                <?php the_content(); ?>
            </div>
        
    <?php endwhile; ?>


        </div><!-- End flex-container -->

<?php get_footer(); ?>