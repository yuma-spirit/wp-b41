<article <?php post_class(); ?>>
	<?php echo get_post_format(); ?>
	<h2><?php the_title(); ?></h2>
	<?php the_post_thumbnail( array( 275,275 ) ); ?>
	<p>by <?php the_author_posts_link(); ?></p>
	<p>Categories: <?php the_category(' '); ?></p>
	<p><?php the_tags('Tags: ',', '); ?></p>
	<p><?php the_content(); ?></p>
</article>