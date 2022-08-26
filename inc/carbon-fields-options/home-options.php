<?php

if (!defined('ABSPATH')) {
    exit();
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_post_options');

Container::make('post_meta', __('Настройки страницы'))
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'template-page/home.php')
    ->add_tab(__('Первый блок'), array(
        Field::make('image', 'hero-img', __('Фоновое изображение'))
            ->set_value_type('url')
            ->set_width(20),
        Field::make('text', 'hero-title', __('Заголовок'))
            ->set_width(40),
        Field::make('text', 'hero-desc', __('Подпись'))
            ->set_width(40),


        Field::make('image', 'img1', __('Изображение 1'))
            ->set_value_type('url')
            ->set_width(10),
        Field::make('text', 'text1', __('Текст 1'))
            ->set_width(23),
        Field::make('image', 'img2', __('Изображение 2'))
            ->set_value_type('url')
            ->set_width(10),
        Field::make('text', 'text2', __('Текст 2'))
            ->set_width(23),
        Field::make('image', 'img3', __('Изображение 3'))
            ->set_value_type('url')
            ->set_width(10),
        Field::make('text', 'text3', __('Текст 3'))
            ->set_width(23),

        Field::make('image', 'img4', __('Изображение 4'))
            ->set_value_type('url')
            ->set_width(10),
        Field::make('text', 'text4', __('Текст 4'))
            ->set_width(23),
        Field::make('image', 'img5', __('Изображение 5'))
            ->set_value_type('url')
            ->set_width(10),
        Field::make('text', 'text5', __('Текст 5'))
            ->set_width(23),
        Field::make('image', 'img6', __('Изображение 6'))
            ->set_value_type('url')
            ->set_width(10),
        Field::make('text', 'text6', __('Текст 6'))
            ->set_width(23),


        Field::make('text', 'right-title', __('Подзаголовок'))
            ->set_width(40),
        Field::make('textarea', 'right-text', __('Текст справа'))
            ->set_width(60),
    ));


