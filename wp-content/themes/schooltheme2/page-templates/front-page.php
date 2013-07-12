<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


<div class="flex-container">
  <div class="flexslider">
<ul class="slides">
	<?php
	query_posts(array('category_name' => 'featured', 'posts_per_page' => 3));
	if(have_posts()) :
	    while(have_posts()) : the_post();
	?>
	  <li>
        
<?php $field = get_field('slider_colour', $post->ID); ?>      
<?php if($field=='blue') { ?>
 <div class="flex-caption background-blue">
<?php } elseif($field=='red') { ?>
<div class="flex-caption background-red">
<?php } elseif($field=='green') { ?>
<div class="flex-caption background-green">
<?php } ?>
  
        <h1><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

 <div class="slide-callout">
   <?php the_excerpt(); ?>

  <div class="more">
<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">Read More…</a>
</div>
 
</div>


</div>
                <div class="slider-image">
		<?php the_post_thumbnail(); ?>
		</div>
	  </li>
	<?php
	    endwhile;
	endif;
	wp_reset_query();
	?>
	</ul>

 </div>
</div>
	
  


	<div id="primary" class="site-content">
		<div id="content" role="main" class="wrap">

                      <div class="streamer">
                      <div class="heading">
			<h2>Featured
			<strong>Events</strong>
			</h2>
			<p class="more">
			<a href="/harvard?post_type=tribe_events&eventDisplay=month">More events</a>
			</p>
		      </div><!-- heading -->
                     <div id="Events_div">
                      <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Event Widgets')) : ?>
	              <?php endif; ?>
                    </div>
		      </div><!-- streamer -->	

      <div id="filter-drop" class="filter-wrap" >
     </div>


 
<div id="home_content">

<?php $pages = get_pages(array('child_of' => 39)); ?> 
    <?php foreach ($pages as $page): ?>

      <?php $field = get_field('choose_colour', $page->ID); ?>
       <?php if($field=='blue') { ?>
           <div class="content-box blue">
       <?php } elseif($field=='red') { ?>
           <div class="content-box red">
       <?php } elseif($field=='green') { ?>
            <div class="content-box green">
       <?php } ?>

           <div class="box-photo">
            <?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
           </div>
         
          <div class="box-text">
                 <h2 class="box-heading"><?php echo $page->post_title; ?></h2>
            <p><?php echo $page->post_excerpt; ?></p>
            <div class="more">
              <?php echo '<a href="' . get_permalink($page->ID) . '">Read more...</a>'; ?>            
            </div>
          </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="streamer streamer-social">
<div class="heading">
<h2 class="title">
<strong>Connect</strong>
with Harvard via:
</h2>
</div>

    <ul class="listing">
                <li class="fb"><a target="_blank" href="https://www.facebook.com"><img alt="Facebook" src="wp-content/themes/schooltheme2/images/fb-icon.jpg">Facebook</a></li>
                <li class="fb"><a target="_blank" href="https://twitter.com"><img alt="Twitter" src="wp-content/themes/schooltheme2/images/twitter-icon.jpg">Twitter</a></li>
                <li class="fb"><a target="_blank" href=""><img alt="YouTube" src="wp-content/themes/schooltheme2/images/pin-icon.jpg">YouTube</a></li>
                <li class="fb"><a target="_blank" href="http://www.linkedin.com/ "><img alt="Linked in" src="wp-content/themes/schooltheme2/images/linkedin-icon.png">Linked in</a></li>
            </ul>


</div>

		</div><!-- #content -->
	</div><!-- #primary -->


</div><!-- #main .wrapper -->
</div><!-- #page -->
<?php get_footer(); ?>