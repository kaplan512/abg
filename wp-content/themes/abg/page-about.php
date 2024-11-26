<?
/*
Template Name: О нас
Template Post Type: page
*/
?>
<?php get_header(); ?>
    <main class="page page_black">
        <section class="page__hero hero hero_black">
            <img class="lazy" data-src="<?=layout();?>/img/black-pages/o_nas.jpg" alt="foto">
            <div class="container">
                <div class="container">
                    <div class="hero__info">
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
        <section class="page__about-us about-us about-us_black">
            <div class="container">
                <div class="about-us__body">
                    <?php foreach(get_field('преимущества') as $item){ ?>
                        <div class="about-us__column">
                            <div class="about-us__item">
                                <div class="about-us__icon">
                                    <img class="lazy" data-src="<?=$item['иконка']['url'];?>" alt="icon">
                                </div>
                                <div class="about-us__title">
                                    <?=$item['заголовок'];?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php if(get_field('описание')){ ?>
                    <div class="about-us__text">
                        <?php echo get_field('описание'); ?>
                    </div>
                <?php } ?>
            </div>
        </section>
        <?=get_template_part('/template/block/obekty', null ); ?>
        <?=get_template_part('/template/block/maps', null ); ?>
        <?=get_template_part('/template/block/partners', null ); ?>
    </main>
<?php get_footer(); ?>