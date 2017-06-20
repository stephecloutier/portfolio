<?php

/*
    Template Name: Projects
*/

get_header();
?>

<div class="projects">
    <h1 class="main-title projects__title"><?= __('Mes projets', 'sp'); ?></h1>
    <div class="projects--wrapper">
        <?php
            $posts = $posts = new WP_Query([
                    'posts_per_page' => -1,
                    //'paged' => $paged,
                    'post_type' => 'project',
                    'meta_key' => 'project-date',
                    'orderby' => [
                        'meta_value'=>'DESC',
                    ],
                ]);
        ?>
        <?php if($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post(); ?>
        <?php $fields = get_fields(); ?>
        <div class="project<?php
            foreach($fields['project-taxonomy'] as $taxonomy){
                echo ' project--' . $taxonomy->slug;
            }
        ?>">
            <figure class="project__image--wrapper">
                <img src="" alt="" class="project__image">
            </figure>
            <span class="project__title"><?= $fields['project-title']; ?></span>
            <p><?= $fields['project-date']; ?></p>
        </div>

        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>
