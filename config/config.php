<?php
/**
 * Class to load basic theme configuration
 *
 * @package jmc87-wptheme
 */

if ( !defined( 'ABSPATH' ) )
    exit;

class JMC87_ThemeConfig
{
    public function __construct()
    {
        add_action( 'after_setup_theme', array( $this, 'jmc87_load_theme_textdomain' ) );
        add_action( 'after_setup_theme', array( $this, 'jmc87_load_theme_supports' ) );
        add_action( 'login_head', array( $this, 'jmc87_mylogo_login' ) );
    }

    public function jmc87_load_theme_textdomain()
    {
        load_theme_textdomain( THEME_TEXTDOMAIN, get_template_directory() . '/languages' );
    }

    public function jmc87_load_theme_supports()
    {
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );

        add_theme_support( 'html5', array( 'search-form',  'comment-form', 'comment-list', 'gallery', 'caption' ) );
        add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat' ) );

        add_theme_support( 'custom-logo', array(
            'width' 			=> '64',
            'height' 			=> '64',
            'flex-height' 		=> true,
            'flex-width' 		=> true,
            'header-text' 		=> array( 'site-title', 'site-description' ),
        ) );
    }

    function jmc87_mylogo_login()
    {
        echo '<style type="text/css">
            h1 a { background-image:url(' . get_template_directory() . '/inc/images/website-logo.svg) !important; }</style>';
    }
}
