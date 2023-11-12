<?php get_header() ?>



		<!-- Main Content -->
		<div class="main-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<!-- Banner -->
						<div class="widget kd-banner text-center">
							<div class="widget-inner">
								<a href="<?php echo esc_url(home_url( )); ?>">
									<img src="<?php echo get_template_directory_uri()?>/assets/images/banner-long.png" alt="Banner">
								</a>
							</div>
						</div>
						<!-- End Banner -->

						<div class="posts">
							<!-- Article -->
							<?php while(have_posts()): the_post()?>
							<article id="post-<?php the_ID();?>" <?php post_class( 'post' );?>>

								<div class="post-header">
									<!-- Title -->
									<h2 class="title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h2>
									<!-- End Title -->
									<div class="post-details">
										<div class="post-avatar">
										  <?php
 
											global $post;
											$author_id = get_post_field('post_author' , $post->ID);   
											$output = get_avatar_url($author_id); 
											;
											
											?>
											<a href="<?php the_permalink(); ?>">
											  <?php echo '<img src="'.$output.'"/>' ?>
											</a>
										</div>
										<div class="post-author">by <a href="<?php the_author_url()?>"><?php the_author(); ?></a></div>
										<div class="post-date"><?php the_time('F j, Y')?></div>
										<div class="post-cat">in <a href="<?php the_permalink(); ?>" rel="category tag"><?php the_category( ' , ' ); ?></a></div>
									</div>
								</div>

								<!-- Media -->
								<div class="post-media">
									<img src="<?php echo the_post_thumbnail_url(  ); ?>" alt="Post">
								</div>
								<!-- End Media -->

								<div class="post-content">
									<!-- The Excerpt -->
									<div class="the-excerpt">
									   <?php the_excerpt(); ?>
									</div>
									<!-- End The Excerpt -->

									<!-- Read More -->
									<div class="read-more">
										<a href="<?php the_permalink(); ?>">Continue Reading...</a>
									</div>
									<!-- End Read More -->
									<!-- Share Post -->
									<div class="post-share">
										<div class="kd-sharing-post-social">
											<?php echo do_shortcode('[Sassy_Social_Share]'); ?>
										</div>
									</div>
									<!-- Share Post -->
								</div>
							</article>
							<!-- End Article -->

							<?php endwhile; wp_reset_postdata(  ) ?>

						
						</div>
						<!-- Pagination -->
						
						<div class="pagination">
						
							<div class="newer">
							
								<?php previous_post_link('%link', '<i class="fas fa-chevron-left"></i> Newer Posts'); ?>
							</div>
							<div class="older">
							
								<?php next_post_link('%link', 'Older Posts <i class="fas fa-chevron-right"></i>'); ?>
							</div>
						</div>
						<!-- End Pagination -->
					</div>
					<div class="col-sm-4">
						<div class="sidebar">
							<?php dynamic_sidebar( 'main_sidebar' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Main Content -->

<?php get_footer(); ?>