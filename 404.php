<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package stk
 */

get_template_part('template-parts/header2');
?>

    <main>


        <section class="container">
            <?php get_template_part( 'template-parts/breadcrumb' ); ?>
            <div class="error-404">
                <h1>Страница не найдена</h1>
                <h2>404</h2>
                <h3>Ошибка <span>404</span> - Страница не найдена</h3>
                <p>Такой страницы не существует или неправильно набран адрес</p>
                <div class="link-404">
                    <a href="/">Перейти на главную</a>
                    <p> или </p>
                    <form>
                        <input type="button" value="назад на предыдущую страницу"
                               onClick="history.back()">
                    </form>
                </div>
            </div>
        </section>

    </main>


<?php get_template_part('template-parts/footer'); ?>