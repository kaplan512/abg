<main class="page page_black">
    <section class="page__hero hero hero_black">
        <img class="lazy" data-src="<?=layout();?>/img/black-pages/07.jpg" alt="">
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

    <section class="page__services-page services-page services-page_black">
        <div class="container">
            <div class="services-page__body">
                <?php
                if( have_posts() ){
                while( have_posts() ){
                the_post();
                ?>
                    <div class="services-page__column">
                        <a href="<?php the_permalink(); ?>" class="services-page__item services-page__item_black">
                            <div class="services-page__image">
                                <img class="lazy"
                                     data-src="<?php echo get_field('превью_фото', get_the_ID())['sizes']['services-category']; ?>"
                                     alt="object">
                            </div>
                            <div class="services-page__text">
                                <?php the_title(); ?>
                            </div>
                        </a>
                    </div>
                <?php } ?>
                <?php } else { echo "<h2>Записей нет.</h2>";} ?>
                <div class="services-page__column services-page__column_form">
                    <?=get_template_part('/template/form/form2', null ,['class' => 'services-page-form']); ?>
                </div>
            </div>
        </div>
    </section>

    <?php if(category_description()){ ?>
        <section class="page__seo-block seo-block">
            <div class="container">
                <?php echo category_description(); ?>
            </div>
        </section>
    <?php } ?>
</main>