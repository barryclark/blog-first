	
	</div><!-- end .wrapper -->

	<footer>	
		<div class="archives">
			<h3>View older posts</h3>
			<ul>
				<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
				  <option value=""><?php echo esc_attr( __( 'Select a month' ) ); ?></option> 
				  <?php wp_get_archives( 'type=monthly&format=option&show_post_count=1' ); ?>
				</select>
			</ul>
		</div>


		<!--<h3>Categories</h3>
		<ul>
			<?php wp_list_categories('show_count=1&title_li='); ?>
		</ul>-->
	
		<div class="search">
			<h3>Search for posts</h3>
			<form action="/" method="get">
				<input type="search" name="s" placeholder="search" />
				<button type="submit">Search</button>
			</form>
		</div>

		<!--<small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small>-->	
	</footer>
	
		
    <?php wp_footer(); ?>

	<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->

</body>
</html>