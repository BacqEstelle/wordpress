<?php

/**
 *Theme Name: composition
 *Author: BeCode Group : Belinda, Louis, Louis, Estelle
 *Description: First Thème !
 *Version: 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Main css -->
    <link rel="stylesheet" href="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/css/style.css">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <header class="page-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img class="logo-principal" src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/logo-full.svg" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e('Toggle Navigation', 'theme-textdomain'); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-content">
                   <div class="logo-accueil"> <a href="index.php"><img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/home-minimal.svg"></a> </div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-1', // Defined when registering the menu
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'depth'          => 2,
                    'menu_class'     => 'navbar-nav ml-auto mr-4 ml-4',
                    'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
                    'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
                ));
                ?>
                <span class="logo-wishlist">Wishlist<img src="http://wordpress-becode-group2.000webhostapp.com/wp-content/themes/composition/assets/svg/bullet-list.svg"></span>
            </div>
        </nav>

    </header>

    <!-- <?php wp_body_open(); ?> -->