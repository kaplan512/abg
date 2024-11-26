<?
/*
Template Name: Контакты
Template Post Type: page
*/
?>
<?php get_header(); ?>
    <main class="page page_black">
        <section class="page__hero hero hero_black">
            <img class="lazy" data-src="<?= layout(); ?>/img/new/IMG_2893.jpg" alt="foto">
            <div class="container">
                <div class="hero__info">
                    <div class="hero__top">
                        <h1 class="hero__title">
                            <?php echo get_the_title(); ?>
                        </h1>
                        <div class="hero__sub-title hero__sub-title_28">
                            <?php _e("Оставьте заявку и наш менеджер с вами свяжется", "theme"); ?>
                        </div>
                    </div>
                    <a href="#modal-form" data-fancybox="" class="hero__btn btn btn_black btn-size btn-color__yellow">
                        <?php _e("Оставить заявку", "theme"); ?>
                    </a>
                </div>
            </div>
        </section>
        <section class="page__contact contact contact_black">
            <div class="contact__container">
                <div class="contact__body">
                    <div class="contact__content">
                        <div class="contact__items">

                            <?php if (get_field('главный_офис', 'options')['телефон_1'] or get_field('главный_офис', 'options')['телефон_2'] or get_field('главный_офис', 'options')['почта']) { ?>
                                <div class="contact__item item-contact">
                                    <div class="item-contact__column">
                                        <div class="item-contact__title"><?php _e("Главный офис:", "theme"); ?></div>
                                    </div>
                                    <div class="item-contact__column">
                                        <a href="tel:<?php echo tel(get_field('главный_офис', 'options')['телефон_1']); ?>"
                                           class="item-contact__phone">
                                            <svg>
                                                <use xlink:href="<?= layout(); ?>/img/sprite.svg#phone-abg"></use>
                                            </svg>
                                            <span>
                                                <?php echo get_field('главный_офис', 'options')['телефон_1']; ?>
                                            </span>
                                        </a>
                                        <a href="tel:<?php echo tel(get_field('главный_офис', 'options')['телефон_2']); ?>"
                                           class="item-contact__phone">
                                            <svg>
                                                <use xlink:href="<?= layout(); ?>/img/sprite.svg#phone-abg"></use>
                                            </svg>
                                            <span>
                                                <?php echo get_field('главный_офис', 'options')['телефон_2']; ?>
                                            </span>
                                        </a>
                                        <a href="tel:<?php echo tel(get_field('главный_офис', 'options')['телефон_3']); ?>"
                                           class="item-contact__phone">
                                            <svg>
                                                <use xlink:href="<?= layout(); ?>/img/sprite.svg#phone-abg"></use>
                                            </svg>
                                            <span>
                                                <?php echo get_field('главный_офис', 'options')['телефон_3']; ?>
                                            </span>
                                        </a>
                                        <a href="mailto:<?php echo get_field('главный_офис', 'options')['почта']; ?>"
                                           class="item-contact__email">
                                            <svg>
                                                <use xlink:href="<?= layout(); ?>/img/sprite.svg#email-abg"></use>
                                            </svg>
                                            <span>
                                                <?php echo get_field('главный_офис', 'options')['почта']; ?>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if (get_field('отдел_поставок', 'options')['телефон_1'] or get_field('отдел_поставок', 'options')['почта']) { ?>
                                <div class="contact__item item-contact">
                                    <div class="item-contact__column">
                                        <div class="item-contact__title"><?php _e("Отдел поставок:", "theme"); ?></div>
                                    </div>
                                    <div class="item-contact__column">
                                        <?php if(get_field('отдел_поставок', 'options')['телефон_1']){ ?>

                                            <a href="tel:<?php echo tel(get_field('отдел_поставок', 'options')['телефон_1']); ?>"
                                               class="item-contact__phone">
                                                <svg>
                                                    <use xlink:href="<?= layout(); ?>/img/sprite.svg#phone-abg"></use>
                                                </svg>
                                                <span>
                                                <?php echo get_field('отдел_поставок', 'options')['телефон_1']; ?>
                                            </span>
                                            </a>
                                        <?php } ?>
                                        <a href="mailto:<?php echo get_field('отдел_поставок', 'options')['почта']; ?>"
                                           class="item-contact__email">
                                            <svg>
                                                <use xlink:href="<?= layout(); ?>/img/sprite.svg#email-abg"></use>
                                            </svg>
                                            <span>
                                                <?php echo get_field('отдел_поставок', 'options')['почта']; ?>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if (get_field('facebook', 'options') or get_field('instagram', 'options')) { ?>
                                <div class="contact__item item-contact">
                                    <div class="item-contact__column">
                                        <div class="item-contact__title"><?php _e("Мы в соц. сетях:", "theme"); ?></div>
                                    </div>
                                    <div class="item-contact__column">
                                        <div class="item-contact__social">
                                            <?php if (get_field('facebook', 'options')) { ?>
                                                <a href="<?php echo get_field('facebook', 'options'); ?>"
                                                   target="_blank"
                                                   rel="nofollow" class="item-contact__social-link">
                                                    <svg>
                                                        <use xlink:href="<?= layout(); ?>/img/sprite.svg#facebook-abg"></use>
                                                    </svg>
                                                </a>
                                            <?php } ?>
                                            <?php if (get_field('instagram', 'options')) { ?>
                                                <a href="<?php echo get_field('instagram', 'options'); ?>"
                                                   target="_blank"
                                                   rel="nofollow"
                                                   class="item-contact__social-link">
                                                    <svg>
                                                        <use xlink:href="<?= layout(); ?>/img/sprite.svg#instagram-abg"></use>
                                                    </svg>
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="contact__image contact__image_black">
                        <img class="lazy" data-src="<?= layout(); ?>/img/black-pages/04.jpg" alt="foto">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <style>
        .footer_black .footer__body::before{
            height: 162px;
        }
    </style>
<?php get_footer(); ?>