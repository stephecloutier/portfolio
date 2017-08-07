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
            <p class="about__text">
                J'ai 22 ans, je viens de Québec et j'habite actuellement à Liège, en Belgique. J'aime beaucoup le design (web ou <em class="about__text--emphasis">print</em>), l'illustration, <em class="about__text--emphasis">Magic: The Gathering</em>, Nintendo et les pâtes au <em class="about__text--emphasis">pesto&nbsp;!</em>
            </p>
            <a href="<?= sp_get_page_url('template-projects.php'); ?>" class="about__cta cta" title="<?= __('Aller sur la page des projets', 'sp'); ?>"><?= __('Voir mes projets', 'sp'); ?></a>
            <a href="#contact" class="about__cta cta about__cta--second" title="<?= __('Aller sur la section de contact', 'sp'); ?>"><?= __('Contactez-moi', 'sp'); ?></a>
        </div>
        <div class="fields">
            <section class="fields__wrapper">
                <h2 class="fields__title"><?= __('Graphisme & <span class="fields__title--emphasis">développement web</span>', 'sp'); ?></h2>
                <p class="fields__content">
                    <?= __('Après trois ans de design graphique, j’avais toujours envie d’étudier. Quoi de mieux que de compléter ma formation avec le développement web&nbsp;?', 'sp'); ?>
                </p>
                <a href="http://stephanie.cloutier.pro/cvjuillet2017.pdf" class="fields__cta cta" title="<?= __('Télécharger mon cv', 'sp'); ?>"><?= __('Télécharger mon cv', 'sp'); ?></a>
            </section>
        </div>

        <div class="contact" id="contact">
            <section class="contact__wrapper">
                <h2 class="contact__title"><?= __('Pour me contacter', 'sp'); ?></h2>
                <div class="contact__infos">
                    <!--<span class="contact__subtitle"><?= __('Mes coordonnées', 'sp'); ?></span>-->
                    <ul class="contact__listc">
                        <li class="contact__itemc contact__itemc--phone">
                            <span class="contact--special">Belgique</span>
                            +32 (0) 487 20 43 73
                        </li>
                        <li class="contact__itemc contact__itemc--address">
                            <p class="contact__itemc--line">Rue Julien Lahaut 20</p>
                            <p class="contact__itemc--line">4000 Liège</p>
                            <!--<p class="contact__itemc--line">Belgique</p>-->
                        </li>
                        <li class="contact__itemc contact__itemc--address">
                            <span class="contact--special">Canada</span>
                            <p class="contact__itemc--line">1545 avenue Du Nordet</p>
                            <p class="contact__itemc--line">Québec (Québec) G2G 1N2</p>
                            <!--<p class="contact__itemc--line">Canada</p>-->
                        </li>
                        <li class="contact__itemc contact__itemc--mailc">
                            <span class="contact--special">Ou envoyez-moi simplement un mail</span>
                            <a href="mailto:stephecloutier@gmail.com" class="contact__link" title="<?= __('M’envoyer un mail', 'sp'); ?>">stephecloutier@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>
