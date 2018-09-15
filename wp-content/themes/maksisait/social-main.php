<ul class="social-network">
	<?php if ( have_posts() ) : query_posts('cat=9');
		while (have_posts()) : the_post(); ?>

	<li>
		<a href="<?php echo get_post_meta($post->ID , 'soc-url' , true); ?>" target="_blank">
			<i class="<?php echo get_post_meta($post->ID , 'font-awesome' , true); ?>"></i>
		</a>
	</li>

	<? endwhile; endif; wp_reset_query(); ?>
</ul>