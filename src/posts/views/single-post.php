<?php
/**
 * The template for displaying posts single page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jmc87-wptheme
 */
?>

<h1><?php the_title() ?></h1>
<?php echo $post->post_content;

comments_template();
get_sidebar();
