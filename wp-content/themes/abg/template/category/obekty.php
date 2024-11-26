<main class="page page_black">
    <section class="page__hero hero hero_black">
        <img class="lazy" data-src="<?=layout();?>/img/new/IMG_2746.jpg" alt="foto">
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
    <section class="page__objects-page objects-page objects-page_black">
        <div class="container">
            <div class="objects-page__body">

                <?php
                $categories = get_categories( [
                    'taxonomy'     => 'category',
                    'type'         => 'post',
                    'child_of'     => $term->term_id,
                    'parent'       => '',
                    'orderby'      => 'name',
                    'order'        => 'ASC',
                    'hide_empty'   => 0,
                    'hierarchical' => 1,
                    'exclude'      => '',
                    'include'      => '',
                    'number'       => 0,
                    'pad_counts'   => false,
                ] );
                if( $categories ){ foreach( $categories as $cat ){ ?>

                        <div class="objects-page__column">
                            <a href="<?php echo get_category_link( $cat->term_id );?>"
                               class="objects-page__item objects-page__item_black">
                                <div class="objects-page__image">
                                    <img class="lazy"
                                         data-src="<?php echo get_field('фото', $cat)['sizes']['object__cat'];?>"
                                         alt="object">
                                </div>
                                <div class="objects-page__text">
                                    <?php echo $cat->name;?>
                                </div>
                            </a>
                        </div>
                <? } } ?>



                <div class="objects-page__column objects-page__column_form">
                    <?=get_template_part('/template/form/form1', null ,['class' => 'objects-page-form']); ?>
                </div>
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
</main>