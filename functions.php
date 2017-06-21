<?php

// Utiliser ce fichier pour inclure d'autres fonctions

// https://codex.wordpress.org/Plugin_API/Filter_Reference


add_action('init', 'sp_register_types');
add_filter('wp_title', 'custom_wp_title');
register_nav_menu('main', 'La navigation principale du site.');


// form

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    return $content;
});


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
    register_taxonomy('project-type', 'project', [
        'label' => 'Types de projet',
        'labels' => [
            'singular_name' => 'Type',
            'edit_item' => 'Éditer le type',
            'add_new_item' => 'Ajouter un nouveau type de projet'
        ],
        'description' => 'Permet de préciser un type de projet pour le projet donné',
        'public' => true,
        'hierarchical' => true
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


/*
 * Get page ID from template name
*/
function sp_get_page_id_from_template($templateName) {
    $pages = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => 'template-parts/' . $templateName,
        'hierarchical' => 0
    ));

    foreach($pages as $page){
        return $page->ID;
    }
}

/*
 * Get page url from ID
*/
function sp_get_page_url($templateName) {
    return get_page_link(sp_get_page_id_from_template($templateName));
}
