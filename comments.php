<?php

	// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!');

	if (post_password_required()) {
		echo '<p class="alert">This post is password protected. Enter the password to view comments.</p>';
		return;
	}
	
?>


<?php if (have_comments()) : ?>
	    <h2><?php comments_number('No Comments', 'One Comment', '% people have commented on this post' );?></h2>
	    <ol class="commentList">
	    	<?php wp_list_comments( array( 'callback' => 'blogfirst_comment' ) ); ?> 
        </ol>	
	<?php previous_comments_link() ?> <?php next_comments_link() ?>
<?php else : // this is displayed if there are no comments so far ?>
	<?php if (comments_open()) : ?>
		<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>
	<?php endif; ?>
<?php endif; ?>


<?php if (comments_open()) : ?>
	<h2 id="respond"><?php comment_form_title( 'Speak up!', 'Leave a comment to %s' ); ?></h2>
	<!--<p class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></p>-->
	<?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
		<p>You must be <a href="<?php echo wp_login_url(get_permalink()); ?>">logged in</a> to post a comment.</p>
	<?php else :
		$comments_args = array(
	        // change the title of send button 
	        'title_reply'=>'',
	        'label_submit'=>'Submit comment',
	        'logged_in_as'=>'<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>.' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
	        // remove "Text or HTML to be displayed after the set of comment fields"
	        'comment_notes_after' => '',
	        // redefine the textarea (comment body)
	        'comment_field' => '<textarea name="comment" id="comment" cols="100%" rows="6" placeholder="Type your comment here..."></textarea>',
        ); 
		comment_form($comments_args); ?>
	<?php endif; ?>
<?php endif; ?>