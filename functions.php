<?php

// Utiliser ce fichier pour inclure d'autres fonctions

// https://codex.wordpress.org/Plugin_API/Filter_Reference


add_action('init', 'sp_register_types');
add_filter('wp_title', 'custom_wp_title');
register_nav_menu('main', 'La navigation principale du site.');


/*
* Register custom post types during initialization
*/

function sp_register_types() {
    register_post_type('project', [
        'label' => 'Projets',
        'labels' => [
            'singular_name' => 'projet',
            'add_new_item' => 'Ajouter un nouveau projet'
        ],
        'description' => 'Permet d’administrer les proejts affichés sur le portfolio',
        'public' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-portfolio'
    ]);
}

/*
 * Get navigation links (objects) for given location
*/
function sp_get_nav_items($location) {
    $id = sp_get_nav_id($location);
    $nav = [];
    $children = [];
    if(!$id) {
        return $nav;
    }

    foreach(wp_get_nav_menu_items($id) as $object) {
        $item = new stdClass();
        $item->url = $object->url;
        $item->label = $object->title;
        $item->parent = intval($object->menu_item_parent);
        $item->children = [];

        if($item->parent){
            $children[] = $item;
        } else {
            $nav[$object->ID] = $item;
        }
    }
    foreach($children as $item) {
        $nav[$item->parent]->children[] = $item;
    }
    return $nav;
}


/*
* Get navigation id from given location
*/
function sp_get_nav_id($location) {
    foreach(get_nav_menu_locations() as $navLocation => $id) {
        if($navLocation == $location) {
            return $id;
        }
    }
    return false;
}




/*
    Hooks into wp_title() content formatting
    @check add_filter('wp_title')
*/

function custom_wp_title($title) {
    if(empty($title)) {
        $title = 'Accueil';
    }
    $title .= ' | ' . get_bloginfo('name');
    return trim($title);
}
