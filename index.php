<?php

$query = new WP_Query([
    'post_type' => 'project',
    'posts_per_page' => -1,
]);

get_header();

?>

<main id="primary" class="site-main container mx-auto">
    <div class="flex flex-col items-center gap-16 h-screen justify-center relative">
        <h1 class="text-center font-funnel-display text-4xl md:text-6xl font-bold my-1">
            Je suis Alexandre Briol
            <span class="font-boska italic block text-secondary pt-4">Web Developper</span>
        </h1>
        <div class="flex gap-5">
            <div class="btn-wrapper">
                <a href="" class="main-button">Mes projets</a>
            </div>
            <div class="btn-wrapper">
                <a href="" class="secondary-button">Me contacter</a>
            </div>
        </div>
        <div class="animated-cts absolute bottom-32 left-0 w-full -h-20 pointer-events-none">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <section aria-labelledby="projects" class="mt-0">
        <h2 id="projects">Mes Projets</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
            <?php
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $title = get_the_title();
                    $excerpt = get_the_excerpt();
                    $permalink = get_permalink();
                    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                    $taxonomies = get_the_terms(get_the_ID(), 'project_technology');
                    ?>
                    <article class="rounded group cursor-pointer project-card">
                        <img src="<?= $thumbnail ?>" alt="<?= $title ?>"
                            class="absolute w-full h-full -z-20 object-cover rounded-lg overflow-hidden">
                        <a href="<?= $permalink ?>" class="absolute inset-0 z-10"></a>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary to-transparent -z-10 rounded-lg"></div>
                        <div class="p-4 flex flex-col h-full justify-end">
                            <h3 class="mt-52 text-2xl font-bold text-white font-funnel-display mb-4">
                                <?= $title ?>
                            </h3>
                            <?php if ($taxonomies): ?>
                                <ul class="flex">
                                    <?php foreach ($taxonomies as $taxonomy): ?>
                                        <?php $icon = get_field('icone', $taxonomy); ?>
                                        <li class="bg-bg px-2 py-1 rounded-full text-sm mr-2 mb-2 flex w-fit items-center gap-2">
                                            <img src="<?= $icon['url'] ?>" alt="" class="h-4">
                                            <p class="text-primary"><?= $taxonomy->name ?></p>

                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            <p class="text-white line-clamp-4"><?= $excerpt ?></p>
                        </div>
                    </article>

                    <?php
                }
                wp_reset_postdata();
            } else {
                echo '<p>Aucun projet trouvé.</p>';
            }
            ?>
            <a href="<?= get_post_type_archive_link('project') ?>" class="main-button w-fit col-span-full mx-auto">Voir
                tous les projets</a>
        </div>

    </section>
</main>

<?php
get_footer();
