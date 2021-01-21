<?php
/**
 * Class to load CSS files
 *
 * @package wptheme-sample
 */

namespace PrefixConfig;

if ( !defined( 'ABSPATH' ) )
    exit;

class LoadThemeStyles
{
    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'load_styles' ) );
    }

    function load_styles()
    {
        wp_enqueue_style( 'wptheme-sample', PREFIX_THEME_ASSETS_DIR . '/css/styles.css', array(), '0.1' );
    }
}
