<?php
/**
 * jmc87 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jmc87
 */

if ( ! function_exists( 'jmc87_setup' ) ) :
	function jmc87_setup()
	{
		if ( !defined( 'THEME_TEXTDOMAIN' ) )
			define( 'THEME_TEXTDOMAIN', 'jmc87-wptheme' );
			
		load_theme_textdomain( THEME_TEXTDOMAIN, get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
		
		register_nav_menus(
			array(
				'header-menu' => __( 'Header Menu', THEME_TEXTDOMAIN ),
				'footer-menu' => __( 'Footer Menu', THEME_TEXTDOMAIN)
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'jmc87_setup' );

/**
 * Enqueue scripts and styles.
 */
function jmc87_scripts()
{
	wp_enqueue_style( 'jmc87-style', get_stylesheet_uri() . '/inc/css/css-file.css' );
	wp_enqueue_script( 'jmc87-js', get_template_directory_uri() . '/inc/js/js-file.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'jmc87_scripts' );

/**
 * Theme classes
 */
require 'src/sample/sample.php';
$sample = new sampleClass();