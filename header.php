<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php
        // read: https://developer.wordpress.org/reference/hooks/wp_body_open/
        if ( function_exists( 'wp_body_open' ) ) {
		    wp_body_open();
	    }
	?>
    
    <header id="site-header">
        <div class="container">
            <div class="flex flex-align-center flex-justify-between">
                <div id="site-logo">
                    <a href="<?php echo home_url('/'); ?>">
                        <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-hounter.png" alt="<?php bloginfo( 'name' ); ?>"/>
                    </a>
                </div> <!-- end .site-logo -->

                <?php wp_nav_menu( [
                    'container'         => 'nav',
                    'container_class'   => 'site-navigation',
                    'menu_class'        => 'no-style',
                    'fallback_cb'       => 'hounter_primary_menu_cb'
                ] ); ?>
            </div><!-- end .flex -->
        </div><!-- end .contaienr -->
    </header><!-- end #site-header -->

    <main id="main-content">
