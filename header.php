<?php
/**
 * The header for our theme
 *
 * @package Tailwind_Blank
 */

?><!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-bg font-funnel text-primary'); ?>>
    <?php wp_body_open(); ?>
    <header class=" main-grid items-center fixed top-0 left-0 w-full bg-bg z-50 py-2 px-[100px]">
        <a href="<?= home_url(); ?>" title="Vers la page d'acceuil" class="col-span-1 w-10">
            <img src="<?= get_template_directory_uri() . "/src/img/logo.svg" ?>" alt="Logo">
        </a>
        <nav class="col-start-4 col-end-10 nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'w-full',
            ));
            ?>
        </nav>
        <?php get_template_part('template-parts/socials/socials'); ?>
    </header>