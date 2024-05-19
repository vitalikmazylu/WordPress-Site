<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Green_Voyage
 * @since Green_Voyage 1.0
 */

// This theme requires WordPress 5.3 or later.

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
   
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	/*wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );*/
}
add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-formats', array( 'video', 'gallery', 'audio', 'quote', 'link' ) );

		// Enable support for <title> tag.
		add_theme_support( 'title-tag' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

	add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

pll_register_string( 'Экскурсии', "Экскурсии", 'Экскурсии', true );
pll_register_string( 'О нас', "О нас", 'О нас', true );
pll_register_string( 'Услуги', "Услуги", 'Услуги', true );
pll_register_string( 'Главная', "Главная", 'Главная', true );
pll_register_string( 'Забронировать', "Забронировать", 'Забронировать', true );
pll_register_string( 'Выберите дату', "Выберите дату", 'Выберите дату', true );
pll_register_string( 'Подробнее', "Подробнее", 'Подробнее', true );
pll_register_string( 'Что из себя представляет Green Voyage Алгарве', "Что из себя представляет Green Voyage Алгарве", 'Что из себя представляет Green Voyage Алгарве', true );
pll_register_string( 'НАШИ ЭКСКУРСИИ', "НАШИ ЭКСКУРСИИ", 'НАШИ ЭКСКУРСИИ', true );
pll_register_string( 'Политика и конфедициальность', "Политика и конфедициальность", 'Политика и конфедициальность', true );

