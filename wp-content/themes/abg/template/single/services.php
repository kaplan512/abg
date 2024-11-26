<main class="page page_black">
    <section class="page__hero hero hero_black">
        <img class="lazy" data-src="<?php echo !empty(get_field('фон')) ? get_field('фон')['sizes']['services-background'] : layout().'/img/hero/08.jpg' ;?>">
        <div class="container">
            <div class="hero__info">
                <div class="hero__top">
                    <h1 class="hero__title">
                        <?php echo get_the_title(); ?>
                    </h1>
                    <div class="breadcrumb">
                        <?php breadcrumbs(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php if(get_field('блок_1')['заголовок'] OR get_field('блок_1')['описание']){ ?>
        <section class="page__info-block info-block info-block_black">
            <div class="container">
                <div class="info-block__body">
                    <div class="info-block__column-left">
                        <div class="info-block__content">
                            <?php if(get_field('блок_1')['заголовок']){ ?>
                                <div class="info-block__title">
                                    <?php echo get_field('блок_1')['заголовок']; ?>
                                </div>
                            <?php } ?>
                            <?php if(get_field('блок_1')['описание']){ ?>
                                <div class="info-block__text">
                                    <?php echo get_field('блок_1')['описание']; ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if(get_field('блок_1')['фото']){ ?>
                        <div class="info-block__column-right">
                            <div class="info-block__image">
                                <img class="lazy"
                                     data-src="<?php echo get_field('блок_1')['фото']['sizes']['services-block-1'] ;?>"
                                     alt="foto">
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>
    <?php if(get_field('блок_2')){ ?>
        <section class="page__benefit benefit benefit_black">
            <div class="container">
                <div class="benefit__body">
                    <?php foreach(get_field('блок_2') as $item){ ?>
                        <div class="benefit__column">
                            <div class="benefit__item">
                                <div class="benefit__icon">
                                    <img class="lazy" data-src="<?php echo $item['иконка']['url'];?>" alt="icon">
                                </div>
                                <div class="benefit__title">
                                    <?php echo $item['заголовок'];?>
                                </div>
                                <div class="benefit__text">
                                    <?php echo $item['описание'];?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>
    <?php if(get_field('блок_3')['заголовок'] OR get_field('блок_3')['описание'] OR get_field('блок_3')['заголовок_справа'] OR get_field('блок_3')['описание_справа']){ ?>
    <div class="info-block info-block_black">
        <div class="container">
            <div class="info-block__body info-block__body_revers">
                <?php if(get_field('блок_3')['заголовок'] OR get_field('блок_3')['описание']){ ?>
                    <div class="info-block__column-left">
                    <div class="info-block__content">
                        <div class="info-block__text">
                            <?php if(get_field('блок_3')['заголовок']){ ?>
                                <div class="info-block__sub-title">
                                    <?php echo get_field('блок_3')['заголовок']; ?>
                                </div>
                            <?php } ?>
                            <?php echo get_field('блок_3')['описание']; ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php if(get_field('блок_3')['заголовок_справа'] OR get_field('блок_3')['описание_справа']){ ?>
                    <div class="info-block__column-right">
                    <div class="info-block__content">
                        <?php if(get_field('блок_3')['заголовок_справа']){ ?>
                            <div class="info-block__sub-title">
                                <?php echo get_field('блок_3')['заголовок_справа']; ?>
                            </div>
                        <?php } ?>
                        <div class="info-block__text">
                        <?php echo get_field('блок_3')['описание_справа']; ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php if(get_field('блок_4')['заголовок'] OR get_field('блок_4')['описание']){ ?>
        <section class="page__info-block info-block info-block_black">
            <div class="container">
                <div class="info-block__body info-block__body_revers">
                    <div class="info-block__column-left">
                        <div class="info-block__content">
                            <?php if(get_field('блок_4')['заголовок']){ ?>
                                <div class="info-block__title">
                                    <?php echo get_field('блок_4')['заголовок']; ?>
                                </div>
                            <?php } ?>
                            <?php if(get_field('блок_4')['описание']){ ?>
                                <div class="info-block__text">
                                    <?php echo get_field('блок_4')['описание']; ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if(get_field('блок_4')['фото']){ ?>
                        <div class="info-block__column-right">
                            <div class="info-block__image">
                                <img class="lazy"
                                     data-src="<?php echo get_field('блок_4')['фото']['sizes']['services-block-1'] ;?>"
                                     alt="foto">
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>


    <?=get_template_part('/template/block/obekty', null ); ?>
</main>