<?php
/*
Template Name: Одна услуга
*/

get_template_part('template-parts/header2');
?>

<? $gallery = carbon_get_post_meta($post->ID, 'service_gallery') ?>
	<main id="primary" class="site-main">
        <div class="content">
            <div class="container">
                <?php get_template_part( 'template-parts/breadcrumb' ); ?>
                <h1 class="h1 h1-page"><?= get_the_title() ?></h1>
                    <p><?= get_the_content() ?></p>
                <div class="service__wrap">
                    <div class="swiper service__swiper">
                        <div class="service-wrapper">
                            <? foreach ($gallery as $item) : ?>
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <div class="service__img">
                                            <?= wp_get_attachment_image($item, 'medium') ?>
                                        </div>

                                    </div>
                                </div>
                            <? endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="single-service">
            <div class="container single-service__container">

                <div class="section__header">
                    <h1 class="section__title">Проектирование инженерных коммуникаций для водоснабжения и водоотведения, газоснабжения</h1>
                </div>

                <div class="single-service__main">
                    <img src="../img/serv.jpg" alt="">
                    <div class="desc">
                        <div class="single-service__center-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu consequat ac felis donec. Consectetur libero id faucibus nisl tincidunt eget nullam. A arcu cursus vitae congue mauris rhoncus aenean vel. Laoreet id donec ultrices tincidunt arcu. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien.

                                Urna neque viverra justo nec ultrices. Elementum sagittis vitae et leo duis. Tristique sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. Donec ac odio tempor orci dapibus ultrices in iaculis. Libero nunc consequat interdum varius sit amet mattis. Porttitor leo a diam sollicitudin tempor id eu.
                            </p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu consequat ac felis donec. Consectetur libero id faucibus nisl tincidunt eget nullam. A arcu cursus vitae congue mauris rhoncus aenean vel. Laoreet id donec ultrices tincidunt arcu. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. Urna neque viverra justo nec ultrices. Elementum sagittis vitae et leo duis. Tristique sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. Donec ac odio tempor orci dapibus ultrices in iaculis. Libero nunc consequat interdum varius sit amet mattis. Porttitor leo a diam sollicitudin tempor id eu.

                            Habitant morbi tristique senectus et netus et malesuada fames. Fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis. Nibh cras pulvinar mattis nunc sed blandit libero. Suscipit adipiscing bibendum est ultricies integer quis. Hendrerit gravida rutrum quisque non tellus orci ac auctor. Volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Aliquam id diam maecenas ultricies mi eget mauris pharetra. Eu mi bibendum neque egestas.

                            Proin nibh nisl condimentum id venenatis a condimentum vitae sapien. Sit amet cursus sit amet dictum sit amet justo. Faucibus a pellentesque sit amet porttitor. Suscipit adipiscing bibendum est ultricies integer quis auctor elit sed. Ornare quam viverra orci sagittis eu volutpat odio facilisis. Orci a scelerisque purus semper eget duis. Purus in mollis nunc sed id semper risus. Cursus turpis massa tincidunt dui ut ornare lectus sit.
                        </p>
                    </div>
                </div>
                <div class="single-service__img-block">
                    <div class="item">
                        <img src="../img/serv.jpg" alt="">
                        <div class="desc">
                            <div class="cube"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="../img/serv.jpg" alt="">
                        <div class="desc">
                            <div class="cube"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="../img/serv.jpg" alt="">
                        <div class="desc">
                            <div class="cube"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit  consectetur adipiscing elit</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="../img/serv.jpg" alt="">
                        <div class="desc">
                            <div class="cube"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>

                <div class="single-service__two-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu consequat ac felis donec. Consectetur libero id faucibus nisl tincidunt eget nullam. A arcu cursus vitae congue mauris rhoncus aenean vel.

                        Laoreet id donec ultrices tincidunt arcu. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. Urna neque viverra justo nec ultrices.

                        Elementum sagittis vitae et leo duis. Tristique sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. Donec ac odio tempor orci dapibus ultrices in iaculis. Libero nunc consequat interdum varius sit amet mattis. Porttitor leo a diam sollicitudin tempor id eu.
                    </p>
                    <div> </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eu consequat ac felis donec.

                        Consectetur libero id faucibus nisl tincidunt eget nullam. A arcu cursus vitae congue mauris rhoncus aenean vel.

                        Laoreet id donec ultrices tincidunt arcu. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien. Urna neque viverra justo nec ultrices. Elementum sagittis vitae et leo duis. Tristique sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. Donec ac odio tempor orci dapibus ultrices in iaculis. Libero nunc consequat interdum varius sit amet mattis. Porttitor leo a diam sollicitudin tempor id eu.
                    </p>
                </div>
            </div>

        </section>

        <?php
        get_template_part( 'inc/form' );
        ?>

	</main><!-- #main -->

<?php

get_footer();
