<?php get_header(); ?>
<main class="page">
    <section class="page__error error-page">
        <div class="container">
            <div class="error-page__body">
                <div class="error-page__content">
                    <div class="error-page__title">404</div>
                    <div class="error-page__sub-title"><?php _e("Оййй...", "theme"); ?></div>
                    <div class="error-page__text">
                        <?php _e("Мы сожалеем, но страница на которую Вы пытались перейти не существует. Попробуйте, пожалуйста вернуться на главную страницу или воспользуйтесь меню сайта.", "theme"); ?>
                    </div>
                </div>
                <div class="error-page__bottom">
                    <a href="<?php echo get_home_url();?>" class="error-page__btn btn btn-color__yellow">
                       <?php _e("Вернуться на главную", "theme"); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>