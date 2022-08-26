<?php
/*
Template Name: Услуги
*/

get_template_part('template-parts/header2');
?>
    <main>
        <div class="container">
            <?php get_template_part( 'template-parts/breadcrumb' ); ?>
        </div>
        <?php get_template_part( 'template-parts/services-component' ); ?>

        <?php get_template_part( 'template-parts/form' ); ?>
    </main>

<?php
get_template_part('template-parts/footer');;
?>