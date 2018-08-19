
<?php 
/*
*Template Name: Guía Toronto
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
                
                desde page-blog.php
            </div>
        
    <?php endwhile; ?>


            <?php get_sidebar(); ?>

        </div><!-- End flex-container -->

<?php get_footer(); ?>