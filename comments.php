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
		<h2 class="comments-title"><?php __( 'Comments in this post', THEME_TEXTDOMAIN ) ?></h2>
		<?php //IMPORTANT. README: https://codex.wordpress.org/Function_Reference/wp_list_comments ?>
		<ol class="comment-list">
			<?php $args = array(
				'style'       => 'ul',
				'reply_text'  => __( 'Reply', THEME_TEXTDOMAIN ),
				'short_ping'  => true,
				'avatar_size' => '32',
			);
			wp_list_comments( $args ); ?>
		</ol>
		<?php //https://developer.wordpress.org/reference/functions/get_the_comments_navigation/
		$args = array(
			'prev_text' 		 => __( '<', THEME_TEXTDOMAIN ),
			'next_text' 		 => __( '>', THEME_TEXTDOMAIN ),
			'screen_reader_text' => __( 'View more comments', THEME_TEXTDOMAIN ),
		);
		the_comments_navigation( $args );

		if ( !comments_open() ) : ?>
			<p class="no-comments"><?php __( 'Comments are closed', THEME_TEXTDOMAIN ); ?></p>
		<?php endif;
	endif;

	//IMPORTANT. README: https://developer.wordpress.org/reference/functions/comment_form/
	$fields = array(
		'author' => '<p class="comment-form-author"><label for="author">' . __( 'Your name', THEME_TEXTDOMAIN ) . '</label>' . '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" /></p>',
		'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Your email', THEME_TEXTDOMAIN ) . '</label>' . '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" /></p>',
		'url' => '<p class="comment-form-url"><label for="url">' . __( 'Your website', THEME_TEXTDOMAIN ) . '</label><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
		'cookies' => '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" /><label for="wp-comment-cookies-consent">' . __( 'Save my name, email, and website in this browser for the next time I comment.', THEME_TEXTDOMAIN ) . '</label></p>'
	);
	$comment_field = '<p class="comment-form-comment"><label for="comment">' . _x( 'Your comment here', THEME_TEXTDOMAIN ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>';
	$must_log_in = '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.', THEME_TEXTDOMAIN ), wp_login_url( apply_filters( 'the_permalink', get_permalink() ) ) ) . '</p>';
	$logged_in_as = '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', THEME_TEXTDOMAIN ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink() ) ) ) . '</p>';

	$args = array(
		'fields' 			  => $fields,
		'comment_field' 	  => $comment_field,
		'must_log_in'		  => $must_log_in,
		'logged_in_as'  	  => $logged_in_as,
		'id_form'			  => 'commentform',
		'class_form'		  => 'comment-form',
		'id_submit'			  => 'submit',
		'class_submit'		  => 'submit',
		'title_reply_before'  => '<h3 id="reply-title" class="comment-reply-title">',
		'title_reply'		  => __( 'Write your comment here', THEME_TEXTDOMAIN ),
		'title_reply_after'	  => '</h3>',
		'cancel_reply_before' => '<small>',
		'cancel_reply_link'   => __( 'Cancel reply', THEME_TEXTDOMAIN ),
		'cancel_reply_after'  => '</small>',
		'label_submit'		  => __( 'Send your comment', THEME_TEXTDOMAIN )
	);
	comment_form( $args ); ?>
</div>