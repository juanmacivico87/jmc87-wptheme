<?php
/**
 * jmc87-wptheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jmc87-wptheme
 */

require 'config/config.php';
$config = new JMC87_ThemeConfig();

require 'config/menus.php';
$menus = new JMC87_Menus();

require 'config/styles.php';
$styles = new JMC87_LoadStyles();

require 'config/scripts.php';
$scripts = new JMC87_LoadScripts();

require 'src/posts/posts.php';
$posts_class = new JMC87_PostsClass();

require 'src/sample/sample.php';
$sample = new JMC87_SampleClass();