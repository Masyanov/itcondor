<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kondor
 */

get_template_part('template-parts/header2');
?>

<main id="primary" class="site-main">

    <section class="single-service">
        <div class="container single-service__container">
            <?php get_template_part('template-parts/breadcrumb'); ?>
            <div class="section__header">
                <span></span>
                <h1 class="section__title"><?= get_the_title() ?></h1>
                <span></span>
            </div>

            <div class="single-service__main">
                <?= get_the_post_thumbnail(get_the_ID(), 'full') ?>
                <div class="desc">
                    <p><?= get_the_content() ?></p>
                </div>
            </div>

        </div>
    </section>
    <? $list = carbon_get_post_meta(get_the_ID(), 'list-project');?>
    <? foreach ($list as $list_project) : ?>
        <div class="projects-item" style="display: none;">
            <h3><?= $list_project['list-project-title'] ?></h3>
        </div>
    <? endforeach; ?>
    <?php if(($list_project['list-project-title'])!=""): ?>
    <section class="list-projects">
        <div class="section__header">
            <span></span>
            <h1 class="section__title">Список проектов</h1>
            <span></span>
        </div>
        <div class="container list-projects__container">


            <? $list = carbon_get_post_meta(get_the_ID(), 'list-project');?>

            <div class="single-service__projects">
                <? foreach ($list as $list_project) : ?>
                    <div class="projects-item">
                        <h3><?= $list_project['list-project-title'] ?></h3>
                        <span><?= $list_project['list-project-year'] ?></span>
                        <p><?= $list_project['list-project-desc'] ?></p>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </section>
    <? endif; ?>
    <?php get_template_part('template-parts/services-benefits'); ?>





    <?php get_template_part('template-parts/form'); ?>

</main><!-- #main -->



<?php get_template_part('template-parts/footer'); ?>
