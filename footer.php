	<footer>	
		<small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small>	
	</footer>
	
	</div><!-- end .wrapper -->
		
	<!-- JavaScript -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.7.2.min.js"><\/script>')</script>
	<script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
    
    <?php wp_footer(); ?>

	<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->

</body>
</html>