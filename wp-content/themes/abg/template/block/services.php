<?php
$query = new WP_Query([
        'nopaging' => 1,
        'cat' => gpid('services')
]);
?>
<?php if($query->have_posts()){ ?>
    <section class="page__for-services for-services for-services_black">
        <div class="container">
            <div class="for-services__title main-title main-title_white">
            <span>
                <?php _e("Наші послуги", "theme"); ?>
            </span>
            </div>
            <div class="for-services__body">
                <div class="for-services__column-min">
                    <?php $i = 0; while( $query->have_posts() ){ $query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="for-services__item for-services__item_black">
                            <div class="for-services__image">
                                <img class="lazy"
                                     data-src="<?php echo get_field('превью_фото', get_the_ID())['sizes']['services-thumb-big']; ?>"
                                     alt="foto">
                            </div>
                            <div class="for-services__text">
                                <span><?php the_title(); ?></span>
                                <div class="for-services__arrow">
                                    <svg>
                                        <use xlink:href="<?=layout();?>/img/sprite.svg#arrow-long-abg"></use>
                                    </svg>
                                </div>
                            </div>
                        </a>

                        <?php if($i === 1){ break; }  $i++;} ?>
                </div>
                <div class="for-services__column-big">
                    <div class="for-services__row">
                        <?php $i = 0; while( $query->have_posts() ){ $query->the_post(); ?>

                            <?php if($i >= 0){ ?>
                                <div class="for-services__column-mini">
                                    <a href="<?php the_permalink(); ?>" class="for-services__item for-services__item_mini for-services__item_black">
                                        <div class="for-services__image">
                                            <img class="lazy"
                                                 data-src="<?php echo get_field('превью_фото', get_the_ID())['sizes']['services-thumb-min']; ?>"
                                                 alt="foto">
                                        </div>
                                        <div class="for-services__text">
                                            <span><?php the_title(); ?></span>
                                            <div class="for-services__arrow">
                                                <svg>
                                                    <use xlink:href="<?=layout();?>/img/sprite.svg#arrow-long-abg"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>

                            <?php if($i === 9){ break; }  $i++;} ?>

                        <div class="for-services__column-mini">
                            <div class="for-services__item for-services__item_last">
                                <a href="<?php echo get_category_link(gpid('services')); ?>" class="for-services__btn btn btn_black btn-color__orange">
                                    <?php _e("Смотреть все услуги", "theme"); ?>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php wp_reset_postdata();} ?>