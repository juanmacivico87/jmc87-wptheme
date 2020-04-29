<?php
/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wptheme
 */

get_header(); ?>

<h1>You are in the front page</h1>

<?php if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php echo $post->post_content;
    endwhile;
endif;

get_footer();