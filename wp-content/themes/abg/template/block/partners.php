<?php if(get_field('партнеры', 'options')){ ?>
    <section class="page__partners partners partners_black">
        <div class="container">
            <div class="partners__title main-title main-title_white">
                <span><?php _e("Бизнес партнер", "theme"); ?></span>
            </div>
            <div class="partners__body">
                <div class="partners__slider _swiper">
                    <?php foreach(get_field('партнеры', 'options') as $item){ ?>
                        <div class="partners__slide">
                            <div class="partners__item item-partners">
                                <div class="item-partners__row">
                                    <div class="item-partners__info">
                                        <?php if($item['логотип']){ ?>
                                            <div class="item-partners__logo">
                                                <img class="swiper-lazy" data-src="<?=$item['логотип']['url'];?>" alt="logo">
                                            </div>
                                        <?php } ?>
                                        <?php if($item['описание']){ ?>
                                            <div class="item-partners__descr">
                                               <?php echo $item['описание']; ?>
                                            </div>
                                        <?php } ?>
                                        <?php if($item['ссылка']){ ?>
                                            <a href="<?php echo $item['ссылка'];?>" class="item-partners__link">
                                                <?php _e("Перейти на сайт партнера", "theme"); ?>
                                            </a>
                                        <?php } ?>
                                    </div>
                                    <?php if($item['фото']){ ?>
                                        <div class="item-partners__image">
                                            <img class="swiper-lazy" data-src="<?=$item['фото']['sizes']['object__image'];?>" alt="">
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php if(count(get_field('партнеры', 'options')) > 1){ ?>
                    <div class="partners__arrows arrows">
                        <div class="partners__arrow arrow partners__arrow_prev arrow_prev">
                            <svg>
                                <use xlink:href="<?=layout();?>/img/sprite.svg#arrow-long-abg"></use>
                            </svg>
                        </div>
                        <div class="partners__arrow arrow partners__arrow_next arrow_next">
                            <svg>
                                <use xlink:href="<?=layout();?>/img/sprite.svg#arrow-long-abg"></use>
                            </svg>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>

