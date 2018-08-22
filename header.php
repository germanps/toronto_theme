<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) {echo ': '; }?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <div id="page">
        <header id="masthead" class="site-header" role="banner">
            <div class="container">
                <div class="logo-wrapper">
                    <h1 class="site-title">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <?php //bloginfo('name'); ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="Logo del sitio">
                        </a>
                    </h1>
                </div>
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <?php wp_nav_menu( array( 
                        'theme_location' => 'menu_principal',
                        'menu_class' => 'menu-principal'
                        ) 
                    ); ?>
                </nav>
                <!-- <h2 class="site-description"><?php //bloginfo('description') ?></h2> -->
            </div>
        
        </header>

        <div id="contenido" class="container">