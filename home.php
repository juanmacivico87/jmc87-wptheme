<?php
/**
 * The template for displaying blog page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jmc87-wptheme
 */

get_header();

$post_type = get_post_type();
get_template_part( 'src/posts/views/archive', $post_type );

get_footer();
