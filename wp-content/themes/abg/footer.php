<footer class="footer footer_black">
    <div class="container">
        <div class="footer__body">
            <div class="footer__row">
                <div class="footer__logo">
                    <img class="lazy" data-src="<?=layout();?>/img/logo-black.svg" alt="logo">
                </div>
                <div class="footer__info">
                    <div class="footer__title">
                        <?php _e("Контакты", "theme"); ?>
                    </div>
                    <div class="footer__label">
                        <?php _e("ООО “АСТА БУД ГРУП”", "theme"); ?>
                    </div>
                </div>
                <?php if (get_field('главный_офис', 'options')['телефон_1'] or get_field('главный_офис', 'options')['телефон_2'] or get_field('главный_офис', 'options')['почта']) { ?>
                <div class="footer__contact">
                    <div class="footer__item item-footer">
                        <div class="item-footer__column">
                            <div class="item-footer__title"><?php _e("Главный офис:", "theme"); ?></div>
                        </div>
                        <div class="item-footer__column">
                            <div class="item-footer__phone">
                                <svg>
                                    <use xlink:href="<?=layout();?>/img/sprite.svg#phone-abg"></use>
                                </svg>
                                <a href="tel:<?php echo tel(get_field('главный_офис', 'options')['телефон_1']); ?>">
                                    <?php echo get_field('главный_офис', 'options')['телефон_1']; ?>
                                </a>
                            </div>
                            <div class="item-footer__phone">
                                <svg>
                                    <use xlink:href="<?=layout();?>/img/sprite.svg#phone-abg"></use>
                                </svg>
                                <a href="tel:<?php echo tel(get_field('главный_офис', 'options')['телефон_2']); ?>">
                                    <?php echo get_field('главный_офис', 'options')['телефон_2']; ?>
                                </a>
                            </div>
                            <div class="item-footer__phone">
                                <svg>
                                    <use xlink:href="<?=layout();?>/img/sprite.svg#phone-abg"></use>
                                </svg>
                                <a href="tel:<?php echo tel(get_field('главный_офис', 'options')['телефон_3']); ?>">
                                    <?php echo get_field('главный_офис', 'options')['телефон_3']; ?>
                                </a>
                            </div>
                            <div class="item-footer__email">
                                <svg>
                                    <use xlink:href="<?=layout();?>/img/sprite.svg#email-abg"></use>
                                </svg>
                                <a href="mailto:<?php echo get_field('главный_офис', 'options')['почта']; ?>">
                                    <?php echo get_field('главный_офис', 'options')['почта']; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="footer__contact">
                    <?php if (get_field('отдел_поставок', 'options')['телефон_1'] or get_field('отдел_поставок', 'options')['почта']) { ?>
                        <div class="footer__item item-footer">
                        <div class="item-footer__column">
                            <div class="item-footer__title"><?php _e("Отдел поставок:", "theme"); ?></div>
                        </div>
                        <div class="item-footer__column">
                            <?php if(get_field('отдел_поставок', 'options')['телефон_1']){ ?>
                                <div class="item-footer__phone">
                                    <svg>
                                        <use xlink:href="<?=layout();?>/img/sprite.svg#phone-abg"></use>
                                    </svg>
                                    <a href="tel:<?php echo tel(get_field('отдел_поставок', 'options')['телефон_1']); ?>">
                                        <?php echo get_field('отдел_поставок', 'options')['телефон_1']; ?>
                                    </a>
                                </div>
                            <?php } ?>
                            <div class="item-footer__email">
                                <svg>
                                    <use xlink:href="<?=layout();?>/img/sprite.svg#email-abg"></use>
                                </svg>
                                <a href="mailto:<?php echo get_field('отдел_поставок', 'options')['почта']; ?>">
                                    <?php echo get_field('отдел_поставок', 'options')['почта']; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if(get_field('facebook', 'options') OR get_field('instagram', 'options')){ ?>
                        <div class="item-footer__social">
                            <?php if (get_field('facebook', 'options')) { ?>
                                <a href="<?php echo get_field('facebook', 'options'); ?>"
                                   target="_blank"
                                   rel="nofollow" class="item-footer__social-link">
                                    <svg>
                                        <use xlink:href="<?= layout(); ?>/img/sprite.svg#facebook-abg"></use>
                                    </svg>
                                </a>
                            <?php } ?>
                            <?php if (get_field('instagram', 'options')) { ?>
                                <a href="<?php echo get_field('instagram', 'options'); ?>"
                                   target="_blank"
                                   rel="nofollow"
                                   class="item-footer__social-link">
                                    <svg>
                                        <use xlink:href="<?= layout(); ?>/img/sprite.svg#instagram-abg"></use>
                                    </svg>
                                </a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="footer__bottom">
                <div class="footer__data">© <?php _e("ООО “АСТА БУД ГРУП”", "theme"); ?>, <?php echo date('Y'); ?></div>
            </div>
        </div>
    </div>
</footer>
</div>

<div class="callback" style="display: none;" id="modal-form">
    <div class="callback__title">
        <?php _e("Заказать звонок!", "theme"); ?>
    </div>
    <div class="callback__sub-title">
        <?php _e("Оставьте заявку и наш менеджер <br/> свяжется с Вами для просчета", "theme"); ?>
    </div>

    <?=get_template_part('/template/form/modal', null); ?>
</div>
<div class="thank-you" style="display: none;" id="modal-thanks">
    <div class="thank-you__body">
        <div class="thank-you__icon">
            <img class="lazy" data-src="<?=layout();?>/img/black-pages/16.svg" alt="icon">
        </div>
        <div class="thank-you__title">
            <?php _e("Спасибо за заявку!", "theme"); ?>
        </div>
        <div class="thank-you__sub-title">
            <?php _e("Наш менеджер свяжется с вами в ближайшее время", "theme"); ?>
        </div>
    </div>
</div>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arsenal:wght@400;700&display=swap" rel="stylesheet">
<script src="<?=layout();?>/js/vendors.min.js"></script>
<script src="<?=layout();?>/js/app.min.js"></script>
<?php wp_footer(); ?>
<script>
    let validate = {
        event: function () {
            $('input, textarea').keyup(function () {
                $(this).parent('.form__inner').find('.form__error-message').remove();
                $(this).parent('.form__inner').removeClass('_error');
            });
        },
        adds: function (array) {
            $.each(array, function (index, value) {
                let message = '';
                if (Array.isArray(value) === true) {
                    $.each(value, function (index, element) {
                        message += '<div class="form__error-message">' + element + '</div>';
                    });
                } else {
                    message = '<div class="form__error-message">' + value + '</div>';
                }

                if ($('input[name="' + index + '"]').length) {
                    $('input[name="' + index + '"]').parent('div').addClass('_error');
                    $('input[name="' + index + '"]').parent('div').append(message);
                }
                if ($('textarea[name="' + index + '"]').length) {
                    $('textarea[name="' + index + '"]').parent('div').addClass('_error');
                    $('textarea[name="' + index + '"]').parent('div').append(message);
                }
                if ($('select[name="' + index + '"]').length) {
                    $('select[name="' + index + '"]').parent('div').addClass('_error');
                    $('select[name="' + index + '"]').parent('div').append(message);
                }
            });
        },
        remove_old: function (array) {
            $('.form__error-message').remove();
            $('._error').removeClass('_error');
            $.each(array, function (index, value) {
                if ($('input[name="' + index + '"]').length) {
                    $('input[name="' + index + '"]').parent('div').find('.form__error-message').remove();
                    $('input[name="' + index + '"]').parent('div').removeClass('_error');
                }
                if ($('textarea[name="' + index + '"]').length) {
                    $('textarea[name="' + index + '"]').parent('div').find('.form__error-message').remove();
                    $('textarea[name="' + index + '"]').parent('div').removeClass('_error');
                }
                if ($('select[name="' + index + '"]').length) {
                    $('select[name="' + index + '"]').parent('div').find('.form__error-message').remove();
                    $('select[name="' + index + '"]').parent('div').removeClass('_error');
                }
            });
        },
    };

    $('form[id^="form_"]').submit(function (e) {
        let form = '#' + e.target.id;
        let $data = $(form).serializeArray();
        $.ajax({
            url: '/wp-content/themes/abg/send/index.php',
            type: 'POST',
            data: $data,
            dataType: 'json',
            success: function (json) {
                if (json['success']) {
                    $.fancybox.close();
                    $(form + ' button').prop('disabled', true);
                    $(form + ' button').css('opacity', '0.5');
                    $(form + ' input').val('');
                    $(form + ' textarea').val('');
                    $(form + ' ._error').removeClass('_error');
                    $(form + ' .form__error-message').remove();


                    $.fancybox.open({
                        src: '#modal-thanks',
                        type: 'inline',
                    });
                }

                if (json['errors']) {
                    validate.remove_old(json['errors']);
                    validate.adds(json['errors']);
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
        e.preventDefault();
    })
</script>
<style>
    ._error input {
        border-bottom: 2px solid #c22c2c;
    }

    @media (min-width: 768px) {
        .item-partners__image{
            flex: 0 0 46%;
            position: relative;
            padding: 0px 0px 50% 0px;
        }
        .objects-page__image{
            height: 300px;
            overflow: hidden;
        }
        .objects-page__image img{
            height: auto;
        }
        .objects-page__text{
            position: relative;
        }
    }
    @media (min-width: 1600px){
        .partners_black .partners__body::after {
            height: 150%;
        }
    }
</style>
</body>

</html>