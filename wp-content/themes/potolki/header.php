<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Potolki
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="/">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'potolki'); ?></a>

        <header id="masthead" class="site-header">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
            <div class="container_header_info">
                <a class="header_logo" href="<?php bloginfo('home') ?>"><?php bloginfo('name') ?></a>
                <a class="header_address header_info" href="#contacts"><?php echo esc_html(get_option('address_setting', '')) ?></a>
                <a class="header_workTime header_info" href="#contacts">
                    <span>пн-вс: 09:00-20:00</span>
                    <span>обед: 14:00-14:30</span>
                </a>
                <a class="header_numbers header_info" href="#contacts"><?php echo esc_html(get_option('phone_1_setting', '')) ?><br><?php echo esc_html(get_option('phone_2_setting', '')) ?></a>
            </div>

            <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'header_menu',
                        'container' => null,
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->

        <main id="primary" class="site-main">
            <div class="main_overlay"></div>