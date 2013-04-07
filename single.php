<?php get_header(); ?>

<?php get_sidebar(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="post-title">
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

<!-- Social buttons 
<div class="buttonsWrap">
	<div class="twitterBtn">
		<a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
	</div>
	
	<div class="facebookBtn"><iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink()?>&layout=box_count&show_faces=true&width=450&action=like&font&colorscheme=light&height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:50px; height:65px;" allowTransparency="true"></iframe>
	</div>
	
	<div class="linkedInBtn">
		<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
		<script type="IN/Share" data-url="<?php the_permalink()?>" data-counter="top"></script>
	</div>
</div>-->


            <?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
			<?php wp_link_pages( 'before=<p class="link-pages">Page: ' ); ?>
			<?php //comments_template(); ?>
		</article>
	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
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