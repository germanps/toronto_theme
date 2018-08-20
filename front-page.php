<?php get_header(); ?>

    <div class="widgets-home">
        <?php dynamic_sidebar('front-page') ?>
    </div>
    
    <div class="informacion-consejos">
        <div class="informacion">
            <?php $informacion = new WP_Query('page_id=8'); ?>
            <?php while($informacion->have_posts()) : $informacion->the_post(); ?>
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>

            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <div class="consejos">
            <h2>Consejos para viajar a Canadá</h5>
            <?php $args = array(
                'cat' => 11,
                'post_per_page' => 2,
                'order' => 'DESC',
                'orderby' => 'date'
            );?>
            <?php $consejos = new WP_Query($args); ?>
            <?php while($consejos->have_posts()) : $consejos->the_post(); ?>
                <?php the_post_thumbnail('guia-toronto');?>
                <h3><?php the_title() ?></h3>
                <?php the_excerpt();?>
            <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </div>
<?php get_footer(); ?>