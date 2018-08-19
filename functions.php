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













    add_filter('show_admin_bar', '__return_false');

?>