<?php

/*
    Template Name: Homepage
*/

get_header();
?>

<main class="home">


    <section class="introduction introduction--home">
        <div class="introduction__wrapper">
            <h2 class="hidden">Introduction</h2>
            <p class="introduction__content">
                <span class="introduction__line introduction__line--big">Stéphanie Cloutier</span>
                <span class="introduction__line">Graphiste &amp; Développeur web</span>
                <!--
                <span class="introduction__line"><?= __('Bonjour&nbsp;!','sp'); ?></span>
                <span class="introduction__line"><?= __('Je m’appelle Stéphanie, ', 'sp'); ?></span>
                <span class="introduction__line"><?= __('je suis <em class="introduction--english">Graphic Designer</em> ', 'sp'); ?></span>
                <span class="introduction__line"><?= __('& <em class="introduction--english">Web Developer</em> ', 'sp'); ?></span>
                -->
            </p>
        </section>
        </div>


<!--
    <section class="fields">
        <div class="fields__wrapper">
            <h2 class="fields__title"><?= __('Pourquoi <span class="fields__title--emphasis">les deux&nbsp;?</em>', 'sp'); ?></h2>
            <p class="fields__content">
                <?= __('Après trois ans de design graphique, j’avais toujours envie d’étudier. Quoi de mieux que de compléter ma formation avec le développement web&nbsp;?', 'sp'); ?>
            </p>
            <a href="<?= sp_get_page_url('template-about.php'); ?>" class="fields__cta cta" title="<?= __('Aller sur la page à propos', 'sp'); ?>"><?= __('Apprendre à me connaître', 'sp'); ?></a>
        </div>
    </section>
-->


    <section class="work">
        <div class="work__wrapper">
            <!--
            <h2 class="work__title"><?= __('Ce que <span class="work__title--emphasis">je fais</span>', 'sp'); ?></h2>
            <p class="work__content">
                <?= __('Voici une petite sélection de mes projets récents', 'sp'); ?>
            </p>
            -->
            <h2 class="work__title">Quelques projets récents</h2>
            <ul class="work__projects">
                <?php
                    $posts = $posts = new WP_Query([
                            'posts_per_page' => 6,
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
                            <img width="280" height="auto" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" class="project__image">
                            <div class="project__overlay"></div>
                        </figure>
                        <span class="project__title"><?= $fields['project-title']; ?></span>
                    </a>
                </li>

                <?php endwhile; endif; ?>
            </ul>
            <a href="<?= sp_get_page_url('template-projects.php'); ?>" class="work__cta cta" title="<?= __('Aller sur la page de mes projets', 'sp'); ?>"><?= __('Voir tous mes projets', 'sp'); ?></a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
