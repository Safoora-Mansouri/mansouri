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


// profile.firstName
// profile->firstName

//console.log()
// user->login()