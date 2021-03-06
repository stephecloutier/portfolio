<?php

/*
    Template Name: Projects
*/

get_header();
?>
<main class="projects">
    <h1 class="main-title projects__title"><?= __('Mes projets', 'sp'); ?></h1>
    <!--
    <nav class="nav nav--projects">
        <h2 class="nav__title">
            <?= __('Types de projet', 'sp'); ?>
        </h2>
        <ul class="nav__list">
            <li>
                <?= __('Tout', 'sp'); ?>
            </li>
            <?php $taxonomies = get_terms('project-type'); ?>
            <?php foreach($taxonomies as $taxonomy): ?>
            <li class="nav__item">
                <?= $taxonomy->name; ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </nav>
-->
    <ul class="projects--wrapper">
        <?php
            $posts = $posts = new WP_Query([
                    'posts_per_page' => -1,
                    'post_type' => 'project',
                    'meta_key' => 'project-date',
                    'orderby' => [
                        'meta_value'=>'DESC',
                    ],
                ]);
        ?>
        <?php if($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post(); ?>
        <?php $fields = get_fields();
                $image = $fields['project-image'];
        ?>
        <li class="project<?php
            if($fields['project-taxonomy']) {
                foreach($fields['project-taxonomy'] as $taxonomy){
                    echo ' project--' . $taxonomy->slug;
                }
            }
        ?>">
            <a href="<?= the_permalink(); ?>" class="project__link" title="<?= __('Aller sur la page du projet', 'sp'); ?>">
                <figure class="project__image--wrapper">
                    <img width="600" height="auto" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" class="project__image">
                    <div class="project__overlay"></div>
                </figure>
                <span class="project__title"><?= $fields['project-title']; ?></span>
            </a>
        </li>

        <?php endwhile; endif; ?>
    </ul>
</main>

<?php get_footer(); ?>
