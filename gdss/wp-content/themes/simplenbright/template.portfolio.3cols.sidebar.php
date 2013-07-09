<?php
/*
 * Template Name: Portfolio 3 Cols With Sidebar
 */
get_header(); ?>

			<div id="content" class="clearfix">

				<h1><?php the_title(); ?> <?php if ( !get_post_meta($post->ID, 'snbpd_pagedesc', true)== '') { ?>/<?php }?> <span><?php echo get_post_meta($post->ID, 'snbpd_pagedesc', true); ?></span></h1>

				<div class="hrThickFull"></div>

				<div id="main" role="main">

							<ul class="filters">
								<li class="segment-1"><a href="#" data-value="all" class="selected"><?php _e('all', 'site5framework'); ?></a></li>
								<?php
								$categories=  get_categories('taxonomy=types&title_li='); foreach ($categories as $category){ ?>

								<li class="segment-<?php echo $category->term_id;?>"><a href="#" data-value="<?php echo $category->category_nicename;?>"><?php echo $category->name;?></a></li>
								<?php }?>

							</ul>

							<!-- begin .gallery -->

							<div class="gallery withsidebar">
								<ul id="itemList">
										<?php global $post; $args=array('post_type'=> 'portfolio','post_status'=> 'publish','orderby'=> 'menu_order','posts_per_page'=>6,'caller_get_posts'=>1,'paged'=>$paged,); query_posts($args); while (have_posts()): the_post();
										$taxo = wp_get_object_terms( get_the_ID(), 'types');
										?>
									<li class="<?php foreach ($taxo as $taxx) { echo strtolower(preg_replace('/\s+/', '-', $taxx->slug)). ' '; } ?>" data-id="id-<?php the_ID(); ?>">
										<div class="imgBox">

										<?php
										$thumb = get_image_path(get_post_meta($post->ID, 'snbp_pitemlink', true));
										if (!$thumb == '')
										{ ?>

										<img src="<?php echo get_template_directory_uri(); ?>/timthumb.php?src=<?php echo get_image_path(get_post_meta($post->ID, 'snbp_pitemlink', true)); ?>&amp;h=196&amp;w=203&amp;zc=1" alt="<?php the_title(); ?>">

										<?php } else { ?>

										<img src="<?php echo get_template_directory_uri(); ?>/timthumb.php?src=/library/images/slidersamples/slidesample3.png&amp;h=196&amp;w=203&amp;zc=1" alt="<?php the_title(); ?>" />

										<?php }?>


										</div>
										<div class="details">
											<?php the_title(); ?>
										</div>
										<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="overlay"></a>
									</li>
									<?php
									endwhile;?>
								</ul>
							</div>
							<!-- end .gallery -->


							<!-- begin #pagination -->
							<?php if (function_exists("wpthemess_paginate")) { wpthemess_paginate(); } ?>
							<!-- end #pagination -->

							<?php wp_reset_query(); ?>

				</div> <!-- end #main -->

				<!-- begin .sidebar -->
					<aside>
							<?php if ( is_active_sidebar( 'Portfolio' ) ) : ?>

								<?php dynamic_sidebar( 'Portfolio' ); ?>

							<?php else : ?>

								<!-- This content shows up if there are no widgets defined in the backend. -->

								<div class="help">

									<p><?php _e("Please activate some Widgets.", "site5framework"); ?></p>

								</div>

							<?php endif; ?>
					</aside>
				<!-- end .sidebar -->

			</div> <!-- end #content -->
		<script type="text/javascript">
			$j = jQuery.noConflict();
			$j(document).ready(function(){
			showOverlay();
			animatedSorting(); // Init animated sorting
			});
		</script>
<?php get_footer(); ?>