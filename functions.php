<?php 

    function theme_scripts(){
        wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
        wp_enqueue_style('bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css');
        wp_enqueue_style('styles', get_stylesheet_uri());
        wp_enqueue_script('jquery');
        wp_enqueue_script('bxsliderjs', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'),'4.0',true);
        wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'),'1.0',true);
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
    add_image_size('guia-toronto', 350, 210, true);
    add_image_size('consejos', 720, 380, true);
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
        register_sidebar( array(
            'name'          => __('Imáneges Página Principal'),
            'id'            => 'front-page',
            'description'   => 'Widgets de página principal',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'

        ) );
    }
    add_action('widgets_init', 'theme_widgets');


    add_filter('show_admin_bar', '__return_false');

?>