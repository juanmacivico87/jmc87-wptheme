<?php
/**
 * WPTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wptheme-sample
 */

if ( !defined( 'ABSPATH' ) )
    exit;

require_once 'vendor/autoload.php';

use Config\ThemeConfig;
$config = new ThemeConfig;