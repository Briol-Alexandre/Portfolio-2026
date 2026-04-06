<?php
/* Template Name: Mentions Légales */

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
        Mentions&nbsp; <span class="highlight">légales</span>
    </h1>

    <div class="col-start-2 col-end-12">
        <div class="text-content">
            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">1. Identification du site</h2>
            <p>
                <strong>Nom du site :</strong> <?php echo $site_name; ?><br>
                <strong>Adresse :</strong> <?php echo $company_address; ?><br>
                <strong>Numéro de téléphone :</strong> <?php echo $tel; ?><br>
                <strong>Adresse email :</strong> <?php echo $email; ?><br>
                <strong>Statut :</strong> <?php echo $status; ?><br>
                <strong>Numéro BCE :</strong> <?php echo $bce_number; ?><br>
                <strong>Numéro de TVA :</strong> <?php echo $tva_number; ?>
            </p>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">2. Directeur de la publication
            </h2>
            <p>
                Directeur de la publication : <?php echo $company_name; ?><br>
                Cette fonction est assurée par le responsable du site.
            </p>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">3. Hébergeur du site</h2>
            <p>
                <strong>Raison sociale :</strong> <?php echo $host_name; ?><br>
                <strong>Adresse :</strong> <?php echo $host_address; ?><br>
                <strong>Site web :</strong> <?php echo $host_website; ?>
            </p>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">4. Propriété intellectuelle</h2>
            <p>
                L'ensemble du contenu de ce site (textes, images, vidéos, graphiques, logos, icônes, son, logiciels)
                est la propriété exclusive de
                <?= $company_name ?> ou de ses partenaires. Toute reproduction,
                distribution,
                modification ou transmission de ces éléments sans autorisation est interdite.
            </p>
            <p>
                Les marques, logos et noms cités sur ce site sont la propriété de leurs propriétaires respectifs.
            </p>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">5. Conditions d'utilisation</h2>
            <p>
                En accédant à ce site, vous acceptez les conditions d'utilisation suivantes :
            </p>
            <ul class="list-disc pl-6 space-y-2">
                <li>Respecter la législation belge et internationale</li>
                <li>Ne pas transmettre de contenu illégal, offensant ou nuisible</li>
                <li>Ne pas tenter de compromettre la sécurité du site</li>
                <li>Ne pas utiliser le site à des fins commerciales sans autorisation</li>
            </ul>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">6. Responsabilité</h2>
            <p>
                <?php echo $company_name; ?> s'efforce de fournir des informations à jour et fiables. Cependant, nous
                déclinons
                toute responsabilité en cas d'erreur ou d'omission. L'accès au site est fourni "tel quel".
                <?php echo $company_name; ?> ne peut être tenue responsable des dommages directs ou indirects résultant
                de l'utilisation ou de l'impossibilité d'utiliser le site.
            </p>
            <p>
                Les informations fournies par les utilisateurs (commentaires, messages) n'engagent que leurs auteurs.
                <?php echo $company_name; ?> n'est pas responsable des contenus générés par les utilisateurs.
            </p>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">7. Liens externes</h2>
            <p>
                Ce site peut contenir des liens vers d'autres sites. <?php echo $company_name; ?> ne peut être tenue
                responsable
                du contenu de ces sites externes. La présence d'un lien ne constitue pas une approbation du site lié.
            </p>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">8. Protection des données
                personnelles</h2>
            <p>
                La collecte et le traitement des données personnelles sont soumis à la Loi relative à la protection des
                personnes physiques à l'égard du traitement des données à caractère personnel (Belgique) et au Règlement
                Général sur la Protection des Données (RGPD). Consultez notre
                <a href="<?php echo get_permalink(get_page_by_path('rgpd')) ?>"
                    class="text-main underline hover:no-underline">
                    Politique de Confidentialité
                </a> pour plus d'informations.
            </p>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">9. Cookies</h2>
            <p>
                Ce site utilise des cookies pour améliorer votre expérience utilisateur. En continuant à naviguer,
                vous acceptez notre utilisation des cookies. Vous pouvez désactiver les cookies dans les paramètres
                de votre navigateur si vous le souhaitez.
            </p>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">10. Modification et suppression du
                contenu</h2>
            <p>
                <?php echo $company_name; ?> se réserve le droit de modifier ou de supprimer le contenu du site à tout
                moment,
                sans préavis et sans responsabilité.
            </p>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">11. Propriété du domaine</h2>
            <p>
                <strong>Registrar :</strong> <?php echo $registrar; ?><br>
                <strong>Domaine :</strong> <?php echo $domain_name; ?>
            </p>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">12. Contact</h2>
            <p>
                Pour toute question concernant ces mentions légales, veuillez nous contacter :<br>
                <strong>Email :</strong>
                <a href="mailto:<?php echo $email; ?>" class="underline"><?php echo $email; ?></a><br>
                <strong>Téléphone :</strong>
                <a href="tel:<?php echo $tel; ?>" class="underline">
                    <?php echo $tel; ?>
                </a><br>
                <strong>Formulaire de contact :</strong> Disponible dans la section <a
                    href="<?php echo home_url('/me-contacter'); ?>"
                    class="text-main underline hover:no-underline">Contact</a>
            </p>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">13. Conformité légale</h2>
            <p>
                Ce site est conforme avec :
            </p>
            <ul class="list-disc pl-6 space-y-2">
                <li>La Loi relative aux services de société de l'information (Belgique)</li>
                <li>La Loi relative à la protection des personnes physiques (Belgique)</li>
                <li>Le Règlement Général sur la Protection des Données (RGPD)</li>
                <li>Les lois sur l'accessibilité numérique</li>
            </ul>

            <h2 class="text-2xl lg:text-3xl font-forum font-bold text-main mt-8 mb-6">14. Droit applicable et
                juridiction</h2>
            <p>
                Ces mentions légales sont soumises au droit belge. Tout litige sera soumis à la juridiction
                des tribunaux belges compétents, conformément à la législation belge applicable.
            </p>

            <p class="text-sm text-main/70 mt-8 pt-8 border-t border-main/20">
                <strong>Dernière mise à jour :</strong> <?php echo date('d/m/Y'); ?>
            </p>
        </div>
    </div>
</main>

<?php
get_footer();