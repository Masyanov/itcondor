<?php
/**
 * kondor functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kondor
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kondor_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on kondor, use a find and replace
		* to change 'kondor' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'kondor', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'kondor' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'kondor_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'kondor_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kondor_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kondor_content_width', 640 );
}
add_action( 'after_setup_theme', 'kondor_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kondor_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kondor' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kondor' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kondor_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kondor_scripts()
{

//    Подключаем стили
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style/app/css/main.css', array(), _S_VERSION);
    wp_enqueue_style('main-vendor', get_template_directory_uri() . '/style/app/css/vendor.css', array(), _S_VERSION);
    wp_enqueue_style('main-fancyapps', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css', array(), _S_VERSION);


//    Подключаем скрипты
    wp_enqueue_script('main-fontawesome', 'https://kit.fontawesome.com/50b5b125bb.js', array(), _S_VERSION, true);
    wp_enqueue_script('main-fancyapps', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array(), _S_VERSION, true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/style/app/js/main.js', array(), _S_VERSION, true);


}

add_action( 'wp_enqueue_scripts', 'kondor_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Подключаем плагин carbon-fields
 */
add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once(get_template_directory() . '/inc/carbon-fields/vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

/**
 * Подключаем настройки произвольных полей. Все произвольные поля находятся в inc/carbon-fields-options
 */

add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields()
{
    /** Настройки темы */
    require_once(get_template_directory() . '/inc/carbon-fields-options/theme-options.php');
    /** О компании */
    require_once(get_template_directory() . '/inc/carbon-fields-options/about-options.php');
    /** Контакты */
    require_once(get_template_directory() . '/inc/carbon-fields-options/contacts-options.php');
    /** Главная */
    require_once(get_template_directory() . '/inc/carbon-fields-options/home-options.php');
    /** Объекты */
    require_once(get_template_directory() . '/inc/carbon-fields-options/objects-options.php');
    /** Услуги */
    require_once(get_template_directory() . '/inc/carbon-fields-options/services-options.php');
    /** Вакансии */
    require_once(get_template_directory() . '/inc/carbon-fields-options/vacancy.php');

}

/** Добавляем новый тип поста для услуг  */

add_action('init', 'register_post_types');
function register_post_types()
{
    register_taxonomy('service-categories', 'service', [
        'label' => 'Категория услуги',
        'labels' => [
            'name' => 'Категория услуг',
            'singular_name' => 'Категория услуг',
            'search_items' => 'Искать услуги',
            'popular_items' => 'Популярные категории',
            'all_items' => 'Все категории',
            'edit_item' => 'Изменить категорию',
            'update_item' => 'Обновить категорию',
            'add_new_item' => 'Добавить новую категорию',
            'new_item_name' => 'Новое название категории',
            'separate_items_with_commas' => 'Отделить категории запятыми',
            'add_or_remove_items' => 'Добавить или удалить категорию',
            'choose_from_most_used' => 'Выбрать самую популярную категорию',
            'menu_name' => 'Категории',
        ],
        'public' => true,
        'description' => 'Категории для услуг', // описание таксономии
        'hierarchical' => true,
        'publicly_queryable' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => false, // равен аргументу public
        'show_ui' => true, // равен аргументу public
        'show_tagcloud' => false, // равен аргументу show_ui
        'hierarchical' => true,
        'rewrite' => true,
    ]);
    register_post_type('service', [
        'labels' => [
            'name' => 'Услуги', // основное название для типа записи
            'singular_name' => 'Услуга', // название для одной записи этого типа
            'add_new' => 'Добавить услугу', // для добавления новой записи
            'add_new_item' => 'Добавление услуги', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование услуги', // для редактирования типа записи
            'new_item' => 'Новая услуга', // текст новой записи
            'view_item' => 'Смотреть услугу', // для просмотра записи этого типа.
            'search_items' => 'Искать услугу', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'menu_name' => 'Услуги', // название меню
        ],
        'menu_icon' => 'dashicons-hammer',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_rest' => false,
        'rest_base' => '',
        'show_in_menu' => true,
        'menu_position' => 2,
        'map_meta_cap' => true,
        'hierarchical' => false,
        'query_var' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'service'],
        'taxonomies' => array('service-categories'),
    ]);

    register_taxonomy('object-categories', 'object', [
        'label' => 'Категория объекта',
        'labels' => [
            'name' => 'Категория объектов',
            'singular_name' => 'Категория объекта',
            'search_items' => 'Искать объект',
            'popular_items' => 'Популярные категории',
            ' ' => 'Все категории',
            'edit_item' => 'Изменить категорию',
            'update_item' => 'Обновить категорию',
            'add_new_item' => 'Добавить новую категорию',
            'new_item_name' => 'Новое название категории',
            'separate_items_with_commas' => 'Отделить категории запятыми',
            'add_or_remove_items' => 'Добавить или удалить категорию',
            'choose_from_most_used' => 'Выбрать самую популярную категорию',
            'menu_name' => 'Категории',
        ],
        'public' => true,
        'description' => 'Категории для объектов', // описание таксономии
        'hierarchical' => true,
        'publicly_queryable' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => false, // равен аргументу public
        'show_ui' => true, // равен аргументу public
        'show_tagcloud' => false, // равен аргументу show_ui
        'hierarchical' => true,
        'rewrite' => true,
    ]);
    register_post_type('object', [
        'labels' => [
            'name' => 'объекты', // основное название для типа записи
            'singular_name' => 'объект', // название для одной записи этого типа
            'add_new' => 'Добавить объект', // для добавления новой записи
            'add_new_item' => 'Добавление объекта', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование объекта', // для редактирования типа записи
            'new_item' => 'Новый объект', // текст новой записи
            'view_item' => 'Смотреть объект', // для просмотра записи этого типа.
            'search_items' => 'Искать объект', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'menu_name' => 'Объекты', // название меню
        ],
        'menu_icon' => 'dashicons-building',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_rest' => false,
        'rest_base' => '',
        'show_in_menu' => true,
        'menu_position' => 3,
        'map_meta_cap' => true,
        'hierarchical' => false,
        'query_var' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'object'],
        'taxonomies' => array('object-categories'),
    ]);

}