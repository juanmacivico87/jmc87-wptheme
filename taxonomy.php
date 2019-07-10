<?php
/**
 * The template for displaying taxonomy pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jmc87-wptheme
 */

get_header();

$taxonomy = get_queried_object()->taxonomy;
switch( $taxonomy ) {
	case 'example':
		get_template_part( 'src/sample/views/taxonomy', $taxonomy );
		break;
	default:
		_e( 'Post type taxonomy page not found', THEME_TEXTDOMAIN );
		break;
}

get_footer();