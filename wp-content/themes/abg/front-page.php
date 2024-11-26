<?php get_header(); ?>

    <main class="page page_black">
        <?php if(get_field('первый_экран')['заголовок'] OR get_field('первый_экран')['подзаголовок']){ ?>
            <section class="page__hero hero hero_black">
                <img class="lazy" data-src="<?=layout();?>/img/new/IMG_0326-2.jpg" alt="foto">
                <div class="container">
                    <div class="hero__info">
                        <div class="hero__top">
                            <h1 class="hero__title">
                                <?php echo get_field('первый_экран')['заголовок']; ?>
                            </h1>
                            <div class="hero__sub-title">
                                <?php echo get_field('первый_экран')['подзаголовок']; ?>
                            </div>
                        </div>
                        <a href="#modal-form" data-fancybox="" class="hero__btn btn btn_black btn-size btn-color__yellow">
                            <?php _e("Оставить заявку", "theme"); ?>
                        </a>
                    </div>
                </div>
            </section>
        <?php } ?>
        <?php if(get_field('второй_блок')['заголовок'] OR get_field('второй_блок')['описание']){ ?>
            <section class="page__for-company for-company for-company_black">
                <div class="container">
                    <div class="for-company__row">
                        <div class="for-company__image">
                            <img class="lazy" data-src="<?=layout();?>/img/for-company/02.png" alt="logo company">
                        </div>
                        <div class="for-company__info">
                            <div class="for-company__title main-title main-title_white">
                                <span>
                                    <?php echo get_field('второй_блок')['заголовок']; ?>
                                </span>
                            </div>
                            <div class="for-company__text sroll-block">
                                <?php echo get_field('второй_блок')['описание']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>
        <?=get_template_part('/template/block/services', null ); ?>
        <?=get_template_part('/template/block/obekty', null ); ?>
        <?=get_template_part('/template/block/maps', null ); ?>
        <?=get_template_part('/template/block/partners', null ); ?>
        <?php if(get_field('seo')['описание']){ ?>
            <section class="page__seo-block seo-block seo-block_black">
                <div class="container">
                    <?php echo get_field('seo')['описание'];?>
                </div>
            </section>
        <?php } ?>
    </main>

<?php get_footer(); ?>