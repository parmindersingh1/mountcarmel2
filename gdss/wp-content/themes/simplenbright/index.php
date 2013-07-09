<?php get_header(); ?>

			<div id="content" class="clearfix">

				<!-- begin nivo slider -->
					<?php if(of_get_option('snb_displayslider') == '1') { ?>
					<?php if(of_get_option('snb_slidertype') == 'nivo') { ?>
					<?php get_template_part( 'homepage', 'slider' ); ?>
					<?php } ?>
					<?php } ?>
				<!-- end nivo slider -->

				<?php if(of_get_option('snb_blurbhome') == '1') { ?>
				<!-- begin .blurb -->
				<div class="blurb">
					<?php if(!of_get_option('snb_blurb') == '')  { ?>
					<?php echo of_get_option('snb_blurb') ?>
					<?php }?>
				</div>
				<div class="hrThickFull"></div>
				<!-- end .blurb -->
				<?php } ?>

				<?php if(of_get_option('snb_homecontent') == '1') { ?>
				<!--begin cols content -->
				<div class="oneThird homecontent">
					<h3><?php echo of_get_option('snb_homecontent1title') ?></h3>
					<p>
					<img src="<?php echo of_get_option('snb_homecontent1img') ?>" class="alignleft" alt="<?php echo of_get_option('snb_homecontent1title') ?>" />
					<?php echo of_get_option('snb_homecontent1') ?>
					</p>

					<?php if(of_get_option('snb_homecontent1url') != '') { ?>
					<p><a href="<?php echo of_get_option('snb_homecontent1url') ?>" class="more-link"><?php _e('Read more', 'site5framework'); ?></a></p>
					<?php } ?>
				</div>

				<div class="oneThird homecontent">
					<h3><?php echo of_get_option('snb_homecontent2title') ?></h3>
					<p>
					<img src="<?php echo of_get_option('snb_homecontent2img') ?>" class="alignleft" alt="<?php echo of_get_option('snb_homecontent2title') ?>" />
					<?php echo of_get_option('snb_homecontent2') ?>
					</p>

					<?php if(of_get_option('snb_homecontent2url') != '') { ?>
					<p><a href="<?php echo of_get_option('snb_homecontent2url') ?>" class="more-link"><?php _e('Read more', 'site5framework'); ?></a></p>
					<?php } ?>
				</div>

				<div class="oneThird last homecontent">
					<h3><?php echo of_get_option('snb_homecontent3title') ?></h3>
					<p>
					<img src="<?php echo of_get_option('snb_homecontent3img') ?>" class="alignleft" alt="<?php echo of_get_option('snb_homecontent3title') ?>" />
					<?php echo of_get_option('snb_homecontent3') ?>
					</p>

					<?php if(of_get_option('snb_homecontent3url') != '') { ?>
					<p><a href="<?php echo of_get_option('snb_homecontent3url') ?>" class="more-link"><?php _e('Read more', 'site5framework'); ?></a></p>
					<?php } ?>
				</div>
				<!-- end cols content -->
				<div class="hrThickFull"></div>
				<?php } ?>


				<?php if(of_get_option('snb_portfoliohome') == '1') { ?>
				<!-- begin .gallery -->
				<div class="gallery fourperrow">
				<!-- // optional "view full portfolio" button on homepage featured projects -->
				<a href="<?php echo of_get_option('snb_portfoliohomebuttonurl') ?>" class="butViewPortfolio tooltip" title="<?php echo of_get_option('snb_portfoliohomebuttontitle') ?>"><?php echo of_get_option('snb_portfoliohomebuttontitle') ?></a>
				<h2><?php echo of_get_option('snb_portfoliohometitle') ?></h2>
				<ul>

					<?php $args=array('post_type'=> 'portfolio', 'post_status'=> 'publish','orderby'=> 'menu_order','posts_per_page'=>3,'showposts'=>4,'caller_get_posts'=>1,'paged'=>$paged,); query_posts($args); while (have_posts()): the_post(); ?>

					<li>
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
						<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="overlay tooltip"></a>
					</li>
						<?php
						endwhile; wp_reset_query(); ?>

				</ul>
				</div>
				<!-- end .gallery -->
				<?php } ?>

			</div> <!-- end #content -->
		<script type="text/javascript">
		$j = jQuery.noConflict();
		$j(document).ready(function(){
					showOverlay();
				});
		</script>
<?php get_footer(); ?>
