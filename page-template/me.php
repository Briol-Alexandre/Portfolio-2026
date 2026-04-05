<?php
/* Template Name: Qui suis-je ? */
get_header();
$image = get_field('image') ?? get_template_directory_uri() . '/src/img/default.jpg';
$github_link = get_field('github', 'option');

$formations = new WP_Query([
    'post_type' => 'formations',
    'posts_per_page' => -1,
    'order' => 'DESC',
]);
$experiences = new WP_Query([
    'post_type' => 'experiences',
    'posts_per_page' => -1,
    'order' => 'DESC',
]);
$skills = new WP_Query([
    'post_type' => 'skills',
    'posts_per_page' => -1,
    'order' => 'asc',
]);
?>
<main class="mt-36">
    <h1 class="font-funnel-display text-center">Qui suis-je ?</h1>
    <section aria-labelledby="alexandre-briol" class="main-grid items-center">
        <div class="col-start-1 col-end-7 flex flex-col gap-8">
            <h2 id="alexandre-briol" class="font-funnel-display mb-0">Je suis <span
                    class="font-boska italic inline text-secondary">Alexandre Briol</span></h2>
            <p class="text-justify">Je suis un développeur web passionné, spécialisé dans la création de sites web
                modernes et fonctionnels. Avec une solide expérience en HTML, CSS, JavaScript et PHP, je m'efforce de
                créer
                des expériences utilisateur exceptionnelles. Mon objectif est de transformer les idées en réalité
                numérique,
                en utilisant les dernières technologies pour offrir des solutions innovantes et efficaces.</p>
            <a href="<?= $github_link ?>" target="_blank" rel="noopener noreferrer"
                class="main-button w-fit group flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24">
                    <path class="fill-bg group-hover:fill-primary transition-all duration-300"
                        d="M8.1 19.014c0 .097-.112.175-.253.175-.161.015-.274-.063-.274-.175 0-.098.113-.176.254-.176.147-.015.274.063.274.176m-1.518-.22c-.034.098.064.21.21.24.127.048.273 0 .303-.098s-.064-.21-.21-.254c-.127-.034-.269.014-.303.112m2.158-.083c-.141.034-.239.127-.224.24.014.097.141.16.288.126.141-.034.239-.127.224-.225-.014-.092-.146-.156-.288-.141M11.953 0C5.181 0 0 5.142 0 11.914c0 5.415 3.408 10.049 8.276 11.68.625.112.845-.274.845-.591 0-.303-.015-1.973-.015-2.998 0 0-3.418.732-4.135-1.455 0 0-.557-1.421-1.358-1.787 0 0-1.118-.767.078-.752 0 0 1.216.097 1.885 1.26 1.07 1.884 2.862 1.342 3.56 1.02.112-.781.43-1.323.781-1.646-2.73-.302-5.483-.698-5.483-5.395 0-1.343.37-2.017 1.152-2.876-.127-.317-.542-1.626.127-3.315 1.02-.318 3.369 1.318 3.369 1.318a11.5 11.5 0 0 1 3.066-.415c1.04 0 2.09.142 3.067.415 0 0 2.349-1.64 3.369-1.318.669 1.694.254 2.998.127 3.315.781.864 1.26 1.538 1.26 2.876 0 4.712-2.876 5.088-5.606 5.395.45.386.83 1.119.83 2.266 0 1.646-.014 3.682-.014 4.082 0 .318.224.703.844.591 4.883-1.621 8.194-6.255 8.194-11.67C24.219 5.142 18.726 0 11.953 0M4.746 16.84c-.063.05-.049.162.034.255.078.078.19.112.254.049.064-.05.049-.162-.034-.254-.078-.079-.19-.113-.254-.05m-.527-.395c-.034.064.014.142.112.19.078.05.176.035.21-.033.034-.064-.015-.142-.112-.19-.098-.03-.176-.015-.21.033M5.8 18.184c-.078.063-.05.21.063.302.113.113.254.127.318.05.063-.064.034-.21-.064-.304-.107-.112-.254-.127-.317-.048m-.557-.718c-.078.049-.078.176 0 .288s.21.161.274.112c.078-.063.078-.19 0-.302-.069-.113-.196-.162-.274-.098" />
                </svg>
                Voir mon GitHub
            </a>
        </div>
        <img src="<?php echo $image; ?>" alt="Alexandre Briol" class="col-start-7 col-span-full">
    </section>
    <section aria-labelledby="parcours">
        <h2 id="parcours" class="font-funnel-display text-4xl text-primary">
            Mon parcours scolaire
        </h2>
        <ul class="flex flex-col">
            <?php
            if ($formations->have_posts()):
                while ($formations->have_posts()):
                    $formations->the_post();
                    $date = get_field('date');
                    $description = get_post_field('post_content', get_the_ID());
                    ?>
                    <li class="px-10 border-b-2 border-b-primary/20 py-4 last:border-b-0">
                        <div class="flex gap-2 items-center">
                            <p class="font-funnel-display text-2xl">
                                <?= get_the_title(); ?>
                            </p>
                            <p class="text-primary/40 italic">
                                <?= $date; ?>
                            </p>
                        </div>
                        <p>
                            <?= $description; ?>
                        </p>
                    </li>
                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                echo '<p class="text-center text-primary/40">Aucun parcours trouvé.</p>';
            endif;
            ?>
        </ul>
    </section>
    <section aria-labelledby="parcours">
        <h2 id="parcours" class="font-funnel-display text-4xl text-primary">
            Mon parcours professionnel
        </h2>
        <ul class="flex flex-col">
            <?php
            if ($experiences->have_posts()):
                while ($experiences->have_posts()):
                    $experiences->the_post();
                    $date = get_field('date');
                    $description = get_post_field('post_content', get_the_ID());
                    ?>
                    <li class="px-10 border-b-2 border-b-primary/20 py-4 last:border-b-0">
                        <div class="flex gap-2 items-center">
                            <p class="font-funnel-display text-2xl">
                                <?= get_the_title(); ?>
                            </p>
                            <p class="text-primary/40 italic">
                                <?= $date; ?>
                            </p>
                        </div>
                        <p>
                            <?= $description; ?>
                        </p>
                    </li>
                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                echo '<p class="text-center text-primary/40">Aucun parcours trouvé.</p>';
            endif;
            ?>
        </ul>
    </section>
    <section aria-labelledby="skills">
        <h2 id="skills" class="font-funnel-display text-4xl text-primary">
            Mes compétences
        </h2>
        <ul>
            <?php
            if ($skills->have_posts()):
                while ($skills->have_posts()):
                    $skills->the_post();
                    $range = get_field('test');
                    ?>
                    <li class="px-10 border-b-2 border-b-primary/20 py-4 last:border-b-0">
                        <p class="font-funnel-display text-2xl font-bold">
                            <?= get_the_title(); ?>
                        </p>
                        <div class="w-full bg-primary rounded-full h-1 mt-1 relative">
                            <div class="bg-secondary h-1 rounded-l-full relative" style="width: <?= $range ?>%">
                                <div class="absolute -right-2 top-1/2 -translate-y-1/2 w-3 h-3 bg-secondary rotate-45"></div>
                            </div>
                        </div>
                    </li>
                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                echo '<p class="text-center text-primary/40">Aucune compétence trouvée.</p>';
            endif;
            ?>
        </ul>
    </section>
    <section aria-labelledby="interested" class="flex flex-col justify-center items-center gap-8">
        <h2 id="interested" class="font-funnel-display text-4xl text-primary text-center">
            <span class="block">Mon profil vous intéresse ?</span> Contactez-moi !
        </h2>
        <a href="<?= get_field('lien_de_contact') ?>" class="main-button">Contactez-moi</a>
    </section>
</main>

<?php
get_footer();