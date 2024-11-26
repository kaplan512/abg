<?php

$categories = get_categories([
    'taxonomy' => 'category',
    'type' => 'post',
    'child_of' => gpid('obekty'),
    'parent' => '',
    'orderby' => 'name',
    'order' => 'ASC',
    'hide_empty' => 1,
    'hierarchical' => 1,
    'exclude' => '',
    'include' => '',
    'number' => 0,
    'pad_counts' => false,
]);

?>


<?php if ($categories) { ?>
    <section class="page__objects objects objects_black">
        <div class="container">
            <div class="objects__header">
                <div class="objects__title main-title main-title_white">
                <span>
                    <?php echo get_cat_name(gpid('obekty')); ?>
                </span>
                </div>
                <a href="<?php echo get_category_link(gpid('obekty')); ?>" class="objects__all">
                    <?php _e("Смотреть все объекты", "theme"); ?>
                </a>
            </div>
            <div class="objects__body">
                <div class="objects__top">
                    <?php $i = 0;
                    foreach ($categories as $category) { ?>
                        <button class="objects__button <?php echo $i === 0 ? '_active' : ''; ?>">
                            <?php echo $category->name; ?>
                        </button>
                        <?php $i++;
                    } ?>
                </div>
                <div class="objects__bottom">
                    <?php $i = 0;
                    foreach ($categories as $category) {
                        $query2 = new WP_Query([
                            'nopaging' => 1,
                            'posts_per_page' => 5,
                            'cat' => $category->term_id
                        ]);
                        ?>
                        <?php if ($query2->have_posts()) { ?>
                            <div class="objects__item <?php echo $i === 0 ? '_active' : ''; ?>">
                                <div class="objects__slider _swiper">
                                    <?php $i2 = 0; while ($query2->have_posts()) {
                                        $query2->the_post(); ?>
                                        <div class="objects__slide">
                                            <div class="object__item item-object">
                                                <div class="item-object__row">
                                                    <div class="item-object__image">
                                                        <img class="lazy" data-src="<?=get_field('галерея')[0]['url'];?>" alt="">
                                                    </div>
                                                    <div class="slide-item__info info-item">
                                                        <div class="info-object__column-left">
                                                            <div class="info-object__title">
                                                                <?php echo get_the_title(); ?>
                                                            </div>
                                                            <div class="info-object__address">
                                                                <?php echo get_field('подзаголовок'); ?>
                                                            </div>
                                                            <a href="#"
                                                               onclick="photos_<?=$category->term_id.$i.$i2;?>(); return false"
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
                                            function photos_<?=$category->term_id.$i.$i2;?> (){
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
                                    <?php $i2++;} ?>
                                </div>
                            </div>
                            <div class="objects__arrows arrows <?php echo $i === 0 ? '_active' : ''; ?>">
                                <div class="objects__arrow arrow objects__arrow_prev arrow_prev">
                                    <svg>
                                        <use xlink:href="<?= layout(); ?>/img/sprite.svg#arrow-long-abg"></use>
                                    </svg>
                                </div>
                                <div class="objects__arrow arrow objects__arrow_next arrow_next">
                                    <svg>
                                        <use xlink:href="<?= layout(); ?>/img/sprite.svg#arrow-long-abg"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="objects__dotts <?php echo $i === 0 ? '_active' : ''; ?>"></div>
                            <?php wp_reset_postdata();
                        } ?>
                        <?php $i++;
                    } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>