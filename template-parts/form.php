<div class="form-block">
    <div class="container form-block__container">
        <div class="form-block__content">
        <? $GLOBALS['form'] = carbon_get_theme_option( 'form' ); ?>
            <h2>Заказать выезд</h2>
            <p class="form-desc">Заполните форму, оставьте номер телефона, и мы свяжемся с вами в день заявки, предоставим бесплатную консультацию и ответим на все ваши вопросы. Обговорив все нюансы, мы совместно выберем дату для выезда на ваш объект.</p>
            <?= do_shortcode($GLOBALS['form']) ?>
        </div>
        <div class="image"></div>
    </div>
    <div class="map-title">
        <div class="container">
            <h2>Мы на карте</h2>
        </div>
    </div>
    <? $GLOBALS['map'] = carbon_get_theme_option( 'map' ); ?>
    <div class="form-block-map">
        <?= do_shortcode($GLOBALS['map']) ?>
    </div>
</div>