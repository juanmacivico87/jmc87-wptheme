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
        load_theme_textdomain( 'jmc87-wptheme-textdomain', THEME_LANG_DIR );
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
            .login h1 a { background-image:url(' . THEME_INCLUDES_DIR . '/images/website-logo.svg) !important; }</style>';
    }
}
