<?php
/**
 * The template for displaying all search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package wptheme
 */

get_header(); ?>

<h1>You are in search page</h1>

<?php if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php echo $post->post_content;
    endwhile;
endif;

get_footer();
