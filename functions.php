<?php
/**
 * wptheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wptheme
 */

if ( !defined( 'ABSPATH' ) )
    exit;

require_once 'vendor/autoload.php';

use Config\ThemeConfig;
$config = new ThemeConfig;