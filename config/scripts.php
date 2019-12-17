<?php
/**
 * Class to load javascripts files
 *
 * @package jmc87-wptheme
 */

if ( !defined( 'ABSPATH' ) )
    exit;

class JMC87_LoadScripts
{
    public function __construct()
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'jmc87_load_scripts' ) );
    }

    function jmc87_load_scripts()
    {
        wp_enqueue_script( 'credits-js', THEME_INCLUDES_DIR . '/js/credits.js', array(), false, true );
        wp_enqueue_script( 'jmc87-js', THEME_INCLUDES_DIR . '/js/js-file.js', array(), false, true );
    }
}
