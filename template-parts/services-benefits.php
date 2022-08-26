<?
$GLOBALS['services-benefits'] = carbon_get_theme_option('services-benefits');
?>
<section class="services-benefits">
    <div class="container services-benefits-container">
        <div class="section__header">
            <span></span>
            <h2 class="section__title"><?echo carbon_get_theme_option('sub-title-services');?></h2>
            <span></span>
        </div>
        <ul class="services-benefits__list">
            <? foreach ($GLOBALS['services-benefits'] as $benefit) : ?>
                <li class="item">
                    <div class="services-benefits__item-wrapper">
                        <img src="<?echo $benefit ['services-benefits_fon'];?>" alt="">
                        <img class="services-benefits-icon" src="<?echo $benefit ['services-benefits_image'];?>" alt="">
                    </div>
                    <p><?echo $benefit ['services-benefits_desc'];?></p>
                </li>
            <? endforeach; ?>
        </ul>

    </div>
</section>