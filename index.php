<?php

/*
    Template Name: Homepage
*/

get_header();
?>

<main class="home">

    <section class="work" id="work">
        <div class="work__wrapper">
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
