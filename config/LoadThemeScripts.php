<?php
/**
 * Class to load javascripts files
 *
 * @package wptheme-sample
 */

namespace PrefixConfig;

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
        wp_enqueue_script( 'wptheme-sample-credits', PREFIX_THEME_ASSETS_DIR . '/js/credits.js', array(), PREFIX_THEME_VERSION, true );
        wp_enqueue_script( 'wptheme-sample', PREFIX_THEME_ASSETS_DIR . '/js/scripts.js', array(), PREFIX_THEME_VERSION, true );
    }
}
