<?php
get_header();
?>

<main id="primary" class="site-main container mx-auto">
    <?php get_template_part('template-parts/homepage/hero'); ?>
    <?php get_template_part('template-parts/homepage/projects'); ?>
    <?php get_template_part('template-parts/homepage/me'); ?>
    <?php get_template_part('template-parts/homepage/contact'); ?>

</main>

<?php
get_footer();
