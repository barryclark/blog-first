<?php

	// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!');

	if (post_password_required()) {
		echo '<p class="alert">This post is password protected. Enter the password to view comments.</p>';
		return;
	}
	
?>

<?php if (have_comments()) : ?>
	    <ol id="commentList">
	<h2><?php comments_number('No Comments', 'One Comment', '% people have commented on this post' );?></h2>	<!-- View functions.php for comment markup -->
    <?php foreach ($comments as $comment) : ?>
		<li class="comment-item">
			<a class="comment-item-gravatar" href="<?php comment_author_url(); ?>"><?php echo get_avatar($comment, 80); ?></a>
			<div class="comment">
				<span class="author"><?php comment_author_link() ?> - <?php comment_date('F jS, Y') ?></span>
				<div class="comment-text"><?php if ($comment->comment_approved == '0') : ?>
				<p>Your comment is awaiting moderation.</p>
				<?php endif; ?>
				<?php comment_text() ?>
			</div>
			</div>
		</li>
	<?php
		endforeach; // end for each comment
	?>
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
	<h2 id="respond"><?php comment_form_title( 'Leave a comment', 'Leave a comment to %s' ); ?></h2>
	<!--<p class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></p>-->
	<?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
		<p>You must be <a href="<?php echo wp_login_url(get_permalink()); ?>">logged in</a> to post a comment.</p>
	<?php else : ?>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php if (is_user_logged_in()) : ?>
				<span class="logged-in-as">You are logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>.</span>
			<?php else : ?>
				<label for="author">Name (required)</label>
				<input type="text" name="author" id="author" placeholder="Name (required)" size="22" tabindex="1" required />
				
				<label for="email">Email (required - will not be published)</label></br>
				<input type="email" name="email" id="email" placeholder="Email (required)" size="22" tabindex="2" required /></br>
				
				<label for="url">Website</label>
				<input type="url" name="url" id="url" placeholder="Your website" size="22" tabindex="3" /></br>
			<?php endif; ?>
			<textarea name="comment" id="comment" cols="100%" rows="6" tabindex="4" placeholder="Type your comment here..."></textarea>
			<button type="submit" name="submit" id="send" tabindex="5">Submit Comment</button>
			<?php comment_id_fields(); ?>
			<?php do_action('comment_form', $post->ID); ?>
		</form>
	<?php endif; ?>
<?php endif; ?>