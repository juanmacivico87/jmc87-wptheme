<?php
/**
 * Class to load CSS files
 *
 * @package jmc87-wptheme
 */

if ( !defined( 'ABSPATH' ) )
    exit;

class JMC87_LoadStyles
{
    public function __construct()
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'jmc87_load_styles' ) );
    }

    function jmc87_load_styles()
    {
        wp_enqueue_style( 'jmc87-style', get_stylesheet_uri() . '/inc/css/css-file.css' );
    }
}
