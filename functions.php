<?php
/**
 * Tailwind Blank Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}


include get_template_directory() . '/helpers/cpt.php';
/**
 * Set up theme defaults and register support for various WordPress features.
 */
function tailwind_blank_setup()
{
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for featured images.
    add_theme_support('post-thumbnails');

    // Register navigation menus.
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'tailwind-blank'),
    ));

    // Add custom logo support.
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 300,
        'flex-height' => true,
        'flex-width' => true,
    ));

    // Add support for block styles.
    add_theme_support('wp-block-styles');

    // Add support for full and wide align images.
    add_theme_support('align-wide');

    // Add support for editor styles.
    add_theme_support('editor-styles');
    add_editor_style('style-editor.css');
}
add_action('after_setup_theme', 'tailwind_blank_setup');

/**
 * Enqueue scripts and styles.
 */
function tailwind_blank_scripts()
{
    // Enqueue compiled Tailwind styles
    wp_enqueue_style(
        'tailwind-blank-style',
        get_template_directory_uri() . '/dist/style.css',
        array(),
        filemtime(get_template_directory() . '/dist/style.css')
    );

    // Enqueue main theme styles
    wp_enqueue_style(
        'tailwind-blank-main',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'tailwind_blank_scripts');

/**
 * Register widget area.
 */
function tailwind_blank_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Primary Sidebar', 'tailwind-blank'),
        'id' => 'primary-sidebar',
        'description' => esc_html__('Primary sidebar widget area', 'tailwind-blank'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'tailwind_blank_widgets_init');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Template functions.
 */
require get_template_directory() . '/inc/template-functions.php';

add_filter('show_admin_bar', '__return_false');


function register_project_taxonomy()
{
    register_taxonomy('project_technology', ['project'], [
        'labels' => [
            'name' => 'Technologies',
            'singular_name' => 'Technologie',
            'search_items' => 'Rechercher des technologies',
            'all_items' => 'Toutes les technologies',
            'edit_item' => 'Modifier la technologie',
            'update_item' => 'Mettre à jour la technologie',
            'add_new_item' => 'Ajouter une technologie',
            'new_item_name' => 'Nouvelle technologie',
            'menu_name' => 'Technologies',
        ],
        'public' => true,
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'technologies'],
    ]);
}
add_action('init', 'register_project_taxonomy');

function dd($args)
{
    var_dump($args);
    die();
}