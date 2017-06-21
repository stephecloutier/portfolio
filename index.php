<?php

/*
    Template Name: Homepage
*/

get_header();
?>

<main class="home">
    <section class="introduction">
        <div class="introduction__wrapper">
            <h2 class="hidden">Introduction</h2>
            <p class="introduction__content">
                <span class="introduction__line"><?= __('Bonjour&nbsp;!','sp'); ?></span>
                <span class="introduction__line"><?= __('Je m’appelle Stéphanie, ', 'sp'); ?></span>
                <span class="introduction__line"><?= __('je suis <em class="introduction--english">Graphic Designer</em> ', 'sp'); ?></span>
                <span class="introduction__line"><?= __('& <em class="introduction--english">Web Developer</em> ', 'sp'); ?></span>
            </p>
        </section>
        </div>


    <section class="fields">
        <h2 class="fields__title"><?= __('Pourquoi <span class="fields__title--emphasis">les deux&nbsp;?</em>', 'sp'); ?></h2>
        <p class="fields__content">
            <?= __('Après trois ans de design graphique, j’avais toujours envie d’étudier. Quoi de mieux que de compléter ma formation avec le développement web&nbsp;?', 'sp'); ?>
        </p>
        <a href="<?= sp_get_page_url('template-about.php'); ?>" class="fields__cta cta" title="<?= __('Aller sur la page à propos', 'sp'); ?>"><?= __('Apprendre à me connaître', 'sp'); ?></a>
    </section>

    <section class="work">
        <h2 class="work__title"><?= __('Ce que je fais', 'sp'); ?></h2>
        <p class="work__content">
            <?= __('Voici une petite sélection de mes projets', 'sp'); ?>
        </p>
        <div class="work__projets">
            <!-- wp content -->
        </div>
        <a href="<?= sp_get_page_url('template-projects.php'); ?>" class="work__cta cta" title="<?= __('Aller sur la page de mes projets', 'sp'); ?>"><?= __('Voir tous mes projets', 'sp'); ?></a>
    </section>
</main>

<?php get_footer(); ?>
