<?php
/*
Template Name: Объекты
*/

get_template_part('template-parts/header2');
?>
    <main>



        <section class="objects">
            <div class="container objects__container">
                <?

                $categories = get_categories([
                    'taxonomy' => 'object-categories',
                    'type' => 'post',
                    'child_of' => 0,
                    'parent' => '',
                    'orderby' => 'name',
                    'order' => 'DESC',
                    'hide_empty' => 1,
                    'hierarchical' => 1,
                    'exclude' => '',
                    'include' => '',
                    'number' => 0,
                    'pad_counts' => false,
                ]);
                ?>

                <div class="section__header">
                    <span></span>
                    <h1 class="section__title">Реализованные проекты</h1>
                    <span></span>
                </div>

                <? foreach ($categories as $idx => $category): ?>
                    <?
                    $home_posts = get_posts([
                            'numberposts' => -1,
                            'post_type' => 'object',
                            'tax_query' => [
                                [
                                    'taxonomy' => 'object-categories',
                                    'field' => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
                                    'terms' => $category->term_id,
                                ]
                            ],
                            'orderby' => 'date',
                            'order' => 'ASC',
                        ]
                    );
                    ?>

                    <!-- Slider main container -->
                    <div class="swiper swiper-object">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <? foreach ($home_posts as $home_post) :?>
                                <div class="swiper-slide">

                                    <div class="desc">
                                        <h2 class="object-desc"><?= $home_post->post_title ?></h2>
                                        <p class="object-adress"><?= carbon_get_post_meta($home_post->ID, 'adress') ?></p>
                                    </div>
                                    <div class="desc-object">
                                        <p><?= $home_post->post_content ?></p>
                                    </div>
                                    <div class="main-img">
                                        <?= get_the_post_thumbnail($home_post->ID, 'full') ?>
                                    </div>
                                    <!--                            <div class="gallery">-->
                                    <!--                                --><?// $objectsGallery = carbon_get_post_meta($home_post->ID, 'object_gallery') ?>
                                    <!---->
                                    <!--                                --><?// foreach ($objectsGallery as $item): ?>
                                    <!--                                    --><?//= wp_get_attachment_image($item['object_gallery_image'], 'large') ?>
                                    <!--                                --><?// endforeach; ?>
                                    <!--                            </div>-->
                                </div>
                            <? endforeach; ?>

                        </div>
                        <div class="swiper-wrapper-nav">
                            <div class="swiper-button-prev swiper-object-button-prev">
                                <svg width="27" height="18" viewBox="0 0 27 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.11599 0.942058C9.57224 0.527126 10.312 0.527126 10.7682 0.942058C11.2245 1.35699 11.2245 2.02973 10.7682 2.44466L4.58453 8.06836H25.5442C26.1249 8.06836 26.5957 8.54406 26.5957 9.13086C26.5957 9.71766 26.1249 10.1934 25.5442 10.1934H4.58453L10.7682 15.8171C11.2245 16.232 11.2245 16.9047 10.7682 17.3197C10.312 17.7346 9.57224 17.7346 9.11599 17.3197L0.937891 9.88216C0.481638 9.46723 0.481638 8.79449 0.937891 8.37956L9.11599 0.942058Z" fill="black"/>
                                </svg>
                                <span>Предыдущий проект</span>
                            </div>
                            <div class="swiper-button-next swiper-object-button-next">
                                <span>Следующий проект</span>
                                <svg width="27" height="18" viewBox="0 0 27 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.052 0.942058C17.5957 0.527126 16.856 0.527126 16.3997 0.942058C15.9435 1.35699 15.9435 2.02973 16.3997 2.44466L22.5834 8.06836H1.62374C1.04303 8.06836 0.572266 8.54406 0.572266 9.13086C0.572266 9.71766 1.04303 10.1934 1.62374 10.1934H22.5834L16.3997 15.8171C15.9435 16.232 15.9435 16.9047 16.3997 17.3197C16.856 17.7346 17.5957 17.7346 18.052 17.3197L26.2301 9.88216C26.6863 9.46723 26.6863 8.79449 26.2301 8.37956L18.052 0.942058Z" fill="black"/>
                                </svg>

                            </div>
                        </div>
                    </div>

                <? endforeach; ?>

            </div>
        </section>

        <?php get_template_part( 'template-parts/form');?>

        </div>

    </main>

<?php get_template_part('template-parts/footer'); ?>