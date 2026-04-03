<?php
/**
 * The template for displaying the footer
 *
 * @package Tailwind_Blank
 */

?>
</div><!-- #content -->

<footer id="colophon" class="site-footer bg-primary text-white  mt-36">
    <div class="container mx-auto text-center py-14">
        <img src="<?= get_template_directory_uri() ?>/src/img/footer-logo.svg" alt="Logo" class="mx-auto mb-4">
        <div class="flex flex-col gap-4">
            <nav class="nav" aria-labelledby="footer-nav">
                <h2 class="sr-only">Navigation footer</h2>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'w-full flex flex-col md:flex-row !justify-center gap-6 !py-0',
                ));
                ?>
            </nav>
            <div>
                <?php get_template_part('template-parts/socials/socials', '', ['light' => true, 'ul_classes' => 'flex gap-3 justify-center']); ?>
            </div>
        </div>
    </div>
    <div class="bg-footer py-4">
        <div class="flex justify-between items-center w-full px-6">
            <div class="w-1/3"></div>
            <div class="flex gap-4 w-1/3 justify-center">
                <a href="">Mentions légales</a>
                <a href="">RGPD</a>
            </div>
            <p class="w-1/3 text-right">&copy;
                <?= date('Y'); ?> Alexandre Briol. Tous droits réservés.
            </p>
        </div>
    </div>

</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>