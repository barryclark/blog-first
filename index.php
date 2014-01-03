<?php get_header(); ?>

<?php get_sidebar(); ?>

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<a class="content" href="<?php the_permalink() ?>">
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div class="post-title">
					<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
					<time datetime="<?php the_time('Y-m-d') ?>" pubdate><a class="time" href="<?php the_permalink() ?>"><?php the_time('F jS, Y') ?></a></time> <!-- by <?php the_author() ?> -->
				</div>
				<?php if (has_post_thumbnail()) { ?>
			        <a href="<?php the_permalink() ?>">
			            <?php
	                	    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium', false, '' );
	                        echo '<img class="postThumb" src="'. $src[0] .'" />';
	                    ?>
	                </a>
	            <?php } ?>
				<a class="content" href="<?php the_permalink() ?>"><?php echo strip_tags(get_the_content_with_formatting(''), '<img><iframe><h1><h2><h3><strong><b><i><span><br><div><p>'); ?></a>
				<!--<?php wp_link_pages( 'before=<p class="link-pages">Page: ' ); ?>-->
				<!--<div class="comments-link"><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?></div>-->
			</article>
		</a>
	<?php endwhile; ?>
	
	<?php else : ?>
		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>
	<?php endif; ?>

<div class="pbd-more-posts"></div>

<aside class="profile">
    <div class="profile-bottom">

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

	        <p class="profile-description">Builder of things. Lover of lean methodology, coding, UX and side projects. Director of Tech Product at <a href="https://twitter.com/dosomething" target="_blank">@DoSomething</a> in NYC, more info on my <a href="http://www.linkedin.com/in/bazclark/">Linkedin profile</a>.</p>
	        <p class="profile-description">I tweet at <a href="https://twitter.com/baznyc" target="_blank">@BazNYC</a>. Check out my <a href="/bucket-list">Bucket List</a> and <a href="/">Latest Posts</a>.</p>
	    </div>
    </div>
</aside>

<?php get_footer(); ?>