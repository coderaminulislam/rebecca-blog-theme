<?php get_header(); ?>
<?php global $post; $author_id = $post->post_author; ?>

		<!-- Main Content -->
		<div class="main-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<!-- Banner -->
						<div class="widget kd-banner text-center">
							<div class="widget-inner">
								<a href="#">
									<img src="<?php echo get_template_directory_uri()?>/assets/images/banner-long.png" alt="Banner">
								</a>
							</div>
						</div>
						<!-- End Banner -->

						<div class="posts">
							<!-- Article -->
							<article class="post">

								<div class="post-header">
									<!-- Title -->
									<h2 class="title">
										<?php the_title(); ?>
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
											  <?php echo '<img src="'.$output.'"/>' 
											?>
										
											
									
										</div>
										<div class="post-author">by <a href="<?php the_author_url()?>"><?php the_author(); ?></a></div>
										<div class="post-date"><?php the_time('F j, Y')?></div>
										<div class="post-cat">in <a href="<?php the_permalink(); ?>" rel="category tag"><?php the_category( ' , ' ); ?></a></div>
									</div>
								</div>

								<!-- Media -->
								<div class="post-media">
									<img src="<?php the_post_thumbnail_url(  ); ?>" alt="Post">
								</div>
								<!-- End Media -->

								<div class="post-content">
									<!-- The Content -->
									<div class="the-content">
										<?php the_content(); ?>
									</div>
									<!-- End The Content -->

									<!-- Tag -->
									<div class="post-tags">
										<span>Tags from the story : </span>
										<?php echo get_the_tag_list(); // Display tags as links ?>
										
									</div>
									<!-- End Tag -->

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

							<!-- Author Post -->
							<div id="post-author">
								<div class="header-top clearfix">
									<div class="avatar-author">
									<?php echo '<img src="'.$output.'"/>'?>
									</div>
									<div class="author-name">
										<span>Written By</span>
										<h2 class="title">
											<a href="<?php the_author_url()?>"><?php echo get_the_author_meta( 'display_name', $author_id );?></a>
										</h2>
										<span>Content Curator</span>
									</div>
									<div class="author-socials text-right">
									
										<a href="https://www.facebook.com/coderaminul" title="Facebook"><i class="fab fa-facebook-f"></i></a>
										<a href="https://www.facebook.com/coderaminul" title="Twitter"><i class="fab fa-twitter"></i></a>
										<a href="https://www.linkedin.com/in/coderaminul/" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
										
									</div>
								</div>
							
								<div class="author-description">
								<?php echo get_the_author_meta( 'description', $author_id );?>
								</div>
							</div>
							<!-- End Author Post -->

							<!-- Related Posts -->
							<div id="related-posts">
								<h2 class="title">Recent Posts</h2>
								<div class="row">
									<?php $related = new WP_Query(
										array(
											'category__in'   => wp_get_post_categories( $post->ID ),
											'posts_per_page' => 2,
											'post__not_in'   => array( $post->ID )
										)
									);

									if( $related->have_posts() ) { 
										while( $related->have_posts() ) { 
											$related->the_post(); ?>
											<div class="col-sm-6">
											<div class="post">
												<div class="post-media">
													<a href="<?php the_permalink()?>">
														<img src="<?php the_post_thumbnail_url(  ); ?>" alt="Image">
													</a>
												</div>
												<div class="post-entry">
													<h3 class="title">
														<a href="<?php the_permalink()?>"><?php the_title(); ?></a>
													</h3>
													<div class="post-details">
														<span class="post-author">By <?php the_author(); ?>, <?php the_time('F j, Y'); ?></span>
													</div>
													<div class="the-excerpt">
														<?php the_excerpt(); ?>
													</div>
												</div>
											</div>
										</div>
									<?php	}
										wp_reset_postdata();
									}
									?>
						
									
								</div>
							</div>
							<!-- Related Posts -->
                            <?php if ( comments_open() || get_comments_number() ):
										comments_template();
									endif;

									
								?>
							

						</div>
					</div>
					<div class="col-sm-4">
						<div class="sidebar">
							<?php dynamic_sidebar( 'main_sidebar' )?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Main Content -->

<?php get_footer(  ); ?>