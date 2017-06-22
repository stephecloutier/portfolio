<?php

/*
    Template Name: Contact
*/

get_header();
?>
<main class="contact">
    <h1 class="main-title contact__title"><?= __('Pour me contacter', 'sp'); ?></h1>
    <div class="contact__wrapper">
        <div class="contact__infos">
            <span class="contact__subtitle"><?= __('Mes coordonnées', 'sp'); ?></span>
            <ul class="contact__listc">
                <li class="contact__itemc contact__itemc--mailc">
                    <a href="mailto:stephecloutier@gmail.com" class="contact__link" title="<?= __('M’envoyer un mail', 'sp'); ?>">stephecloutier@gmail.com</a>
                </li>
                <li class="contact__itemc contact__itemc--phone">
                    +32 (0) 487 20 43 73
                </li>
                <li class="contact__itemc contact__itemc--address">
                    <p class="contact__itemc--line">Rue Julien Lahaut 20</p>
                    <p class="contact__itemc--line">4000 Liège</p>
                    <p class="contact__itemc--line">Belgique</p>
                </li>
                <li class="contact__itemc contact__itemc--address">
                    <span class="contact--special">Ou encore&hellip;</span>
                    <p class="contact__itemc--line">1545 avenue Du Nordet</p>
                    <p class="contact__itemc--line">Québec (Québec) G2G 1N2</p>
                    <p class="contact__itemc--line">Canada</p>
                </li>
            </ul>
        </div>

        <div class="form__wrapper">
            <span class="contact__subtitle"><?= __('Formulaire de contact', 'sp'); ?></span>
            <?= do_shortcode('[contact-form-7 id="42" title="Formulaire de contact"]'); ?>
        </div>
    </div>
</main>


<?php get_footer(); ?>
