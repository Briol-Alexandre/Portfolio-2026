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
    register_post_type('formations', [
        'labels' => [
            'name' => 'Formations',
            'singular_name' => 'Formation',
            'add_new_item' => 'Ajouter une formation',
            'edit_item' => 'Modifier la formation',
        ],
        'public' => true,
        'show_in_rest' => true,
        'show_in_nav_menus' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => ['title', 'editor'],
        'rewrite' => ['slug' => 'formations'],
    ]);
    register_post_type('experiences', [
        'labels' => [
            'name' => 'Expériences',
            'singular_name' => 'Expérience',
            'add_new_item' => 'Ajouter une expérience',
            'edit_item' => 'Modifier l\'expérience',
        ],
        'public' => true,
        'show_in_rest' => true,
        'show_in_nav_menus' => true,
        'menu_icon' => 'dashicons-businessman',
        'supports' => ['title', 'editor'],
        'rewrite' => ['slug' => 'experiences'],
    ]);
    register_post_type('skills', [
        'labels' => [
            'name' => 'Compétences',
            'singular_name' => 'Compétence',
            'add_new_item' => 'Ajouter une compétence',
            'edit_item' => 'Modifier la compétence',
        ],
        'public' => true,
        'show_in_rest' => true,
        'show_in_nav_menus' => true,
        'menu_icon' => 'dashicons-awards',
        'supports' => ['title'],
        'rewrite' => ['slug' => 'skills'],
    ]);
}
add_action('init', 'register_my_cpt');