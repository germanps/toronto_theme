<?php get_header(); ?>

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
                <ul class="post-header-list">
                    <li class="etiquetas"><?php the_tags(__('Etiquetas del post: '),', '); ?></li>
                    <li class="categorias"> <?php _e('Categorizado en: '); the_category(', ')?></li>
                    <li class="autor"><?php _e('Entrada por: '); the_author(); ?></li>
                </ul>
                <article id="post-<?php the_ID();?>" <?php post_class() ?>>
                    <?php the_content(); ?>
                    <?php //comments_template(); ?>
                </article>
            </div>
        
    <?php endwhile; ?>


            <?php get_sidebar(); ?>

        </div><!-- End flex-container -->

<?php get_footer(); ?>