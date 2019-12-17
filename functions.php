<?php
/**
 * jmc87-wptheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jmc87-wptheme
 */

if ( !defined( 'ABSPATH' ) )
    exit;

if ( !defined( 'THEME_DIR' ) )
    define( 'THEME_DIR', get_template_directory() );

if ( !defined( 'THEME_URL' ) )
    define( 'THEME_URL', get_template_directory_uri() );

if ( !defined( 'THEME_LANG_DIR' ) )
    define( 'THEME_LANG_DIR', get_template_directory_uri() . '/languages' );

if ( !defined( 'THEME_INCLUDES_DIR' ) )
    define( 'THEME_INCLUDES_DIR', get_template_directory_uri() . '/inc' );

require 'config/config.php';
$config = new JMC87_ThemeConfig();

require 'config/menus.php';
$menus = new JMC87_Menus();

require 'config/styles.php';
$styles = new JMC87_LoadStyles();

require 'config/scripts.php';
$scripts = new JMC87_LoadScripts();
