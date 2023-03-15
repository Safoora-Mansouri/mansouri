<?php
//--------------------Enfiler la feuille de style-------------------//
function ajouter_styles()
{
	wp_enqueue_style(
		'31w-style-principal', // id de la feuille de style
		get_template_directory_uri() . '/style.css', // adresse url de la feuille de style
		array(), // les dépendances avec les autres feuilles de style
		filemtime(get_template_directory() . '/style.css')
	); // la de la dernière feuille de style
}
/*------------enregistrement des menue---------------------*/

function enregistrement_des_menus()
{
	register_nav_menus(array(
		'menu_entete' => 'Menu entete',
		'menu_footer'  => 'Menue pied de page',
	));
}




add_action('wp_enqueue_scripts', 'ajouter_styles');
add_theme_support('html5', array('search-form',
                                 'gallery', 
								 'caption'
							));

add_theme_support('title-tag');

add_theme_support('custom-logo', 
					array(
						'height' => 480,
						'width'  => 720,
					));

add_action('after_setup_theme', 'enregistrement_des_menus', 0);


/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal( $query ) {
	if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
	  $query->set( 'category_name', 'note-wp' );
	  $query->set( 'orderby', 'title' );
	  $query->set( 'order', 'ASC' );
	  }
	 }
	 add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );


/**
 * permet de modifier les titre du menu "cours"
 * @param $title : titre du choix menu
 * @param $item : le choix global
 * @param $args : Object qui represente la structure de menu
 */

	 function perso_menu_item_title($title, $item, $args) {
		// Remplacer 'nom_de_votre_menu' par l'identifiant de votre menu
		if($args->menu == 'cours') {
	// Modifier la longueur du titre en fonction de vos besoins
	$sigle = substr($title, 4,3);
	$title = substr($title,7);
	$title = "<div class='cours__sigle'>" . $sigle . "</div>". "<p class='cours__titre'>" . wp_trim_words($title, 2, ' ... ') . "</p>";
	}
	return  $title ; 
	}
	add_filter('nav_menu_item_title', 'perso_menu_item_title', 10, 3);