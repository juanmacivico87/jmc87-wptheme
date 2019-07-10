<?php
/**
 * The template for displaying custom post type archive page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jmc87-wptheme
 */

if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
    endwhile;
    get_template_part( 'template-parts/pagination' );
else : ?>
	<p><?php esc_html_e( 'Sorry, no posts found', THEME_TEXTDOMAIN ); ?></p>
<?php endif;

get_sidebar();