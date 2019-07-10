<?php
/**
 * The template for displaying archives pagination
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jmc87-wptheme
 */

 //https://developer.wordpress.org/themes/functionality/pagination/
 //https://developer.wordpress.org/reference/functions/the_posts_pagination/
 //https://codex.wordpress.org/Function_Reference/paginate_links

$args = array(
    'mid_size'  => 2,
    'prev_text' => __( '<', THEME_TEXTDOMAIN ),
    'next_text' => __( '>', THEME_TEXTDOMAIN ),
);

the_posts_pagination( $args );
