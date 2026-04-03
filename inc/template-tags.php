<?php
/**
 * Custom template tags for this theme
 *
 * @package Tailwind_Blank
 */

/**
 * Display the posted on and by author.
 */
function tailwind_blank_posted_on() {
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
    if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    }

    $time_string = sprintf(
        $time_string,
        esc_attr( get_the_date( 'c' ) ),
        esc_html( get_the_date() ),
        esc_attr( get_the_modified_date( 'c' ) ),
        esc_html( get_the_modified_date() )
    );

    printf(
        /* translators: %s: post date. */
        esc_html__( 'Posted on %s', 'tailwind-blank' ),
        '<span class="posted-on">' . $time_string . '</span>'
    );
}

/**
 * Display the post categories.
 */
function tailwind_blank_posted_in() {
    $categories = get_the_category();
    if ( ! empty( $categories ) ) {
        echo '<span class="cat-links">';
        echo esc_html__( 'In ', 'tailwind-blank' );
        echo wp_kses_post( implode( ', ', wp_list_pluck( $categories, 'name' ) ) );
        echo '</span>';
    }
}
