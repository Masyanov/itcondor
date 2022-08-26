<?php

if (!defined('ABSPATH')) {
    exit();
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_post_options');

Container::make('post_meta', __('Контакты'))
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'template-page/contact.php')
    ->add_fields(array(

        Field::make('rich_text', 'phone', __('Контактный телефон'))
            ->set_width(50),
        Field::make('rich_text', 'email', __('Эл.почта'))
            ->set_width(50),
        Field::make('rich_text', 'time', __('Время работы'))
            ->set_width(50),
        Field::make('rich_text', 'adress', __('Адрес'))
            ->set_width(50),
        Field::make("file", "file", "Реквизиты")
            ->set_value_type('url')
            ->set_width(100),

    ));
