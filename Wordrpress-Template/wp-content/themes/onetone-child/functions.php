<?php
// Ajout des fichiers CSS



function onetone_child_enqueue_styles() {
    wp_enqueue_style('onetone-child', get_stylesheet_uri());
    wp_enqueue_style('onetone',
        get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 
    'onetone_child_enqueue_styles', 15);