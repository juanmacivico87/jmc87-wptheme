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
        $this->init();
    }

    public function init()
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'load_scripts' ) );
    }

    function load_scripts()
    {
        wp_enqueue_script( 'wptheme-sample-credits', PREFIX_THEME_ASSETS_DIR . '/js/credits.js', array(), '0.1', true );
        wp_enqueue_script( 'wptheme-sample', PREFIX_THEME_ASSETS_DIR . '/js/scripts.js', array(), '0.1', true );
    }
}
