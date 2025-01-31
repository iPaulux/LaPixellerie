<?php
//Cache les versions des plugins dans code source
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

 

//Cache la version de wordpress dans code source
remove_action('wp_head', 'wp_generator');


//Dégage Gutemberg
add_filter('use_block_editor_for_post', '__return_false', 10);

//Ajoute l'image à la une
add_theme_support('post-thumbnails');




/*
* On utilise une fonction pour créer notre custom post type 'Event'
*/

function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Event', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Event', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Event'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les Event'),
		'view_item'           => __( 'Voir les Event'),
		'add_new_item'        => __( 'Ajouter une nouvelle Event'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la Event'),
		'update_item'         => __( 'Modifier la Event'),
		'search_items'        => __( 'Rechercher une Event'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Event'),
		'description'         => __( 'Tous sur Event'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'event'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'event', $args );

     // register taxonomy
     register_taxonomy('event_category', 'event', array('hierarchical' => true, 'label' => 'Categorie', 'query_var' => true, 'rewrite' => array( 'slug' => 'event-category' )));

 

     register_taxonomy('event_tag', 'event', array('hierarchical' => true, 'label' => 'Etiquette', 'query_var' => true, 'rewrite' => array( 'slug' => 'event-tag' )));
 

}

add_action( 'init', 'wpm_custom_post_type', 0 );

add_action('wp_ajax_ajax','router');
add_action('wp_ajax_nopriv_ajax','router');


function _get_category($id,$col = "name", $type="category"){
    return wp_get_post_terms($id, 'event_'.$type)[0]->$col;
}

function load_more_posts($lastID){
	echo json_encode(['id' => $lastID]);
	wp_die();
}

function router(){
	switch ($_POST['sub_action']) {
		case 'load_posts':
			load_more_posts($POST['lastID']);
			break;
		
		default:
			# code...
			break;
	}
}