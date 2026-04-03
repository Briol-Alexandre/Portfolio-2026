<?php
$content = get_field('me_content');
$link = get_field('me_link');
$img = get_field('me_image');
?>
<section aria-labelledby="me" class="main-grid">
    <div
        class="bg-transparent  border-secondary border-2 rounded-xl h-72 relative col-start-1 col-end-5 after:content-[''] after:absolute  after:rounded-xl after:bg-primary after:-top-2 after:-left-2 after:w-full after:h-full">
        <img class="absolute bottom-2 right-2 w-full h-auto z-10" src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>">
    </div>
    <div class="col-start-5 col-span-full flex flex-col justify-center gap-8">
        <h2 id="me" class="mb-0">Qui suis-je ?</h2>
        <p class="text-justify">
            <?= $content ?>
        </p>
        <a href="<?= $link['url'] ?>" title="Vers la page Qui suis-je"
            class="main-button w-fit"><?= $link['title'] ?></a>
    </div>
</section>