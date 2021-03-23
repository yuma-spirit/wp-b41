<?php get_header(); ?>
	<div class="content-area">
		<main>
			<section class="slide">
				<div class="container">
					<div class="row">
						<!-- Slide -->
					</div>
				</div>
			</section>
			<section class="services">
				<div class="container">
					<div class="row">
						<?php get_sidebar( 'home' ); ?>
						<div class="col-md-9">
							<h1>Our Services</h1>
							<div class="row">
								<div class="col-sm-4">
									<div class="services-item">
										<?php 
											if(is_active_sidebar(' services-1 ')) {
												dynamic_sidebar( 'services-1' );
											}
										?>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="services-item">
										<?php 
											if(is_active_sidebar(' services-2 ')) {
												dynamic_sidebar( 'services-2' );
											}
										?>	
									</div>
								</div>
								<div class="col-sm-4">
									<div class="services-item">
										<?php 
											if(is_active_sidebar(' services-3 ')) {
												dynamic_sidebar( 'services-3' );
											}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</section>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<div class="news col-md-9 offset-md-3">
							<div class="row">
								<?php 

								$featured = new WP_Query( 'post_type=post&posts_per_page=5&category_name=Atopic' );

								if ( $featured->have_posts() ):
									while( $featured->have_posts() ): $featured->the_post();
								?>

								<div class="col-12">
									<?php get_template_part( 'template-parts/content', 'featured' ); ?>
								</div>

								<?php
									endwhile;
									wp_reset_postdata();
								endif;

								?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="map">
				<div class="container">
					<div class="row">
						<!-- Map -->
					</div>
				</div>
			</section>
		</main>
	</div>
<?php get_footer(); ?>
