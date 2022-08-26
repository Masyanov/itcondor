<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stk
 */

?>


<!doctype html>
<html <?php language_attributes(); ?>>

<?php get_template_part('template-parts/head'); ?>


<?

/** Определяем для удобства переменные */
$GLOBALS['logo'] = carbon_get_theme_option( 'site_logo' );
$GLOBALS['phone'] = carbon_get_theme_option( 'phone' );
$GLOBALS['phone2'] = carbon_get_theme_option( 'phone2' );
$GLOBALS['email'] = carbon_get_theme_option( 'email' );
$GLOBALS['department'] = carbon_get_theme_option( 'department' );
?>



<header class="header2">
    <div class="header__container">
        <div class="header__nav">
            <a class="header__nav-logo" href="<?= get_home_url() ?>">
                <?= wp_get_attachment_image($GLOBALS['logo'], 'full') ?>
            </a>
            <nav class="nav" title="">
                <?
                wp_nav_menu( [
                    'theme_location'  => 'menu-1',
                    'container'       => null,
                    'menu_class'      => 'header__nav',
                    'menu_id'         => 'primary-menu',
                    'items_wrap'      => '<ul id="%1$s" class="nav__item">%3$s</ul>',
                ] );
                ?>
            </nav>
            <div class="header__contacts">
                <div class="header__contacts-item">
                    <a class="email" href="email"><?= $GLOBALS['email'] ?></a>
                    <div class="header__contacts-number">
                        <a class="phone" href="tel:<?= preg_replace('/[^\d^\+]/', '', $GLOBALS['phone']) ?>"><?= $GLOBALS['phone'] ?></a>
                        <a class="phone" href="tel:<?= preg_replace('/[^\d^\+]/', '', $GLOBALS['phone2']) ?>"><?= $GLOBALS['phone2'] ?></a>
                    </div>
            </div>

            <button class="burger" data-burger aria-label="Открыть меню" aria-expanded="false">
                <span class="burger__line"></span>
            </button>



            <div class="header__nav-mobile" data-menu>
                <?
                wp_nav_menu( [
                    'theme_location'  => 'menu-1',
                    'container'       => null,
                    'menu_class'      => 'nav__list', 'list-reset',
                    'menu_id'         => 'primary-menu',
                    'items_wrap'      => '<ul id="%1$s" class="nav__item">%3$s</ul>',
                ] );
                ?>
                <div class="contacts">
                    <div class="contacts__item">
                        <a class="email" href="email"><?= $GLOBALS['email'] ?></a>
                        <a class="phone" href="tel:<?= preg_replace('/[^\d^\+]/', '', $GLOBALS['phone']) ?>"><?= $GLOBALS['phone'] ?></a>
                    </div>
                </div>
        </div>
    </div>
</header>

