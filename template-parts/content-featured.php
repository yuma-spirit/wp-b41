<article <?php post_class( array( 'class' => 'featured' ) ); ?>>
	<h2><?php the_title(); ?></h2>
	<div class="thumbnail">
		<?php the_post_thumbnail( 'medium', array( 'class' => 'img-fluid' ) ); ?>
	</div>

	<div class="meta-info">
		<p>
			<i class="bi bi-sticky"></i> Posted in <span><?php echo get_the_date(); ?></span> 
			by <span><?php the_author_posts_link(); ?></span>
			<i class="bi bi-card-list"></i> Categories: <span><?php the_category(' '); ?></span>
			<?php //the_tags('Tags: ',', '); ?>
			<?php
				if ( has_tag() ) {
			?>
					<i class="bi bi-tag"></i>
			<?php
					the_tags('Tags: <span>',', ', '</span>');
				}
			?>
		</p>
		<p><span><?php echo get_the_date(); ?></span></p>
	</div>
	<p><?php the_content(); ?></p>
</article>