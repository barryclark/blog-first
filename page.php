<?php get_header(); ?>

<?php get_sidebar(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="post-title post-title-single">
				<h1><?php the_title(); ?></h1>
				<time><span class="name" ><a href="/">Barry Clark</a></span></time>
			</div>
			<?php if (has_post_thumbnail()) { ?>
		        <a href="<?php the_permalink() ?>">
		            <?php
                	    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium', false, '' );
                        echo '<img class="postThumb" src="'. $src[0] .'" />';
                    ?>
                </a>
            <?php } ?>
            <?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
            <?php wp_link_pages( 'before=<p class="link-pages">Page: ' ); ?>
		</article>
	<?php endwhile; endif; ?>


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

	        <p class="profile-description">Builder of things. Lover of lean methodology, coding, UX and side projects. Director of Tech Product at <a href="https://twitter.com/dosomething" target="_blank">@DoSomething</a> in NYC, more info on my <a href="http://www.linkedin.com/in/bazclark/">Linkedin profile</a>.</p>
	        <p class="profile-description">I tweet at <a href="https://twitter.com/baznyc" target="_blank">@BazNYC</a>. Check out my <a href="/bucket-list">Bucket List</a> and <a href="/">Latest Posts</a>.</p>
	    </div>
    </div>
</aside>
<a class="back-to-front-page" href="/">Back to front page</a>
<?php get_footer(); ?>