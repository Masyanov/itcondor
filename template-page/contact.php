<?php
/*
Template Name: Контакты
*/

get_template_part('template-parts/header2');
?>

<main>




    <? $contacts = carbon_get_post_meta(get_the_ID(), 'contacts'); ?>


    <section class="contacts">
        <div class="container contacts__container">
            <?php get_template_part( 'template-parts/breadcrumb' ); ?>
            <div class="section__header">
                <span></span>
                <h1 class="section__title">Контакты</h1>
                <span></span>
            </div>
            <div class="contacts__content">
                    <div class="contacts__content-block">
                        <h2>Контактный телефон:</h2>
                        <p><?= carbon_get_post_meta(get_the_ID(), 'phone')?></p>
                        <h2>Электронная почта:</h2>
                        <p><?= carbon_get_post_meta(get_the_ID(), 'email')?></p>
                        <a class="contacts__btn" href="<? $file = carbon_get_the_post_meta(get_the_ID(), 'file' );?>">Скачать реквизиты</a>
                    </div>

                    <div class="contacts__content-block">
                        <h2>Время работы:</h2>
                        <p><?= carbon_get_post_meta(get_the_ID(), 'time')?></p>
                        <h2>Адрес:</h2>
                        <p><?= carbon_get_post_meta(get_the_ID(), 'adress')?></p>
                    </div>

            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/form');?>

    </div>

</main>

<?php get_template_part('template-parts/footer'); ?>
