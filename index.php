<?php get_header(); ?>

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h1><?php the_title(); ?></h1>
			<time datetime="<?php the_time('Y-m-d') ?>" pubdate><?php the_time('F jS, Y') ?></time> <!-- by <?php the_author() ?> -->
			<?php if (has_post_thumbnail()) { ?>
		        <a href="<?php the_permalink() ?>">
		            <?php
                	    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium', false, '' );
                        echo '<img class="postThumb" src="'. $src[0] .'" />';
                    ?>
                </a>
            <?php } ?>
			<?php the_content('Read more...'); ?>
			<div class="comments-link"><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?></div>
		</article>
	<?php endwhile; ?>
	
	<?php if (show_posts_nav()) : ?>
		<div class='pagination'>
			<span class='older'><?php next_posts_link('Older posts &raquo;'); ?></span>
			<span class='newer'><?php previous_posts_link('&laquo; Newer posts'); ?></span>
		</div>
	<?php endif; ?>
	
	<?php else : ?>
		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>
	<?php endif; ?>

<?php get_footer(); ?>