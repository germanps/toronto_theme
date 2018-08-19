
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
                
                <!-- Custom query de wordpress -->
                <?php $args = array(
                    'cat' => array(4,3,5,6),
                    'post_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC',
                ); ?>
                <?php $guiaToronto = new WP_Query($args); ?>

                <?php while($guiaToronto->have_posts() ) : $guiaToronto->the_post(); ?>
                
                <div class="post-toronto">
                    <div class="imagen">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('guia-toronto') ?>
                        </a>
                        <div class="categoria">
                            <?php the_category(); ?>
                        </div>
                    </div>

                    <div class="contenido">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Leer mas..</a>
                    </div>

                    <div class="info-post">
                        <p class="autor">Por: <?php the_author() ?></p>
                        <p class="fecha"><?php the_date() ?></p>

                    </div>

                </div> <!-- End post-toronto -->
            
                <?php endwhile; wp_reset_postdata() ?>

            </div> <!-- End primary -->
        
    <?php endwhile; ?>

            <?php get_sidebar(); ?>

        </div><!-- End flex-container -->

<?php get_footer(); ?>