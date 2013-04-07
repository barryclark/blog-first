<?php get_header(); ?>

<?php get_sidebar(); ?>

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="post-title">
				<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
				<time datetime="<?php the_time('Y-m-d') ?>" pubdate><?php the_time('F jS, Y') ?></time> <!-- by <?php the_author() ?> -->
			</div>
			<?php if (has_post_thumbnail()) { ?>
		        <a href="<?php the_permalink() ?>">
		            <?php
                	    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium', false, '' );
                        echo '<img class="postThumb" src="'. $src[0] .'" />';
                    ?>
                </a>
            <?php } ?>
			<?php the_content('Read more...'); ?>
			<?php wp_link_pages( 'before=<p class="link-pages">Page: ' ); ?>
			<div class="comments-link"><?php //comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?></div>
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

<aside class="profile">
    <div class="profile-bottom">

    	<hr/>

        <div class="profile-pic">
	        <a href="<?php echo home_url(); ?>/">
	          <img src="<?php bloginfo('template_directory'); ?>/images/baz-circle.png" />
	        </a>
	    </div>

        <div class="profile-data">
	        <div class="profile-name">
		        <a href="<?php echo home_url(); ?>/">
		          <h1>Barry Clark</h1>
		        </a>
		    </div>

	        <p class="profile-description">Builder of things. Lover of lean methodology, coding, UX and side projects. Director of Tech Product at <a href="https://twitter.com/dosomething">@DoSomething</a>. I tweet at <a href="https://twitter.com/baznyc">@BazNYC</a>. Check out my <a href="/">Latest Posts</a> and <a href="/bucket-list">Bucket List</a>.</p>
	    </div>
    </div>
</aside>

<?php get_footer(); ?>