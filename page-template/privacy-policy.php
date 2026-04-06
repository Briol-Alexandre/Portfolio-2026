<?php
/* Template Name: RGPD / Politique de Confidentialité */

get_header();

$tel = get_field('phone_number', 'options');
$email = get_field('email_address', 'options');
$company_name = get_field('company_name', 'options');
$company_address = get_field('adress', 'options');
$site_name = get_bloginfo('site_name', 'options');
$status = get_field('status', 'options');
$bce_number = get_field('bce_number', 'options');
$tva_number = get_field('tva_number', 'options');
$host_name = get_field('host_name', 'options');
$host_address = get_field('host_address', 'options');
$host_website = get_field('host_link', 'options');
$registrar = get_field('registrar', 'options');
$domain_name = get_field('domain_name', 'options');
?>
<div class="mt-32">&nbsp;</div>
<main class="grid-main">
    <h1 class="title lg:mt-section mt-12 col-span-12 text-center">
        <span class="highlight">RGPD</span>
    </h1>

    <div class="col-start-2 col-end-12">
        <div class="text-content">
            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">1. Responsable du traitement</h2>
            <p>
                <?= $company_name ?> est responsable du traitement des données à caractère personnel collectées sur ce
                site.
                Pour toute question relative à vos données personnelles, vous pouvez nous contacter à :
                <?= $email ?> ou via notre <a href="<?php echo home_url('/me-contacter'); ?>"
                    class="text-main underline hover:no-underline">formulaire de contact</a>.
            </p>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">2. Données collectées</h2>
            <p>
                Nous collectons les données suivantes lorsque vous utilisez notre site :
            </p>
            <ul class="list-disc pl-6 space-y-2">
                <li><strong>Données de formulaire :</strong> nom, prénom, email, téléphone, message</li>
                <li><strong>Données de navigation :</strong> adresse IP, type de navigateur, pages visitées</li>
                <li><strong>Cookies :</strong> identifiants de session et préférences utilisateur</li>
            </ul>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">3. Base légale du traitement</h2>
            <p>
                Le traitement de vos données est fondé sur :
            </p>
            <ul class="list-disc pl-6 space-y-2">
                <li>Votre consentement explicite (formulaires de contact)</li>
                <li>Notre intérêt légitime (amélioration du service)</li>
                <li>L'exécution d'un contrat si applicable</li>
            </ul>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">4. Finalités du traitement</h2>
            <p>
                Vos données sont utilisées pour :
            </p>
            <ul class="list-disc pl-6 space-y-2">
                <li>Répondre à vos demandes de contact</li>
                <li>Améliorer notre service et votre expérience utilisateur</li>
                <li>Assurer la sécurité de notre site</li>
                <li>Respecter nos obligations légales</li>
            </ul>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">5. Destinataires des données</h2>
            <p>
                Vos données ne sont communiquées à des tiers que si cela est nécessaire pour fournir nos services
                (prestataires techniques, partenaires commerciaux). Aucune transmission hors de l'UE sans safeguards
                appropriés.
            </p>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">6. Durée de conservation</h2>
            <p>
                Vos données personnelles sont conservées pendant la durée nécessaire au traitement de votre demande,
                puis supprimées dans les délais légaux (généralement 3 ans maximum).
            </p>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">7. Vos droits</h2>
            <p>
                Vous disposez des droits suivants concernant vos données personnelles :
            </p>
            <ul class="list-disc pl-6 space-y-2">
                <li><strong>Droit d'accès :</strong> obtenir une copie de vos données</li>
                <li><strong>Droit de rectification :</strong> corriger les données inexactes</li>
                <li><strong>Droit à l'oubli :</strong> demander la suppression de vos données</li>
                <li><strong>Droit à la limitation :</strong> limiter le traitement de vos données</li>
                <li><strong>Droit à la portabilité :</strong> recevoir vos données dans un format structuré</li>
                <li><strong>Droit d'opposition :</strong> vous opposer au traitement de vos données</li>
            </ul>
            <p class="mt-4">
                Pour exercer ces droits, contactez-nous à : [votre email]
            </p>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">8. Sécurité des données</h2>
            <p>
                Nous mettons en place des mesures de sécurité appropriées pour protéger vos données contre
                l'accès non autorisé, la modification ou la destruction. Cependant, aucune transmission sur Internet
                n'est totalement sécurisée.
            </p>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">9. Cookies et technologies de
                suivi</h2>
            <p>
                Notre site utilise des cookies pour améliorer votre expérience. Vous pouvez contrôler les cookies
                via les paramètres de votre navigateur. Certains cookies sont essentiels au fonctionnement du site,
                d'autres sont optionnels.
            </p>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">10. Contact et réclamation</h2>
            <p>
                Si vous avez des questions concernant notre politique de confidentialité, veuillez nous contacter à :
                <?= $email ?> ou via notre <a href="<?php echo home_url('/contact'); ?>"
                    class="text-main underline hover:no-underline">formulaire de contact</a>.
            </p>
            <p>
                Vous avez également le droit de déposer une plainte auprès de l'<strong>Autorité de Protection des
                    Données</strong> (APD - Belgique) ou auprès de votre autorité nationale de protection des données si
                vous résidez hors de Belgique.
            </p>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">11. Modifications de la politique
            </h2>
            <p>
                Nous nous réservons le droit de modifier cette politique à tout moment. Les modifications seront
                publiées sur cette page avec la date de la dernière mise à jour.
            </p>

            <p class="text-sm text-main/70 mt-8 pt-8 border-t border-main/20">
                <strong>Dernière mise à jour :</strong> <?php echo date('d/m/Y'); ?>
            </p>
        </div>
    </div>
</main>

<?php
get_footer();
