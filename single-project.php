<?php

/*
    Template Name: Project
*/

get_header();
$fields = get_fields();
$date = new DateTime($fields['project-date']);
?>
<main class="single-project">
    <div class="single-project__wrapper">
        <h1 class="main-title single-project__title"><?= $fields['project-title']; ?></h1>
        <time class="project__date" datetime="<?= $date->format('Y-m-d'); ?>"><?= strftime("%B %Y", $date->getTimestamp()); ?></time>
        <div class="introduction--project">
            <div class="introduction__content">
                <?= $fields['project-introduction']; ?>
                <div class="introduction__links">
                    <?php if($fields['project-github-link']): ?>
                    <a href="<?= $fields['project-github-link']; ?>" class="introduction__link introduction__link--github cta" title="<?= __('Voir le repo Github du projet', 'sp'); ?>"><?= __('Voir sur Github', 'sp'); ?></a>
                    <?php endif; ?>
                    <?php if($fields['project-website-link']): ?>
                    <a href="<?= $fields['project-website-link']; ?>" class="introduction__link introduction__link--website cta" title="<?= __('Aller sur le site web du projet', 'sp'); ?>"><?= __('Voir le site web', 'sp'); ?></a>
                    <?php endif; ?>
                    <?php if($fields['project-behance-link']): ?>
                    <a href="<?= $fields['project-behance-link']; ?>" class="introduction__link introduction__link--behance cta" title="<?= __('Voir le projet sur behance', 'sp'); ?>"><?= __('Voir sur Behance', 'sp'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <img width="500" height="auto" class="introduction__image" src="<?= $fields['project-presentation-image']['url']; ?>" alt="<?= $fields['project-presentation-image']['alt']; ?>">
        </div>

        <?php
            if($fields['project-process']):
                $images = $fields['project-process'];
        ?>
        <section class="project__process">
            <h2 class="process__title"><?= __('Images du projet', 'sp'); ?></h2>
            <div class="images__wrapper">
                <?php foreach($images as $image): ?>
                <figure class="process__wrapper">
                    <a href="<?= $image['url']; ?>" title="<?= __('Afficher l’image en plus grand', 'sp'); ?>">
                        <img class="process__image" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
                    </a>
                    <?php if($image['description']): ?>
                    <figcaption class="image__caption"><?= $image['description']; ?></figcaption>
                    <?php endif; ?>
                </figure>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </section>
</main>


<?php get_footer(); ?>
