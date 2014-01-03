<?php get_header(); ?>

<?php get_sidebar(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="post-title post-title-single">
				<h1><?php the_title(); ?></h1>
				<time datetime="<?php the_time('Y-m-d') ?>" pubdate><span class="name" ><a href="/">Barry Clark</a> - </span><?php the_time('F jS, Y') ?></time> <!-- by <?php the_author() ?> -->
			</div>
			<?php if (has_post_thumbnail()) { ?>
		        <a href="<?php the_permalink() ?>">
		            <?php
                	    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium', false, '' );
                        echo '<img class="postThumb" src="'. $src[0] .'" />';
                    ?>
                </a>
            <?php } ?>

            <?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
			<?php wp_link_pages( 'before=<p class="link-pages">Page: ' ); ?>
			<a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php the_title(); ?>" data-via="bazNYC" data-related="bazNYC">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			<hr/>
			<?php comments_template(); ?>
		</article>

	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>

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