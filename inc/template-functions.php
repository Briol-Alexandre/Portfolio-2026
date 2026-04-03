<?php
/**
 * Template functions
 *
 * @package Tailwind_Blank
 */

/**
 * Add custom classes to the body tag.
 */
function tailwind_blank_body_classes( $classes ) {
    if ( is_singular() ) {
        $classes[] = 'single';
    }

    if ( is_home() || is_front_page() ) {
        $classes[] = 'blog';
    }

    return $classes;
}
add_filter( 'body_class', 'tailwind_blank_body_classes' );
