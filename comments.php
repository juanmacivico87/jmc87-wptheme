<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jmc87-wptheme
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php $comment_count = get_comments_number();
			if ( $comment_count === '1' ) :
				printf( esc_html__( 'One thought on &ldquo;%1$s&rdquo;', THEME_TEXTDOMAIN ), '<span>' . get_the_title() . '</span>' );
			else :
				printf( esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', THEME_TEXTDOMAIN ) ), number_format_i18n( $comment_count ), '<span>' . get_the_title() . '</span>' );
			endif; ?>
		</h2>
		<?php the_comments_navigation(); ?>

		<?php //IMPORTANT. README: https://codex.wordpress.org/Function_Reference/wp_list_comments ?>
		<ol class="comment-list">
			<?php $args = array(
				'style'      => 'ol',
				'short_ping' => true,
			);
			wp_list_comments( $args ); ?>
		</ol>

		<?php the_comments_navigation();

		if ( !comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', THEME_TEXTDOMAIN ); ?></p>
		<?php endif;
	endif;

	//IMPORTANT. README: https://developer.wordpress.org/reference/functions/comment_form/
	$args = array();
	comment_form( $args ); ?>
</div>