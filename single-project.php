<?php

/*
    Template Name: Project
*/

get_header();
$fields = get_fields();
?>
<main class="project">
    <div class="introduction">
        <h1><?= $fields['project-title']; ?></h1>
        <div class="introduction__content">
            <?= $fields['project-introduction'] ?>
        </div>
        <figure class="introduction__image--wrapper">
            <img width="500" height="auto" class="introduction__image" src="<?= $fields['project-presentation-image']['url']; ?>" alt="<?= $fields['project-presentation-image']['alt']; ?>">
        </figure>
        <div class="introduction__links">
            <?php if($fields['project-github-link']): ?>
            <a href="<?= $fields['project-github-link']; ?>" class="introduction__link introduction__link--github" title="<?= __('Voir le repo Github du projet', 'sp'); ?>"><?= __('Voir sur Github', 'sp'); ?></a>
            <?php endif; ?>
            <?php if($fields['project-website-link']): ?>
            <a href="<?= $fields['project-website-link']; ?>" class="introduction__link introduction__link--website" title="<?= __('Aller sur le site web du projet', 'sp'); ?>"><?= __('Voir le site web', 'sp'); ?></a>
            <?php endif; ?>
            <?php if($fields['project-behance-link']): ?>
            <a href="<?= $fields['project-behance-link']; ?>" class="introduction__link introduction__link--behance" title="<?= __('Voir le projet sur behance', 'sp'); ?>"><?= __('Voir sur Behance', 'sp'); ?></a>
            <?php endif; ?>
        </div>
    </div>
</main>


<?php get_footer(); ?>
