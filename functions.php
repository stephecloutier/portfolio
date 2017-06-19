<?php

// Utiliser ce fichier pour inclure d'autres fonctions

// https://codex.wordpress.org/Plugin_API/Filter_Reference


add_action('init', 'mf_register_types');


/*
* Register custom post types during initialization
*/

function mf_register_types() {
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
