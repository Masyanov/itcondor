<?php
/*
Template Name: О компании
*/

get_template_part('template-parts/header2');
?>

<main>

    <section class="about">
        <div class="container about__container">
            <?php get_template_part( 'template-parts/breadcrumb' ); ?>

            <div class="section__header">
                <span></span>
                <h1 class="section__title">О компании</h1>
                <span></span>
            </div>

            <div class="about-top">
                <img src="<?= carbon_get_post_meta(get_the_ID(), 'main-image') ?>" alt="">
                <div class="desc">
                    <p><?= carbon_get_post_meta(get_the_ID(), 'desc')?></p>
                </div>
            </div>

            <div class="section__header">
                <h1 class="section__sub-title">Кондор предлагает</h1>
            </div>

            <div class="about__img-block">
                <div class="about__img-block-item">
                    <img src="<?= carbon_get_post_meta(get_the_ID(), 'image1') ?>" alt="">
                    <h2><?= carbon_get_post_meta(get_the_ID(), 'title-card1') ?></h2>
                    <p><?= carbon_get_post_meta(get_the_ID(), 'desc-card1') ?></p>
                </div>
                <div class="about__img-block-item">
                    <img src="<?= carbon_get_post_meta(get_the_ID(), 'image2') ?>" alt="">
                    <h2><?= carbon_get_post_meta(get_the_ID(), 'title-card2') ?></h2>
                    <p><?= carbon_get_post_meta(get_the_ID(), 'desc-card2') ?></p>
                </div>
                <div class="about__img-block-item">
                    <img src="<?= carbon_get_post_meta(get_the_ID(), 'image3') ?>" alt="">
                    <h2><?= carbon_get_post_meta(get_the_ID(), 'title-card3') ?></h2>
                    <p><?= carbon_get_post_meta(get_the_ID(), 'desc-card3') ?></p>
                </div>
            </div>
            <div class="about__center-desc">
                <p><?= carbon_get_post_meta(get_the_ID(), 'text-center')?></p>
            </div>




            <div class="section__header">
                <h1 class="section__sub-title">Благодарственные письма</h1>
            </div>

            <div class="gallery">
                <? $objectsGallery = carbon_get_post_meta(get_the_ID(), 'object_gallery') ?>

                <? foreach ($objectsGallery as $item): ?>
                <div class="gallery-item">
					<img data-fancybox src="<?= $item['object_gallery_image'] ?>" alt="">
                </div>
                <? endforeach; ?>
            </div>
        </div>


    </section>


    <?php get_template_part( 'template-parts/form');?>

    </div>

</main>

<?php get_template_part('template-parts/footer'); ?>
