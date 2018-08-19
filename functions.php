<?php 

    function theme_scripts(){
        wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
        wp_enqueue_style('styles', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'theme_scripts');

    //registrar menus
    register_nav_menus(array(
        'menu_principal' => __('Menu Principal', 'Toronto Theme')
    ) );


    //imagenes destacadas
    add_theme_support('post-thumbnails');
    //tamaños imágenes
    add_image_size('destacada', 1200, 420, true);
    //agregar los widgets
    function theme_widgets(){
        register_sidebar( array(
            'name'          => __('Sidebar testimonios'),
            'id'            => 'sidebar-2',
            'description'   => 'Widgets de testimonios',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'

        ) );
    }
    add_action('widgets_init', 'theme_widgets');


    add_filter('show_admin_bar', '__return_false');

?>