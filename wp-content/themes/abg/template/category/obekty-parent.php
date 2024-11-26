<main class="page page_black">
    <section class="page__hero hero hero_black">
        <img class="lazy" data-src="<?php echo get_field('фото_фон', $term)['url'];?>" alt="">
        <div class="container">
            <div class="hero__info">
                <div class="hero__top">
                    <h1 class="hero__title">
                        <?php echo get_cat_name($term->term_id);?>
                    </h1>
                    <div class="breadcrumb">
                        <?php breadcrumbs(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page__medical-object object object_black">
        <div class="container">
            <div class="object__body">
                <?php
                if( have_posts() ){ $i = 0; while( have_posts() ){the_post();
                ?>
                    <div class="object__line">
                        <div class="object__item item-object">
                            <div class="item-object__row <?php echo even($i) == false ? 'item-object__row_revers' : ''; ?>">
                                <div class="item-object__image">
                                    <img class="lazy" data-src="<?=get_field('галерея')[0]['url'];?>" alt="">
                                </div>
                                <div class="item-object__info info-object">
                                    <div class="info-object__column-left">
                                        <div class="info-object__title">
                                            <?php echo get_the_title(); ?>
                                        </div>
                                        <div class="info-object__address">
                                            <?php echo get_field('подзаголовок'); ?>
                                        </div>
                                        <a href="#"
                                           onclick="photos_<?=$i;?>(); return false"
                                           class="info-object__link">
                                            <span>
                                                <?php _e("Посмотреть больше фото объекта", "theme"); ?>
                                            </span>
                                            <svg>
                                                <use xlink:href="<?=layout();?>/img/sprite.svg#arrow-long-abg"></use>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="info-object__column-right">
                                        <div class="info-object__logo">
                                            <?php if(get_field('логотип_1')){ ?>
                                                <img class="lazy"
                                                     data-src="<?=get_field('логотип_1');?>"
                                                     alt="">
                                            <?php } ?>
                                            <?php if(get_field('логотип_2')){ ?>
                                                <img class="lazy"
                                                     data-src="<?=get_field('логотип_2');?>"
                                                     alt="">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        function photos_<?=$i;?> (){
                            $.fancybox.open([

                                <?php foreach(get_field('галерея') as $item){ ?>
                                {
                                    src  : '<?=$item['url'];?>',
                                },
                                <?php } ?>

                            ], {
                                loop : false
                            });
                        }
                    </script>

                <?php $i++;} ?>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php if(category_description()){ ?>
        <section class="page__seo-block seo-block seo-block_black">
            <div class="container">
                <?php echo category_description(); ?>
            </div>
        </section>
    <?php } ?>
    <style>
        .footer_black .footer__body::before{
            content: none;
        }
    </style>
</main>