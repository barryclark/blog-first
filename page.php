<?php get_header(); ?>

<?php get_sidebar(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h1><?php the_title(); ?></h1>
			<time datetime="<?php the_time('Y-m-d') ?>" pubdate><span class="name" ><a href="/">Barry Clark</a> - </span><?php the_time('F jS, Y') ?></time> <!-- by <?php the_author() ?> -->
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

	        <p class="profile-description">Builder of things. Lover of lean methodology, coding, UX and side projects. Director of Tech Product at <a href="https://twitter.com/dosomething">@DoSomething</a>. I tweet at <a href="https://twitter.com/baznyc">@BazNYC</a>. Check out my <a href="/">Latest Posts</a> and <a href="/bucket-list">Bucket List</a>.</p>
	    </div>
    </div>
</aside>
	
<?php get_footer(); ?>