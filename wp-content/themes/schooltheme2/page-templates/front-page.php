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
              
 <div class="flex-caption">
  
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
			<a href="/events">More events</a>
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
        <div class="content-box blue">
           <div class="box-photo">
            <?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
           </div>
         
          <div class="box-text">

     <h5><?php  the_field('choose_colour'); ?></h5>

            <h2 class="box-heading"><?php echo $page->post_title; ?></h2>
            <p><?php echo $page->post_excerpt; ?></p>
            <div class="more">
              <?php echo '<a href="' . get_permalink($page->ID) . '">Read more...</a>'; ?>            
            </div>
          </div>
        </div>
    <?php endforeach; ?>




  
   </div>

		</div><!-- #content -->
	</div><!-- #primary -->


</div><!-- #main .wrapper -->
</div><!-- #page -->
<?php get_footer(); ?>