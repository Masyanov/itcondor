<?php
/*
Template Name: Главная
*/

get_template_part('template-parts/header');
?>

<main>
    <?
    $GLOBALS['benefits'] = carbon_get_theme_option('benefits');
    $GLOBALS['partners'] = carbon_get_theme_option('partners');
    ?>

    <section class="hero">
        <div class="hero__container">
            <div class="black"></div>
            <div class="hero__container-wrapper">
                <img src="<?echo carbon_get_post_meta(get_the_ID(), 'hero-img');?>" alt="">
            </div>
            <div class="hero__container-top-block">
                <h1><?echo carbon_get_post_meta(get_the_ID(), 'hero-title');?></h1>
                <p><?echo carbon_get_post_meta(get_the_ID(), 'hero-desc');?></p>
            </div>
            <div class="hero__container-bottom">
                <div class="left">
                    <div class="left-container">
                        <div class="left-container-item">
                            <img src="<?echo carbon_get_post_meta(get_the_ID(), 'img1');?>" alt="">
                            <p><?echo carbon_get_post_meta(get_the_ID(), 'text1');?></p>
                        </div>
                        <div class="left-container-item">
                            <img src="<?echo carbon_get_post_meta(get_the_ID(), 'img2');?>" alt="">
                            <p><?echo carbon_get_post_meta(get_the_ID(), 'text2');?></p>
                        </div>
                        <div class="left-container-item">
                            <img src="<?echo carbon_get_post_meta(get_the_ID(), 'img3');?>" alt="">
                            <p><?echo carbon_get_post_meta(get_the_ID(), 'text3');?></p>
                        </div>
                        <div class="left-container-item">
                            <img src="<?echo carbon_get_post_meta(get_the_ID(), 'img4');?>" alt="">
                            <p><?echo carbon_get_post_meta(get_the_ID(), 'text4');?></p>
                        </div>
                        <div class="left-container-item">
                            <img src="<?echo carbon_get_post_meta(get_the_ID(), 'img5');?>" alt="">
                            <p><?echo carbon_get_post_meta(get_the_ID(), 'text5');?></p>
                        </div>
                        <div class="left-container-item">
                            <img src="<?echo carbon_get_post_meta(get_the_ID(), 'img6');?>" alt="">
                            <p><?echo carbon_get_post_meta(get_the_ID(), 'text6');?></p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="right-container">
                        <h2><?echo carbon_get_post_meta(get_the_ID(), 'right-title');?></h2>
                        <div class="right-text"><?echo carbon_get_post_meta(get_the_ID(), 'right-text');?></div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </section>



<div class="hat">
    <span class="hat-top"></span>
</div>

    <?php get_template_part( 'template-parts/services-component' ); ?>

    <section class="about-main">
        <div class="container">
            <div class="section__header">
                <span></span>
                <h1 class="section__title">О компании</h1>
                <span></span>
            </div>
        </div>

        <div class="container about-main__container">
            <div class="two-text">
                <div class="text-left"><?echo carbon_get_theme_option('about-main-left');?></div>
            </div>
            <div class="image-block">
                <div class="image-block-wrapper">
                    <img src="<?echo carbon_get_theme_option('about-main_image1');?>" alt="">
                </div>
                <div class="block-bottom">
                    <div class="text-bottom">
                        <div class="text-bottom-item">
                        <p>
                        Более <span>100</span> крупных реализованных проектов
                        </p>
                        <p>
                        До <span>30%</span> экономии за счет экспертности в проектировании и подборе оборудования для реализации проекта
                        </p>
                        </div>
                    </div>
                    <div class="image-block-bottom">
                        <img src="<?echo carbon_get_theme_option('about-main_image2');?>" alt="">
                        <img src="<?echo carbon_get_theme_option('about-main_image3');?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="benefits">
        <div class="container">

            <div class="section__header">
                <span  class="white"></span>
                <h1 class="section__title black">Наши преимущества</h1>
                <span  class="white"></span>
            </div>

        </div>
        <div class="container benefits__container">

            <div class="benefits__hat">
                <div class="benefits__sub-title">
                    <svg class="left" width="156" height="148" viewBox="0 0 156 148" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25.5" cy="122.5" r="16" stroke="#5B77A7"/>
                        <rect x="25" width="1" height="148" fill="#5B77A7"/>
                        <rect y="122" width="156" height="1" fill="#5B77A7"/>
                    </svg>
                    <h2><?echo carbon_get_theme_option('sub-title');?></h2>
                    <svg class="right" width="157" height="149" viewBox="0 0 157 149" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle r="16" transform="matrix(-1 0 0 1 130.738 123.278)" stroke="#5B77A7"/>
                        <rect width="1" height="148" transform="matrix(-1 0 0 1 131.238 0.77832)" fill="#5B77A7"/>
                        <rect width="156" height="1" transform="matrix(-1 0 0 1 156.238 122.778)" fill="#5B77A7"/>
                    </svg>
                </div>
            </div>

            <ul class="benefits__list">
                <? foreach ($GLOBALS['benefits'] as $benefit) : ?>
                    <li class="item">
                        <div class="benefits__item-wrapper">
                            <img src="<?echo $benefit ['benefits_fon'];?>" alt="">
                            <img class="benefits-icon" src="<?echo $benefit ['benefits_image'];?>" alt="">
                        </div>
                        <h3><?echo $benefit ['benefits_title'];?></h3>
                        <p><?echo $benefit ['benefits_desc'];?></p>
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
    </section>


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

    <section class="partners">
        <div class="container partners__container">

            <div class="section__header">
                <span class="white"></span>
                <h1 class="section__title black">Наши партнеры</h1>
                <span class="white"></span>
            </div>
<!--            <div class="swiper partners-swiper">-->
<!--                <div class="swiper-wrapper">-->
<!--                    --><?// foreach ($GLOBALS['partners'] as $partner) : ?>
<!--                        <li class="swiper-slide item">-->
<!--                            <img src="--><?// echo $partner ['partner_image']; ?><!--" alt="">-->
<!--                        </li>-->
<!--                    --><?// endforeach; ?>
<!--                </div>-->
<!--                <div class="swiper-nav">-->
<!--                    <div class="swiper-pagination swiper-partners-pagination"></div>-->
<!--                    <div class="swiper-nav-button">-->
<!--                        <div class="swiper-button-prev swiper-partners-button-prev">-->
<!--                            <svg width="9" height="15" viewBox="0 0 9 15" fill="none"-->
<!--                                 xmlns="http://www.w3.org/2000/svg">-->
<!--                                <path d="M6.60972 0.90752C6.82721 0.690332 7.18391 0.690332 7.4014 0.90752L8.83688 2.34966C9.05437 2.56684 9.05437 2.91435 8.83688 3.13154L4.21725 7.74463L8.83688 12.3577C9.05437 12.5749 9.05437 12.9224 8.83688 13.1396L7.4014 14.5817C7.1839 14.7989 6.82721 14.7989 6.60971 14.5817L0.163122 8.13557C-0.0543754 7.91838 -0.0543753 7.57088 0.163122 7.35369L6.60972 0.90752Z"-->
<!--                                      fill="#2D446C"/>-->
<!--                            </svg>-->
<!--                        </div>-->
<!--                        <div class="swiper-button-next swiper-partners-button-next">-->
<!--                            <svg width="9" height="15" viewBox="0 0 9 15" fill="none"-->
<!--                                 xmlns="http://www.w3.org/2000/svg">-->
<!--                                <path d="M2.39028 0.90752C2.17279 0.690332 1.81609 0.690332 1.5986 0.90752L0.163122 2.34966C-0.0543746 2.56684 -0.0543746 2.91435 0.163122 3.13154L4.78275 7.74463L0.163122 12.3577C-0.0543742 12.5749 -0.0543741 12.9224 0.163122 13.1396L1.5986 14.5817C1.8161 14.7989 2.17279 14.7989 2.39029 14.5817L8.83688 8.13557C9.05438 7.91838 9.05438 7.57088 8.83688 7.35369L2.39028 0.90752Z"-->
<!--                                      fill="#2D446C"/>-->
<!--                            </svg>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <div class="partners__list">
                    <? foreach ($GLOBALS['partners'] as $partner) : ?>
                        <li class="partners__list-item">
                            <img src="<?echo $partner ['partner_image'];?>" alt="">
                        </li>
                    <? endforeach; ?>
                </div>

        </div>
    </section>

    <?php get_template_part( 'template-parts/form' ); ?>

    </div>

</main>

<?php get_template_part('template-parts/footer'); ?>
