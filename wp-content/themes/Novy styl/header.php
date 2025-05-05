<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?><?php wp_title('|', true, 'left'); ?></title>
    <?php wp_head(); ?>
</head>

<header>
    <nav>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'hlavni-menu', // název menu, které jsme registrovali ve functions.php
            'container' => false, // zrušíme obalující div
            'menu_class' => 'hlavni-menu', // přidej si vlastní třídu pro styling
        ));
        ?>
    </nav>
</header>


<body <?php body_class(); ?>>

