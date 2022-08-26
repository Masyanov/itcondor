<?php
/*
Template Name: Вакансии
*/

get_template_part('template-parts/header2');
?>
    <main>

        <? $GLOBALS['vacancy'] = carbon_get_post_meta($post->ID,'vacancy');?>


        <section class="vacancy">
            <div class="container vacancy__container">
                <?php get_template_part( 'template-parts/breadcrumb' ); ?>
                <div class="section__header">
                    <span></span>
                    <h1 class="section__title">Вакансии</h1>
                    <span></span>
                </div>
                <div class="vacancy__list">
                    <? foreach ($GLOBALS['vacancy'] as $vacancy) : ?>
                        <div class="vacancy__item">
                            <?= wp_get_attachment_image($vacancy['vacancy-image'], 'full') ?>
                            <div class="vacancy__desc">
                            <h2><?=($vacancy ['vacancy-title']) ?></h2>
                            <p><?=($vacancy ['vacancy-desc']) ?></p>
                            </div>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>


        </section>

    </main><!-- #main -->


<?php get_template_part( 'template-parts/footer'); ?>