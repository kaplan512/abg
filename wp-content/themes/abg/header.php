<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><? wp_title(); ?></title>
    <link rel="stylesheet" href="<?=layout();?>/css/style.min.css">
    <?php wp_head(); ?>

    <link rel="icon" type="image/x-icon" href="<?=layout();?>/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=layout();?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=layout();?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=layout();?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=layout();?>/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?=layout();?>/img/favicon/safari-pinned-tab.svg" color="#171a1f">
    <meta name="msapplication-TileColor" content="#171a1f">
    <meta name="theme-color" content="#171a1f">
</head>

<body>
<div class="wrapper">
    <header class="header header_black">
        <div class="container">
            <div class="header__body">
                <a href="<?php echo get_home_url();?>" class="header__logo">
                    <img class="lazy" data-src="<?=layout();?>/img/logo-black.svg" alt="logo">
                </a>
                <div class="header__menu menu">
                    <nav class="menu__body">
                        <?=get_template_part('/template/menu', null ); ?>
                    </nav>
                </div>
                <?php if(get_phones()){ ?>
                    <div class="header__contact">
                        <div class="header__phones phones-header dropbox">
                            <div class="phones-header__toggle dropbox__li">
                                <?php foreach(get_phones() as $phone){ ?>
                                    <a href="tel:<?php echo tel($phone); ?>" class="phones-header__phone">
                                        <?php echo $phone; ?>
                                    </a>
                                <?php break; } ?>
                                <div class="phones-header__arrow dropbox__icon">
                                    <svg>
                                        <use xlink:href="<?=layout();?>/img/sprite.svg#arrow-abg"></use>
                                    </svg>
                                </div>
                                <div class="phones-header__menu dropbox__sub-list">
                                    <?php $i = 0; foreach(get_phones() as $phone){ ?>
                                        <?php if($i != 0){ ?>
                                            <a href="tel:<?php echo tel($phone); ?>" class="phones-header__phone dropbox__sub-link">
                                                <?php echo $phone; ?>
                                            </a>
                                        <?php } ?>
                                    <?php $i++;} ?>
                                </div>
                            </div>
                        </div>
                        <a href="#modal-form" data-fancybox="" class="header__modal-link">
                            <?php _e("Заказать звонок", "theme"); ?>
                        </a>
                    </div>
                <?php } ?>
                <?php dynamic_sidebar( 'lang_select' ); ?>
                <div class="icon-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>