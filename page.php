<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jmc87-wptheme
 */

get_header();
?>

<h1><?php the_title() ?></h1>
<?php echo $post->post_content;

get_sidebar();
get_footer();
