<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wptheme-sample
 */

get_header(); ?>

<h1><?php esc_html_e( 'You are in a archive page', 'wptheme-sample' ) ?></h1>

<?php if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php the_excerpt();
    endwhile;
endif;

get_footer();
