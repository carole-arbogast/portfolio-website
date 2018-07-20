<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">    
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

        <nav class="navbar navbar-expand-lg navbar-custom">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' )); ?>"><i class="fas fa-home"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'main_menu', // Defined when registering the menu
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'depth'          => 2,
                    'menu_class'     => 'navbar-nav mr-auto',
                    'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
                    'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
                ) );
                ?>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'right_menu', // Defined when registering the menu
                    'menu_id'        => 'secondary-menu',
                    'container'      => false,
                    'depth'          => 2,
                    'menu_class'     => 'navbar-nav ml-auto',
                    'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
                    'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
                ) );
                ?>                
            </div>
        </nav>
        
        <div class="main">