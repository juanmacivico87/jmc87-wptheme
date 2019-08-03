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
        wp_enqueue_script( 'credits-js', get_template_directory_uri() . '/inc/js/credits.js', array(), false, true );
        wp_enqueue_script( 'jmc87-js', get_template_directory_uri() . '/inc/js/js-file.js', array(), false, true );
    }
}
