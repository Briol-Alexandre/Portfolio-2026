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
    <div id="cursor" class="cursor"></div>
    <canvas id="bg-dots"></canvas>
    <?php wp_body_open(); ?>
    <header class=" main-grid items-center fixed top-0 left-0 w-full bg-bg z-50 py-2 xl:px-[100px] px-[50px]">
        <a href="<?= home_url(); ?>" title="Vers la page d'acceuil" class="col-span-1 w-10">
            <img src="<?= get_template_directory_uri() . "/src/img/logo.svg" ?>" alt="Logo">
        </a>
        <nav class="nav col-start-3 col-end-11 lg:col-start-4 lg:col-end-10">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'w-full',
            ));
            ?>
        </nav>
        <?php get_template_part('template-parts/socials/socials'); ?>
        <div class="fixed top-2 left-2 z-[9999] px-2 py-1 text-white text-sm font-bold rounded bg-black/70">
            <span class="block sm:hidden">XS ( < 640px )</span>
                    <span class="hidden sm:block md:hidden">SM ( ≥ 640px )</span>
                    <span class="hidden md:block lg:hidden">MD ( ≥ 768px )</span>
                    <span class="hidden lg:block xl:hidden">LG ( ≥ 1024px )</span>
                    <span class="hidden xl:block 2xl:hidden">XL ( ≥ 1280px )</span>
                    <span class="hidden 2xl:block">2XL ( ≥ 1536px )</span>
        </div>
    </header>