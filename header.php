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
    <script src="<?= get_template_directory_uri() . "/src/js/bg.js" ?>" defer></script>
    <script src="<?= get_template_directory_uri() . "/src/js/cursor.js" ?>" defer></script>
    <script src="<?= get_template_directory_uri() . "/src/js/nav.js" ?>" defer></script>
    <?php wp_head(); ?>
    <style>
        @font-face {
            font-family: 'Boska';
            src: url(<?= get_template_directory_uri() . "/src/fonts/Boska-VariableItalic.woff2" ?>) format('woff2'),
                url(<?= get_template_directory_uri() . "/src/fonts/Boska-VariableItalic.woff" ?>) format('woff'),
                url(<?= get_template_directory_uri() . "/src/fonts/Boska-VariableItalic.ttf" ?>) format('truetype');
        }
    </style>
</head>

<body <?php body_class('bg-bg font-funnel text-primary'); ?>>
    <div id="cursor" class="cursor max-md:hidden"></div>
    <canvas id="bg-dots"></canvas>
    <?php wp_body_open(); ?>
    <header class="main-grid items-center fixed top-0 left-0 w-full bg-bg z-50 py-5 md:py-2 xl:px-[100px] px-[50px]">
        <a href="<?= home_url(); ?>" title="Vers la page d'acceuil" class="col-span-1 w-10">
            <img src="<?= get_template_directory_uri() . "/src/img/logo.svg" ?>" alt="Logo">
        </a>

        <nav class="nav col-start-3 col-end-11 lg:col-start-4 lg:col-end-10 max-md:hidden">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'w-full',
            ));
            ?>
        </nav>

        <div class="mobile-menu" id="mobile-menu" aria-hidden="true">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => '',
            ));
            ?>
        </div>

        <?php get_template_part('template-parts/socials/socials', '', ['mobile' => true]); ?>

        <button class="burger md:hidden col-start-11" id="burger" aria-label="Ouvrir le menu" aria-expanded="false"
            aria-controls="mobile-menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </header>