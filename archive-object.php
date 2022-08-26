<?php
/*
Template Name: Проекты
*/

get_template_part('template-parts/header');
?>
    <main>



        <section class="objects">



            <div class="container objects__container">
                <?php get_template_part( 'template-parts/breadcrumb' ); ?>
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
                    <h1 class="section__title">Наши проекты</h1>
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

                    <ul class="objects__list">
                        <? foreach ($home_posts as $home_post) :?>
                            <li class="objects__item">
                                <?= get_the_post_thumbnail($home_post->ID, 'full') ?>
                                <div class="desc">
                                    <h2><?= $home_post->post_title ?></h2>
                                    <p class="object-adress"><?= $home_post->adress ?></p>
                                    <p class="object-desc"><?= $home_post->post_content ?></p>
                                    <div class="block-btn">
                                        <span></span>
                                        <a href="<?= get_permalink($home_post->ID) ?>">Подробнее
                                            <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0368 0.384422C11.4498 -0.128141 10.4979 -0.128141 9.91088 0.384422C9.32382 0.896985 9.32382 1.72801 9.91088 2.24058L17.8675 9.1875H1.35294C0.605732 9.1875 0 9.77513 0 10.5C0 11.2249 0.605732 11.8125 1.35294 11.8125H17.8675L9.91088 18.7594C9.32382 19.272 9.32382 20.103 9.91088 20.6156C10.4979 21.1281 11.4498 21.1281 12.0368 20.6156L22.5597 11.4281C23.1468 10.9155 23.1468 10.0845 22.5597 9.57192L12.0368 0.384422Z" fill="#0083CF"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        <? endforeach; ?>
                    </ul>
                <? endforeach; ?>
            </div>
        </section>

        <?php get_template_part( 'template-parts/benefits'); ?>

        <?php get_template_part( 'template-parts/form'); ?>

    </main><!-- #main -->


<?php get_template_part( 'template-parts/footer'); ?>