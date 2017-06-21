<?php

/*
    Template Name: Contact
*/

get_header();
?>
<main class="contact">
    <div class="form__wrapper">
        <?= do_shortcode('[contact-form-7 id="42" title="Formulaire de contact"]'); ?>
    </div>
</main>


<?php get_footer(); ?>
