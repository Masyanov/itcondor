<?php

if (!defined('ABSPATH')) {
    exit();
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');

Container::make('theme_options', __('Нaстройки темы'))
    ->add_tab(__('Основные настройки'), array(
        Field::make('image', 'site_logo', __('Логотип'))
            ->set_width(15),
    ))

    ->add_tab(__('Контакты в шапке'), array(
        Field::make('text', 'phone', __('Телефон'))
            ->set_width(33),
        Field::make('text', 'phone2', __('Телефон 2'))
            ->set_width(33),
        Field::make('text', 'email', __('Эл.почта'))
            ->set_width(33),
    ))


    ->add_tab(__('Преимущества и партнеры'), array(

        Field::make('text', 'sub-title', __('Подзаголовок слева'))
            ->set_width(100),

        Field::make('complex', 'benefits', __(''))
            ->set_max(4)
            ->setup_labels(
                array(
                    'plural_name' => 'Преимущества',
                    'singular_name' => 'Преимущество',
                )
            )
            ->add_fields('benefits_item', __('Преимущество'), array(
                Field::make('image', 'benefits_fon', __('Фон'))
                    ->set_value_type('url')
                    ->set_width(15),
                Field::make('image', 'benefits_image', __('Иконка'))
                    ->set_value_type('url')
                    ->set_width(15),
                Field::make('text', 'benefits_title', __('Наименование преимущества'))
                    ->set_width(35),
                Field::make('text', 'benefits_desc', __('Подпись'))
                    ->set_width(50),
            )),


        Field::make('complex', 'partners', __(''))
            ->setup_labels(
                array(
                    'plural_name' => 'Партнеры',
                    'singular_name' => 'Партнера',
                )
            )
            ->add_fields('partner', __('Партнер'), array(
                Field::make('image', 'partner_image', __('Изображение'))
                    ->set_value_type('url')
                    ->set_width(10),
            ))
    ))

    ->add_tab(__('Форма и карта'), array(
        Field::make('textarea', 'form', __('Код формы'))
            ->set_width(50),
        Field::make('textarea', 'map', __('Код карты'))
            ->set_width(50),

    ))

->add_tab(__('О компании на главной'), array(
    Field::make('textarea', 'about-main-left', __('Текст сверху'))
        ->set_width(100),

    Field::make('image', 'about-main_image1', __('Изображение 1'))
        ->set_value_type('url')
        ->set_width(33),
    Field::make('image', 'about-main_image2', __('Изображение 2'))
        ->set_value_type('url')
        ->set_width(33),
    Field::make('image', 'about-main_image3', __('Изображение 3'))
        ->set_value_type('url')
        ->set_width(33),

))


->add_tab(__('Преимущества для услуг'), array(

    Field::make('text', 'sub-title-services', __('Заголовок в центре'))
        ->set_width(100),

    Field::make('complex', 'services-benefits', __(''))
        ->set_max(6)
        ->setup_labels(
            array(
                'plural_name' => 'Преимущества',
                'singular_name' => 'Преимущество',
            )
        )
        ->add_fields('benefits_item', __('Преимущество'), array(
            Field::make('image', 'services-benefits_fon', __('Фон'))
                ->set_value_type('url')
                ->set_width(15),
            Field::make('image', 'services-benefits_image', __('Иконка'))
                ->set_value_type('url')
                ->set_width(15),
            Field::make('text', 'services-benefits_desc', __('Подпись'))
                ->set_width(70),
        )),
));

