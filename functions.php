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
/*
* On utilise une fonction pour créer nos custom post types 'Event' et 'Workshop'
*/
function wpm_custom_post_types() {

    // Définition des Custom Post Types
    $post_types = array(
        'event' => array(
            'name'          => 'Event',
            'slug'          => 'event',
            'taxonomy_cat'  => 'event_category',
            'taxonomy_tag'  => 'event_tag'
        ),
        'projet' => array(
            'name'          => 'Projet',
            'slug'          => 'Projet',
            'taxonomy_cat'  => 'Projet_category',
            'taxonomy_tag'  => 'Projet_tag'
        )
    );

    foreach ($post_types as $key => $post_type) {
        // Labels pour l'administration
        $labels = array(
            'name'               => _x( $post_type['name'], 'Post Type General Name'),
            'singular_name'      => _x( $post_type['name'], 'Post Type Singular Name'),
            'menu_name'          => __( $post_type['name']),
            'all_items'          => __( 'Toutes les '.$post_type['name']),
            'view_item'          => __( 'Voir les '.$post_type['name']),
            'add_new_item'       => __( 'Ajouter une nouvelle '.$post_type['name']),
            'add_new'            => __( 'Ajouter'),
            'edit_item'          => __( 'Éditer la '.$post_type['name']),
            'update_item'        => __( 'Modifier la '.$post_type['name']),
            'search_items'       => __( 'Rechercher une '.$post_type['name']),
            'not_found'          => __( 'Non trouvée'),
            'not_found_in_trash' => __( 'Non trouvée dans la corbeille'),
        );

        // Arguments du Custom Post Type
        $args = array(
            'label'               => __( $post_type['name']),
            'description'         => __( 'Tous sur '.$post_type['name']),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
            'show_in_rest'        => true,
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'             => array( 'slug' => $post_type['slug']),
        );

        // Enregistrement du Custom Post Type
        register_post_type( $key, $args );

        // Enregistrement des taxonomies
        register_taxonomy(
            $post_type['taxonomy_cat'],
            $key,
            array(
                'hierarchical' => true,
                'label'        => 'Catégorie',
                'query_var'    => true,
                'rewrite'      => array( 'slug' => $post_type['taxonomy_cat'] )
            )
        );

        register_taxonomy(
            $post_type['taxonomy_tag'],
            $key,
            array(
                'hierarchical' => false,
                'label'        => 'Étiquette',
                'query_var'    => true,
                'rewrite'      => array( 'slug' => $post_type['taxonomy_tag'] )
            )
        );
    }
}

add_action( 'init', 'wpm_custom_post_types', 0 );
