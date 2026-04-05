<?php
get_header();
?>

<main id="primary" class="xl:mx-[100px] mx-[50px]">
    <?php get_template_part('template-parts/homepage/hero'); ?>
    <?php get_template_part('template-parts/homepage/projects'); ?>
    <?php get_template_part('template-parts/homepage/me'); ?>
    <?php get_template_part('template-parts/homepage/contact'); ?>

</main>

<?php
get_footer();
