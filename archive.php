<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jmc87
 */

get_header();

$post_type = get_post_type();
switch( $post_type ) {
	case 'example':
		get_template_part( 'template-parts/archives/archive', $post_type );
		break;
	default:
		_e( 'This content type is not defined', THEME_TRANSLATE );
		break;
}

//get_sidebar();

get_footer();
