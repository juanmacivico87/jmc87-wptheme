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
        add_action( 'wp_enqueue_scripts', array( $this, 'load_styles' ) );
    }

    function load_styles()
    {
        wp_enqueue_style( 'style', THEME_INCLUDES_DIR . '/css/css-file.css', array(), THEME_VERSION );
    }
}
