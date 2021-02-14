<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
	
	<div class="content-area">
		<main>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<div class="news col-md-9">
							<?php
							//If there are any posts
							if(have_posts()):
								// While have posts, show them
								while(have_posts()): the_post();

								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;
							else:
							?>
	
							<p>There's nothing yet to be displayed!</p>

							<?php endif; ?>
						</div>
						<?php get_sidebar( 'blog' ); ?>
					</div>
				</div>
			</section>
			<section class="map">
				<div class="container">
					<div class="row">
						<!-- Display map here -->
					</div>
				</div>
			</section>
		</main>
	</div>
<?php get_footer(); ?>
