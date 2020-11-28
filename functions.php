<?php
/****************************************
 *  (')_(') ChaosProject=> cp_ (')_(')  *
 *  (='.'=)       Action       (='.'=)  *
 *  (")__(")                  (")__(")  *
 ****************************************/

/**
 * Ajout de fonctionnalité
 */
	function cp_add_supports_theme(){
		add_theme_support('title-tag');
		add_theme_support('menus');
		add_theme_support('post-thumbnails');
		add_theme_support('custom-logo',
			array(
				'height' => 200,
				'width' =>200,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);
	}

/**
 * Style & Script
 */
	function cp_register_style_scripts(){

		//CSS MDB charger
		wp_register_style('mdb', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css', [
			"fontAwesome", "googleFonts","bootstrap"
		]);
		wp_register_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css');
		wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');
		wp_register_style('fontAwesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css');


		//décharger le jquery de wordpress
		wp_deregister_script('jquery');

		//JQ MDB charger
		wp_register_script('mdb-core','https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js', [
			"jquery", "popper", "bootstrap-core"
		], false, true);
		wp_register_script('jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', [], false, true);
		wp_register_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js', [], false, true);
		wp_register_script('bootstrap-core','https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js', [], false, true);

		//CSS & JS MDB En attente de wp_enqueue_scripts
		wp_enqueue_style('mdb');
		wp_enqueue_script('mdb-core');

	}

/****************************************
 *  (')_(')                    (')_(')  *
 *  (='.'=)      Filtres       (='.'=)  *
 *  (")__(")                  (")__(")  *
 ****************************************/
/**
 * séparateur changement de la valeur d'origine
 */
	function cp_title_separator(){
		return "|";
	}

/****************************************
 *  (')_(')                    (')_(')  *
 *  (='.'=)       Hooks        (='.'=)  *
 *  (")__(")                  (")__(")  *
 ****************************************/

add_action('after_setup_theme', 'cp_add_supports_theme');
add_action('wp_enqueue_scripts', 'cp_register_style_scripts');
add_filter('document_title_separator', 'cp_title_separator');