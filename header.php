<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title(''); ?></title>
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/main.css">
    </head>
    <body>
        <header>
            <h1><a href="<?= get_home_url(); ?>" class="header__link">Hello world</a></h1>
            <nav class="nav">
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
