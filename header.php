<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title(''); ?></title>
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/main.css">
    </head>
    <body>
        <header class="header">
            <h1>
                <a href="<?= get_home_url(); ?>" class="header__link" title="Aller à l’accueil">
                    <svg class="logo-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78.8 67.7">
                        <style>.logo-svg{max-width: 100px}</style>
                        <g id="logo">
                            <path class="logo-letters" d="M13.7 31.2c.1 3.6 2.7 5.4 7.8 5.4 2 0 3.6-.4 4.8-1.3 1.3-.9 1.9-1.8 1.9-3 0-1.1-.4-2-1.2-2.6-.8-.6-2-1.2-3.6-1.7l-8.1-3c-6.1-2.1-9.2-5.6-9.2-10.4 0-3.2 1.4-5.8 4.3-7.7C13.3 5 17.2 4 22 4s8.6 1.1 11.2 3.2c2.6 2.1 4 4.8 4.1 8h-8.6c-.1-1.2-.7-2.2-1.8-2.9-1.1-.7-2.6-1.1-4.7-1.1-2 0-3.6.4-4.7 1.2-1.1.8-1.7 1.7-1.7 2.8 0 1.8 1.5 3.2 4.6 4l8.9 3.3c2.9 1 5.2 2.2 6.8 3.8 1.6 1.5 2.4 3.5 2.4 5.9 0 3.1-1.5 5.8-4.4 8.1C31 42.6 27 43.8 22 43.8s-9-1.1-12.1-3.3c-3.1-2.2-4.6-5.3-4.7-9.3h8.5zM59.2 23.9c2.4 0 4.5.4 6.4 1.2 1.9.8 3.5 1.8 4.8 3.1 2.6 2.5 4.1 5.6 4.6 9.4l-9.2.2c-.4-1.7-1.2-3-2.3-4.1-1.1-1.1-2.4-1.6-3.8-1.6s-2.7.2-3.7.7c-1 .4-1.9 1.1-2.7 2.1-1.8 2.2-2.6 5.2-2.6 9s.8 6.7 2.5 8.6c1.7 1.9 3.7 2.9 6 2.9 2.4 0 4.1-.6 5.1-1.7 1.1-1.1 1.6-2.6 1.6-4.5H75c0 4.1-1.4 7.6-4.1 10.3-2.8 2.8-6.7 4.2-11.7 4.2-5 0-9.1-1.8-12.5-5.4-3.6-3.9-5.4-8.7-5.4-14.5 0-6.1 1.8-11 5.4-14.7 3.3-3.5 7.5-5.2 12.5-5.2z"/>
                            <g>
                                <path class="logo-elements" d="M20.1 49.2L5.4 57.6l1.4 3.1 15.3-7.1zM32.9 61.9c-1.3 0-2.3-.4-3-1.1-.7-.7-1.1-1.7-1.1-2.9s.4-2.2 1.1-2.9c.7-.7 1.7-1.1 3-1.1s2.3.4 3.1 1.1c.8.7 1.2 1.7 1.2 2.9s-.4 2.2-1.2 2.9c-.8.8-1.9 1.1-3.1 1.1zM51.2 15.1c-1.3 0-2.3-.4-3-1.1-.7-.7-1.1-1.7-1.1-2.9s.4-2.2 1.1-2.9c.7-.7 1.7-1.1 3-1.1s2.3.4 3.1 1.1c.7.8 1.1 1.8 1.1 3s-.4 2.1-1.1 2.8c-.8.8-1.8 1.1-3.1 1.1z"/>
                            </g>
                        </g>
                    </svg>
                    <span class="hidden">Stéphanie Cloutier</span>
                </a>
            </h1>
            <nav class="nav nav--main">
                <h2 class="hidden"><?= __('Navigation principale', 'sp'); ?></h2>
                <ul class="nav__list">
                <?php foreach(sp_get_nav_items('main') as $item): ?>
                    <li class="nav__item<?php if($item->children) echo ' nav__item--parent'; ?>">
                        <a href="<?= $item->url; ?>" class="nav__link"><?= $item->label; ?></a>

                        <?php if($item->children): ?>
                        <ul class="nav__sub-container">
                            <?php foreach($item->children as $sub): ?>
                            <li class="nav__sub-item">
                                <a href="<?= $sub->url; ?>" class="nav__link nav__link--sub"></a>
                            </li>
                            <?php endforeach;?>
                        </ul>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </header>
