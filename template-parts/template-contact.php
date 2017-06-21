<?php

/*
    Template Name: Contact
*/

get_header();
?>
<main class="contact">
    <h1 class="main-title"><?= __('Pour me contacter', 'sp'); ?></h1>
    <div class="contact__infos">
        <span><?= __('Mes coordonnées', 'sp'); ?></span>
        <ul class="contact__list">
            <li class="contact__item contact__item--mail">
                <a href="mailto:stephecloutier@gmail.com" class="contact__link" title="<?= __('M’envoyer un mail', 'sp'); ?>">stephecloutier@gmail.com</a>
            </li>
            <li class="contact__item contact__item--phone">
                +32 (0) 487 20 43 73
            </li>
            <li class="contact__item contact__item--address">
                <p class="contact__item--line">Rue Julien Lahaut 20</p>
                <p class="contact__item--line">4000 Liège</p>
                <p class="contact__item--line">Belgique</p>
            </li>
            <li class="contact__item contact__item--address">
                <span>Ou encore&hellip;</span>
                <p class="contact__item--line">1545 avenue Du Nordet</p>
                <p class="contact__item--line">Québec (Québec) G2G 1N2</p>
                <p class="contact__item--line">Canada</p>
            </li>
        </ul>
    </div>

    <div class="form__wrapper">
        <?= do_shortcode('[contact-form-7 id="42" title="Formulaire de contact"]'); ?>
    </div>
</main>


<?php get_footer(); ?>
