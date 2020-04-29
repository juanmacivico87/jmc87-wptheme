<?php
/**
 * Class to load javascripts files
 *
 * @package wptheme
 */

namespace Config;

if ( !defined( 'ABSPATH' ) )
    exit;

class LoadThemeScripts
{
    public function __construct()
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'load_scripts' ) );
    }

    function load_scripts()
    {
        wp_enqueue_script( 'credits-js', THEME_INCLUDES_DIR . '/js/credits.js', array(), false, true );
        wp_enqueue_script( 'js', THEME_INCLUDES_DIR . '/js/js-file.js', array(), false, true );
    }
}
