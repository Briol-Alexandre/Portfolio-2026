<?php
function register_my_cpt()
{
    register_post_type('project', [
        'labels' => [
            'name' => 'Projets',
            'singular_name' => 'Projet',
            'add_new_item' => 'Ajouter un projet',
            'edit_item' => 'Modifier le projet',
        ],
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'show_in_nav_menus' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'thumbnail', 'editor'],
        'rewrite' => ['slug' => 'projets'],
    ]);
}
add_action('init', 'register_my_cpt');