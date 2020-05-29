<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wptheme
 */

get_header(); ?>

<h1><?php esc_html_e( 'You are in a archive page', 'wptheme-textdomain' ) ?></h1>

<?php if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php echo wp_kses_post( $post->post_content );
    endwhile;
endif;

get_footer();
