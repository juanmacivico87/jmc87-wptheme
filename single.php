<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jmc87-wptheme
 */

get_header();

$post_type = get_post_type();
switch( $post_type ) {
	case 'post':
		get_template_part( 'src/posts/views/single', $post_type );
		break;
	case 'sample':
		get_template_part( 'src/sample/views/single', $post_type );
		break;
	default:
		_e( 'Post type single page not found', THEME_TEXTDOMAIN );
		break;
}

get_footer();