<?php
function register_my_menus()
{ // Registrace menu
    register_nav_menus(array(
        'hlavni-menu' => __('Hlavní menu'), // Název menu, který se zobrazuje v administraci WordPressu 
    ));
}
add_action('after_setup_theme', 'register_my_menus'); // Registrace menu po inicializaci tématu 

function moje_styly()
{
    // hlavní stylesheet (už ho tam máš přes get_stylesheet_uri(), ale můžeš přidat další)
    wp_enqueue_style('hlavni-styl', get_stylesheet_uri());

    // přidání vlastního souboru Style-header.css (v kořeni šablony)
    wp_enqueue_style('style-header', get_template_directory_uri() . '/Style-header.css');
}
add_action('wp_enqueue_scripts', 'moje_styly');
