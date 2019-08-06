<?php
/**
 * The template for displaying posts search default results page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jmc87-wptheme
 */

if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        $categories = get_the_terms( $post->ID, 'category' );
        $post_tags  = get_the_terms( $post->ID, 'post_tag' ); ?>

        <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
        <h3><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h3>
        <p><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_excerpt() ?></a></p>
        <p><?php echo get_the_author() ?></p>

        <p><?php _e( 'Categories:', THEME_TEXTDOMAIN ) ?></p>
        <ul>
            <?php if ( $categories ) :
                foreach( $categories as $category ) : ?>
                    <li><a href="<?php echo get_term_link( $category->term_id, $category->taxonomy ) ?>" title="<?php echo $category->name ?>"><?php echo $category->name ?></a></li>
                <?php endforeach;
            endif; ?>
        </ul>

        <p><?php _e( 'Tags:', THEME_TEXTDOMAIN ) ?></p>
        <ul>
            <?php if ( $post_tags ) :
                foreach( $post_tags as $tag ) : ?>
                    <li><a href="<?php echo get_term_link( $tag->term_id, $tag->taxonomy ) ?>" title="<?php echo $tag->name ?>"><?php echo $tag->name ?></a></li>
                <?php endforeach;
            endif; ?>
        </ul>
    <?php endwhile;
    get_template_part( 'template-parts/pagination' );
else : ?>
	<p><?php esc_html_e( 'Sorry, no posts found', THEME_TEXTDOMAIN ); ?></p>
<?php endif;

get_sidebar();
