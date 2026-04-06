<?php
get_header();

$title = get_the_title() ?? '';
$content = get_the_content() ?? '';
$image = get_the_post_thumbnail_url(get_the_ID(), 'large') ?? '';
$taxonomies = get_the_terms(get_the_ID(), 'project_technology');
$website_link = get_field('website_link');
$github_link = get_field('github_link');
$project_description = get_field('project_desc');
$gallery = get_field('gallery');
?>
<main class="mt-36 main-grid">
    <div class="col-start-1 md:col-end-6 col-span-full max-md:row-start-2 flex flex-col gap-8">
        <h1 class="font-funnel-display mb-0">
            <?= $title; ?>
        </h1>
        <p class="text-justify">
            <?= $content; ?>
        </p>
        <?php if ($taxonomies): ?>
            <ul class="flex flex-wrap gap-2">
                <?php foreach ($taxonomies as $taxonomy): ?>
                    <?php $icon = get_field('icone', $taxonomy); ?>
                    <li class="bg-primary px-2 py-1 rounded-full text-sm mr-2 mb-2 flex w-fit items-center gap-2">
                        <img src="<?= $icon[1]['url'] ?>" alt="" class="h-4">
                        <p class="text-bg">
                            <?= $taxonomy->name ?>
                        </p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div class="flex">
            <?php if ($website_link): ?>
                <a href="<?= $website_link['url'] ?>" target="_blank" class="main-button mr-4">Voir le site</a>
            <?php endif; ?>
            <?php if ($github_link): ?>
                <a href="<?= $github_link['url'] ?>" target="_blank" class="secondary-button group flex gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" fill="none">
                        <path class="fill-secondary group-hover:fill-bg transition-all duration-300"
                            d="M8.1 19.014c0 .097-.112.175-.253.175-.161.015-.274-.063-.274-.175 0-.098.113-.176.254-.176.147-.015.274.063.274.176m-1.518-.22c-.034.098.064.21.21.24.127.048.273 0 .303-.098s-.064-.21-.21-.254c-.127-.034-.269.014-.303.112m2.158-.083c-.141.034-.239.127-.224.24.014.097.141.16.288.126.141-.034.239-.127.224-.225-.014-.092-.146-.156-.288-.141M11.953 0C5.181 0 0 5.142 0 11.914c0 5.415 3.408 10.049 8.276 11.68.625.112.845-.274.845-.591 0-.303-.015-1.973-.015-2.998 0 0-3.418.732-4.135-1.455 0 0-.557-1.421-1.358-1.787 0 0-1.118-.767.078-.752 0 0 1.216.097 1.885 1.26 1.07 1.884 2.862 1.342 3.56 1.02.112-.781.43-1.323.781-1.646-2.73-.302-5.483-.698-5.483-5.395 0-1.343.37-2.017 1.152-2.876-.127-.317-.542-1.626.127-3.315 1.02-.318 3.369 1.318 3.369 1.318a11.5 11.5 0 0 1 3.066-.415c1.04 0 2.09.142 3.067.415 0 0 2.349-1.64 3.369-1.318.669 1.694.254 2.998.127 3.315.781.864 1.26 1.538 1.26 2.876 0 4.712-2.876 5.088-5.606 5.395.45.386.83 1.119.83 2.266 0 1.646-.014 3.682-.014 4.082 0 .318.224.703.844.591 4.883-1.621 8.194-6.255 8.194-11.67C24.219 5.142 18.726 0 11.953 0M4.746 16.84c-.063.05-.049.162.034.255.078.078.19.112.254.049.064-.05.049-.162-.034-.254-.078-.079-.19-.113-.254-.05m-.527-.395c-.034.064.014.142.112.19.078.05.176.035.21-.033.034-.064-.015-.142-.112-.19-.098-.03-.176-.015-.21.033M5.8 18.184c-.078.063-.05.21.063.302.113.113.254.127.318.05.063-.064.034-.21-.064-.304-.107-.112-.254-.127-.317-.048m-.557-.718c-.078.049-.078.176 0 .288s.21.161.274.112c.078-.063.078-.19 0-.302-.069-.113-.196-.162-.274-.098" />
                    </svg>
                    Voir le GitHub
                </a>
            <?php endif; ?>
        </div>
    </div>
    <div class=" md:col-start-7 col-start-1 col-span-full">
        <?php if ($image): ?>
            <img src="<?= $image ?>" alt="<?= $title ?>" class="rounded-lg w-full h-full object-cover">
        <?php endif; ?>
    </div>
    <section class="sm:col-start-3 col-start-1 col-span-full sm:col-end-11" aria-labelledby="desc">
        <h2 id="desc" class="text-center mx-auto">Description du projet</h2>
        <div class="!text-justify">
            <?= $project_description ?>
        </div>
    </section>
    <section class="col-span-full" aria-labelledby="gallery">
        <h2 id="gallery" class="">Image du projet</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
            <?php if ($gallery): ?>
                <?php foreach ($gallery as $image): ?>
                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="rounded-lg w-full h-full object-cover">
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
    <a href="<?= get_post_type_archive_link('project') ?>" class="secondary-button mt-14 col-span-full mx-auto">Retour
        aux
        projets</a>
</main>
<?php
get_footer();

