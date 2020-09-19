<?php
/**
 * The template for displaying blog page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wptheme-sample
 */

get_header(); ?>

<h1><?php esc_html_e( 'You are in a home (blog) page', 'wptheme-sample' ) ?></h1>

<?php if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php the_excerpt();
    endwhile;
endif;

get_footer();
