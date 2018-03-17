<?php
/**
 * Created by PhpStorm.
 * User: alili
 * Date: 09/03/2018
 * Time: 11:33
 */

// -- Ajout des fichiers Css
function sparkling_child_enqueue_styles(){
	wp_enqueue_style('sparkling', get_template_directory_uri().'/style.css');
	wp_enqueue_style('sparklingchild', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'sparkling_child_enqueue_styles' , 15);
