<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jmc87
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php $jmc87_comment_count = get_comments_number();
			if ( '1' === $jmc87_comment_count ) {
				printf(
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', THEME_TRANSLATE ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( 
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $jmc87_comment_count, 'comments title', THEME_TRANSLATE ) ),
					number_format_i18n( $jmc87_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2>
		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
		</ol>

		<?php the_comments_navigation();

		if ( !comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', THEME_TRANSLATE ); ?></p>
		<?php endif;
	endif;
	//IMPORTANT. README: https://developer.wordpress.org/reference/functions/comment_form/
	$args = array();
	comment_form( $args ); ?>
</div>