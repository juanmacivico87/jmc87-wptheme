<?php
/**
 * The template for displaying all search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package jmc87-wptheme
 */

get_header();

$post_type = get_post_type();
switch( $post_type ) {
	case 'post':
		get_template_part( 'src/posts/views/search', $post_type );
		break;
	case 'sample':
		get_template_part( 'src/sample/views/search', $post_type );
		break;
	default:
		_e( 'Post type search page not found', THEME_TEXTDOMAIN );
		break;
}

get_footer();
