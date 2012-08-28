<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		<h1>Search Results</h1>
		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?>>
				<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<time datetime="<?php the_time('Y-m-d') ?>" pubdate><?php the_time('l, F jS, Y') ?></time>
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</article>
		<?php endwhile; ?>
		<?php if (show_posts_nav()) : ?>
			<nav class="nextPrevLinks">
				<?php my_paginate_links(); ?>
			</nav>
		<?php endif; ?>
	<?php else : ?>
		<h2>No posts found. Try a different search?</h2>
		<?php get_search_form(); ?>
	<?php endif; ?>

<?php get_footer(); ?>