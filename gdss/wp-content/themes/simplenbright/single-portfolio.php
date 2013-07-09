<?php get_header(); ?>
			
			<div id="content" class="clearfix">
			
				<h1><?php _e("Portfolio", "site5framework"); ?> 
				<?php
				$portfoliodescpage = of_get_option('snb_portfoliodesc');
				$portfoliodesc = get_post_meta($portfoliodescpage, 'snbpd_pagedesc');
				?>
				
				<?php if ($portfoliodesc || is_array($portfoliodesc)) { 
				echo ' / <span>';
				echo $portfoliodesc[0].'</span>';
				}?>
				</h1>
				
				<div class="hrThickFull"></div>
			
				<div id="main" class="fullwidth" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
						<header>
							<h2 class="single-title" itemprop="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'site5framework' ); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						</header>
					
						<section class="post_content" itemprop="articleBody">
						
							<?php
							$thumb = get_image_path(get_post_meta($post->ID, 'snbp_pitemlink', true));
							if (!$thumb == '')
							{ ?>
							
							<div class="portfolioimg">
													
								<a href="<?php echo get_template_directory_uri(); ?>/timthumb.php?src=<?php echo get_image_path(get_post_meta($post->ID, 'snbp_pitemlink', true)); ?>&amp;w=960&amp;zc=1" class="prettyPhoto" title="<?php the_title(); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/timthumb.php?src=<?php echo get_image_path(get_post_meta($post->ID, 'snbp_pitemlink', true)); ?>&amp;w=960&amp;zc=1" alt="<?php the_title(); ?>">
								</a>
							
							</div>
												
							<?php }?>
							
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
											
					<?php endwhile; ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("No Posts Yet", "site5framework"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, What you were looking for is not here.", "site5framework"); ?></p>
					    </section>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->
<?php get_footer(); ?>