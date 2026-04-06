<?php
$query = new WP_Query([
    'post_type' => 'project',
    'posts_per_page' => -1,
]);
?>
<section aria-labelledby="projects" class="mt-0">
    <h2 id="projects">Mes Projets</h2>
    <div class="grid grid-project-cards grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
        <?php
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $title = get_the_title();
                $excerpt = get_the_excerpt();
                $permalink = get_permalink();
                $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
                $taxonomies = get_the_terms(get_the_ID(), 'project_technology');
                ?>
                <article class="rounded group cursor-pointer project-card last:col-span-full last:max-w-sm last:mx-auto">
                    <img src="<?= $thumbnail ?>" alt="<?= $title ?>"
                        class="absolute w-full h-full -z-20 object-cover rounded-lg overflow-hidden">
                    <a href="<?= $permalink ?>" class="absolute inset-0 z-10"></a>
                    <div class="absolute inset-0 bg-gradient-to-t from-primary to-transparent -z-10 rounded-lg"></div>
                    <div class="p-4 flex flex-col h-full justify-end">
                        <h3 class="mt-52 text-2xl font-bold text-white font-funnel-display mb-4">
                            <?= $title ?>
                        </h3>
                        <?php if ($taxonomies): ?>
                            <ul class="flex flex-wrap">
                                <?php foreach (array_slice($taxonomies, 0, 3) as $taxonomy): ?>
                                    <?php $icon = get_field('icone', $taxonomy); ?>
                                    <li class="bg-bg px-2 py-1 rounded-full text-sm mr-2 mb-2 flex w-fit items-center gap-2">
                                        <img src="<?= $icon[0]['url'] ?>" alt="" class="h-4">
                                        <p class="text-primary">
                                            <?= $taxonomy->name ?>
                                        </p>
                                    </li>
                                <?php endforeach; ?>
                                <?php if (count($taxonomies) > 3): ?>
                                    <li class="bg-bg px-2 py-1 rounded-full text-sm mr-2 mb-2 flex w-fit items-center">
                                        <p class="text-primary">…</p>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        <?php endif; ?>
                        <p class="text-white line-clamp-4">
                            <?= $excerpt ?>
                        </p>
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