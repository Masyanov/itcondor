<?
$categories = get_categories([
    'taxonomy' => 'service-categories',
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

<section class="services">
    <div class="container services__container">
        <div class="section__header">
            <span></span>
            <h1 class="section__title">Наши услуги</h1>
            <span></span>
        </div>

        <? foreach ($categories as $idx => $category): ?>
            <?
            $home_posts = get_posts([
                    'numberposts' => -1,
                    'post_type' => 'service',
                    'tax_query' => [
                        [
                            'taxonomy' => 'service-categories',
                            'field' => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
                            'terms' => $category->term_id,
                        ]
                    ],
                    'orderby' => 'date',
                    'order' => 'ASC',
                ]
            );
            ?>



            <ul class="services__list">
                <? foreach ($home_posts as $home_post) :?>
                    <li class="services__list-item">
                        <a href="<?= get_permalink($home_post->ID) ?>">
                        <?= get_the_post_thumbnail($home_post->ID, 'full') ?>
                        <div class="services__list-item-desc">
                            <p><?= $home_post->post_title ?></p>
                        </div>
                        </a>
                    </li>
                <? endforeach; ?>
            </ul>

        <? endforeach; ?>
    </div>
</section>