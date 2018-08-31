<?php


/*Удалить ненужное с headera*/
remove_action('wp_head','feed_links_extra', 3); // убирает ссылки на rss категорий
remove_action('wp_head','feed_links', 2); // минус ссылки на основной rss и комментарии
remove_action('wp_head','rsd_link');  // сервис Really Simple Discovery
remove_action('wp_head','wlwmanifest_link'); // Windows Live Writer
remove_action('wp_head','wp_generator');  // скрыть версию wordpress

remove_action( 'wp_head', 'rest_output_link_wp_head');
remove_action( 'wp_head', 'wp_oembed_add_discovery_links');
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );

show_admin_bar(false);

/*Регистрация css и js*/
add_filter('show_admin_bar', '__return_false');

define('M_THEME_ROOT', get_template_directory_uri());
define('M_CSS_ROOT', M_THEME_ROOT . '/css');
define('M_LIBS_ROOT', M_THEME_ROOT . '/libs');
define('M_IMG_ROOT', M_THEME_ROOT . '/img');


add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
	wp_enqueue_style('main', M_CSS_ROOT . '/style.css');
	wp_enqueue_style('bootstrapCss', M_LIBS_ROOT . '/bootstrap/bootstrap.min.css');
	// wp_enqueue_style('fontAwesome', M_LIBS_ROOT . '/font-awesome/font-awesome.min.css');

	wp_deregister_script('jquery');
	echo wp_enqueue_script('jquery', M_LIBS_ROOT . '/jquery/jquery.min.js', array(), '', true);
	echo wp_enqueue_script('mainJs', M_LIBS_ROOT . '/js/main.js', array(), '', true);
	echo wp_enqueue_script('bootstrapJs', M_LIBS_ROOT . '/bootstrap/bootstrap.min.js', array(), '', true);
}

/*Регистрация меню*/
register_nav_menu('menu', 'main-menu');
