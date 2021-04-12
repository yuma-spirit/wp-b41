<article <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 275,275 ) ); ?></a>
	<div class="meta-info">
		<p><i class="bi bi-sticky"></i> Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
		<p><i class="bi bi-card-list"></i> Categories: <?php the_category(' '); ?></p>
		<p> 
			<?php //the_tags('Tags: ',', '); ?>
			<?php
				if ( has_tag() ) {
			?>
					<i class="bi bi-tag"></i>
			<?php
					the_tags('Tags: ',', ');
				}
			?>
		</p>
	</div>
	<p><?php the_content(); ?></p>
</article>