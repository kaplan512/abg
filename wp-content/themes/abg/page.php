<?php get_header(); ?>

    <main class="page page_black">
        <section class="page__hero hero hero_black">
            <img class="lazy" data-src="<?=layout();?>/img/black-pages/01.png" alt="foto">
            <div class="container">
                <div class="hero__info">
                    <div class="hero__top">
                        <h1 class="hero__title">
                            <?php the_title(); ?>
                        </h1>
                    </div>
                    <a href="#modal-form" data-fancybox="" class="hero__btn btn btn_black btn-size btn-color__yellow">
                        <?php _e("Оставить заявку", "theme"); ?>
                    </a>
                </div>
            </div>
        </section>

        <section class="page__seo-block seo-block seo-block_black">
            <div class="container">
                <?php echo the_content();?>
            </div>
        </section>
    </main>
    <style>
        .footer_black .footer__body::before{
            content: none;
        }
    </style>
<?php get_footer(); ?>