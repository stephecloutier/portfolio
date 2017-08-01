<?php

/*
    Template Name: About
*/

get_header();
?>
<main class="about">
    <div class="about__wrapper">
        <h1 class="main-title about__title">
            <?= __('Mais qui <span class="about__title--emphasis">est Stéphanie&nbsp;?</span>', 'sp'); ?>
        </h1>
        <div class="about__content">
            <!--
            <figure class="about__img--wrapper">
                <img class="about__image" width="300" height="auto" src="<?= get_template_directory_uri(); ?>/assets/images/cloutierstephanie.jpg" alt="Photo de Stéphanie Cloutier">
            </figure>
        -->
            <p class="about__text">
                J'ai 22 ans, je viens de Québec et j'habite actuellement à Liège, en Belgique. J'aime beaucoup le design (web ou <em class="about__text--emphasis">print</em>), l'illustration, <em class="about__text--emphasis">Magic: The Gathering</em>, Nintendo et les pâtes au <em class="about__text--emphasis">pesto&nbsp;!</em>
                <!--
                Je m'appelle Stéphanie, j'ai 22 ans et je suis <em class="about__text--emphasis">québécoise</em> (oui, oui, du Québec, au Québec, au Canada). J'habite actuellement en Belgique, à Liège plus précisément (encore oui, à Liège dans la province de Liège). Avant de venir étudier le web au pays du chocolat, j’ai fait trois ans d’études supérieures en <em class="about__text--emphasis">design graphique</em> dans le pays des caribous (Ce qu'on appelle un <em class="about__text--emphasis">DEC</em> par chez moi).
                J’aime beaucoup le design (web ou <em class="about__text--emphasis">print</em>), l’illustration, <em class="about__text--emphasis">Magic: The Gathering</em>, <em class="about__text--emphasis">Nintendo</em> et les pâtes au <em class="about__text--emphasis">pesto&nbsp;!</em>
            -->
            </p>
            <a href="<?= sp_get_page_url('template-projects.php'); ?>" class="about__cta cta" title="<?= __('Aller sur la page des projets', 'sp'); ?>"><?= __('Voir mes projets', 'sp'); ?></a>
            <a href="<?= sp_get_page_url('template-contact.php'); ?>" class="about__cta cta about__cta--second" title="<?= __('Aller sur la page de contact', 'sp'); ?>"><?= __('Contactez-moi', 'sp'); ?></a>
        </div>
        <div class="fields">
            <div class="fields__wrapper">
                <h2 class="fields__title"><?= __('Graphisme & <span class="fields__title--emphasis">développement web</span>', 'sp'); ?></h2>
                <p class="fields__content">
                    <?= __('Après trois ans de design graphique, j’avais toujours envie d’étudier. Quoi de mieux que de compléter ma formation avec le développement web&nbsp;?', 'sp'); ?>
                </p>
                <a href="http://stephanie.cloutier.pro/cvjuillet2017.pdf" class="fields__cta cta" title="<?= __('Télécharger mon cv', 'sp'); ?>"><?= __('Télécharger mon cv', 'sp'); ?></a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
