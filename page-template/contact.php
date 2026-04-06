<?php
/* Template Name: Contact */
get_header();
$phone = get_field('phone', 'option');
$email = get_field('email', 'option');
$content = get_field('contact_content');
?>
<main class="mt-36 main-grid">
    <div class="col-start-2 col-end-12">
        <h1 class="font-funnel-display text-center">Me contacter</h1>
        <p>
            <?= $content ?>
        </p>
        <div class="flex max-sm:flex-col gap-10 mt-5 justify-center">
            <div class="flex flex-col gap-2 font-semibold">
                <div class="flex items-center gap-2">
                    <span class="bg-primary p-2 rounded flex w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="none">
                            <path stroke="#eceff2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M24.203 18.407v3.5a2.333 2.333 0 0 1-2.543 2.333 23.1 23.1 0 0 1-10.069-3.582 22.75 22.75 0 0 1-7-7A23.1 23.1 0 0 1 1.01 3.543 2.333 2.333 0 0 1 3.331 1h3.5a2.33 2.33 0 0 1 2.333 2.007c.148 1.12.422 2.22.817 3.278a2.33 2.33 0 0 1-.525 2.462l-1.482 1.481c1.661 2.921 4.08 5.34 7 7l1.482-1.481a2.33 2.33 0 0 1 2.462-.525c1.058.395 2.158.669 3.278.816a2.334 2.334 0 0 1 2.007 2.369" />
                        </svg>
                    </span>
                    <p>Téléphone</p>
                </div>
                <a href="tel:<?= $phone ?>" title="Appeler par téléphone"><?= $phone ?></a>
            </div>
            <div class="flex flex-col gap-2 font-semibold">
                <div class="flex items-center gap-2">
                    <span class="bg-primary p-2 rounded flex w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="21" fill="none">
                            <path stroke="#eceff2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M24.333 3.333A2.34 2.34 0 0 0 22 1H3.333A2.34 2.34 0 0 0 1 3.333m23.333 0v14A2.34 2.34 0 0 1 22 19.667H3.333A2.34 2.34 0 0 1 1 17.333v-14m23.333 0L12.667 11.5 1 3.333" />
                        </svg>
                    </span>
                    <p>E-mail</p>
                </div>
                <a href="mailto:<?= $email ?>" title="Me contacter par email">
                    <?= $email ?>
                </a>
            </div>
        </div>
    </div>
    <div class="col-start-2 col-end-12 mt-10">
        <?php echo do_shortcode('[contact-form-7 id="6a1ed44" title="Contact Page Form"]'); ?>
    </div>
</main>
<?php
get_footer();
?>