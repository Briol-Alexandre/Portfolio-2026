<?php
$projects = new WP_Query(array(
    'post_type' => 'project',
    'posts_per_page' => -1,
));
get_header();
?>
<main class="mt-36">
    <h1 class="font-funnel-display text-center">Mes projets</h1>
    <div class="grid grid-project-cards grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
        <?php
        if ($projects->have_posts()) {
            while ($projects->have_posts()) {
                $projects->the_post();
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
                                        <p class="text-primary">
                                            <?= $taxonomy->name ?>
                                        </p>
                                    </li>
                                <?php endforeach; ?>
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
    </div>
</main>

<?php
get_footer();