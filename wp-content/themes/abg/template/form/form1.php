<form id="form_<?php echo(rand(10000,99999));?>" class="<?php echo $args['class']; ?>">
    <div class="services-page-form__title"><?php _e("Хотите просчитать Ваш проект?!", "theme"); ?></div>
    <div class="services-page-form__subtitle">
        <?php _e("Оставьте заявку и наш менеджер <br/> свяжется с Вами для просчета", "theme"); ?>
    </div>
    <div class="services-page-form__line">
        <div class="services-page-form__inner">
            <input type="text"
                   name="name"
                   placeholder="<?php _e("Имя", "theme"); ?> *"
                   class="objects-page-form__input">
        </div>
    </div>
    <div class="services-page-form__line">
        <div class="services-page-form__inner">
            <input type="tel"
                   name="telephone"
                   placeholder="<?php _e("Ваш телефон", "theme"); ?> *"
                   class="objects-page-form__input">
        </div>
    </div>
    <div class="objects-page-form__bottom">
        <button type="submit" class="objects-page-form__btn btn btn_black btn-color__orange">
            <?php _e("Оставить заявку", "theme"); ?>
        </button>
    </div>

    <input type="hidden"
           name="utm_source"
           value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
    <input type="hidden"
           name="utm_medium"
           value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '' ;?>">
    <input type="hidden"
           name="utm_campaign"
           value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>">
    <input type="hidden"
           name="utm_content"
           value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : '' ;?>">
    <input type="hidden"
           name="utm_term"
           value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : '' ;?>">
    <input type="hidden"
           name="url"
           value="<?='https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
    <input type="hidden"
           name="ip"
           value="<?php echo $_SERVER['REMOTE_ADDR'];?>" />
    <input type="hidden"
           name="token"
           value="<?php echo(rand(10000,99999));?>" />
    <input type="hidden"
           name="language_code"
           value="<?php echo get_locale(); ?>" />
</form>
<style>
    .form__error-message{
        color: red;
        margin-bottom: 5px;
    }
    .footer_black .footer__body::before{
        content: none;
    }
</style>