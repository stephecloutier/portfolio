<?php

/*
    Template Name: About
*/

get_header();
?>
<main class="about">
    <div class="about__wrapper">
        <h1 class="main-title about__title">
            <?= __('Mais qui suis-je&nbsp;?', 'sp'); ?>
        </h1>
        <div class="about__content">
            <figure class="about__img--wrapper">
                <img class="about__image" width="300" height="auto" src="<?= get_template_directory_uri(); ?>/assets/images/cloutierstephanie.jpg" alt="Photo de Stéphanie Cloutier">
            </figure>
            <p class="about__text">
                Je m'appelle Stéphanie, j'ai 22 ans et je suis <em class="about__text--emphasis">québécoise</em> (oui, oui, du Québec, au Québec, au Canada). J'habite actuellement en Belgique, à Liège plus précisément (encore oui, à Liège dans la province de Liège). Avant de venir étudier le web au pays du chocolat, j’ai fait trois ans d’études supérieures en <em class="about__text--emphasis">design graphique</em> dans le pays des caribous (Ce qu'on appelle un <em class="about__text--emphasis">DEC</em> par chez moi).
                J’aime beaucoup le design (web ou <em class="about__text--emphasis">print</em>), l’illustration, <em class="about__text--emphasis">Magic: The Gathering</em>, <em class="about__text--emphasis">Nintendo</em> et les pâtes au <em class="about__text--emphasis">pesto&nbsp;!</em>
            </p>
        </div>
    </div>
</main>

<?php get_footer(); ?>
