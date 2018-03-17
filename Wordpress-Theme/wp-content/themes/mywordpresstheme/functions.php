<?php
/*
 * Created by PhpStorm.
 * User: alili
 * Date: 08/03/2018
 * Time: 10:18
 */

	/*
	 * Pricipaux templates utilisatble
	 * 404.php      = template en ca s d'erreur 404
	 * category.php = template des categories
	 * page.php     = template des pages
	 * search.php   = template du resultat d'une recherche
	 * single.php   = template des articles
	 * tag.php      = template des étiquettes
	 * home.php     = template de la page d'acueil
	 * author.php   = template de la page des auteurs
	 * index.php    = template par defaut si aucun template ne correspond
	 *
	 */

	wp_enqueue_style('mywordpresstheme', get_stylesheet_uri()); // -- Ajout du CSS

	// -- Gestion de la balise title
	function mywordpresstheme_start_theme(){
		add_theme_support('title-tag');
	}

	// -- La fontion start_theme sera chargée apres le chargement du theme
	add_action('after_setup_theme', 'mywordpresstheme_start_theme');

	// -- Désactive la bar admin de wordpress
	 # add_filter('show_admin_bar','__return_false');

	// -- Ajout du menu principal
	function mywordpresstheme_add_main_menu(){
		register_nav_menu('main_menu', 'Menu pricipal');
	}

	add_action('init', 'mywordpresstheme_add_main_menu');

	// -- Ajout zone a widget
	function mywordpresstheme_add_widget_area(){
		register_sidebar([
			'id'           => 'main_sidebar',
			'name'         => 'Sidebar Principale',
			'description'  => 'Apparait a droite du contenu',
			'before_widget'=> '<aside>',
			'after_widget' => '</aside>',
			'before_title' => '<h1>',
			'after_title'  => '</h1>'
		]);
	}

	add_action('widgets_init', 'mywordpresstheme_add_widget_area');



