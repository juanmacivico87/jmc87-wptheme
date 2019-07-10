<?php
/**
 * The template for displaying post tags page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jmc87-wptheme
 */

get_header();

$taxonomy = get_queried_object()->taxonomy;
get_template_part( 'src/posts/views/taxonomy', $taxonomy );

get_footer();
