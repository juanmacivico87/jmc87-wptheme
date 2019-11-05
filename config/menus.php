<?php
/**
 * Class to load theme menus
 *
 * @package jmc87-wptheme
 */

if ( !defined( 'ABSPATH' ) )
    exit;

class JMC87_Menus
{
    public function __construct()
    {
        add_action( 'after_setup_theme', array( $this, 'jmc87_load_theme_menus' ) );
    }

    function jmc87_load_theme_menus()
    {
        register_nav_menus(
			array(
				'header-menu' => __( 'Header Menu', 'jmc87-wptheme-textdomain' ),
				'footer-menu' => __( 'Footer Menu', 'jmc87-wptheme-textdomain')
			)
		);
    }
}
