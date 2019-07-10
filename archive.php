<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jmc87-wptheme
 */

get_header();

$post_type = get_post_type();
switch( $post_type ) {
	case 'example':
		get_template_part( 'src/sample/views/archive', $post_type );
		break;
	default:
		_e( 'Post type archive page not found', THEME_TEXTDOMAIN );
		break;
}

get_footer();
