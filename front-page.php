<?php
/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wptheme
 */

get_header(); ?>

<h1><?php esc_html_e( 'You are in the front page', 'wptheme-textdomain' ) ?></h1>

<?php if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php echo wp_kses_post( $post->post_content );
    endwhile;
endif;

get_footer();