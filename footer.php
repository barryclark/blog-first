	
	</div><!-- end .wrapper -->

	<footer>	

		<!--<div class="archives">
			<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
			  <option value=""><?php echo esc_attr( __( 'View older posts' ) ); ?></option> 
			  <?php wp_get_archives( 'type=monthly&format=option&show_post_count=1' ); ?>
			</select>
		</div>-->


		<!--<h3>Categories</h3>
		<ul>
			<?php wp_list_categories('show_count=1&title_li='); ?>
		</ul>-->
	
		

	 	<div class="search">
			<form action="/" method="get">
				<input type="search" name="s" placeholder="Search this site" />
				<button type="submit">Search</button>
			</form>
		</div>

		<!-- This theme took a lot of my time to build, if you like it please give me a shout out. It's much appreciated! -->
		<h4>Powered by <a target="_blank" href="http://bazclark.com/blog-first">Blog First</a> by <a target="_blank" href="http://twitter.com/bazclef">Baz Clark</a></h4>
		
		<!--<small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small>-->	
	</footer>

    <?php wp_footer(); ?>

	<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->

</body>
</html>