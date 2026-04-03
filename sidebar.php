<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Tailwind_Blank
 */

if ( ! is_active_sidebar( 'primary-sidebar' ) ) {
    return;
}
?>

<aside id="secondary" class="primary-sidebar w-full md:w-64 px-4 py-8">
    <?php dynamic_sidebar( 'primary-sidebar' ); ?>
</aside>
