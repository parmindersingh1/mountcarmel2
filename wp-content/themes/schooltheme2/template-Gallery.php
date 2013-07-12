<?php
/*
Template Name: Gallery Post Type
*/
?>
<?php get_header(); ?>

		<div class="intro-wrap">
		
                        <div id="skip" class="wrap intro" role="main">
			<h1><?php the_title(); ?></h1>
                       </div>		
 
             </div><!--intro-wrap -->

		<div id="primary-content" class="site-content wrap">
                    
                      <div id="page-content" role="main">

	<?php 
    $args = array(
        'post_type' => 'gallery',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => -1
    );
    $query = new WP_Query( $args );

	while ( $query->have_posts() ) : $query->the_post(); ?>
	
		
		<?php if( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) { ?>
		
			<div class="gallery-block"><a title="<?php printf(__('Permanent Link to %s', 'framework'), get_the_title()); ?>" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large-feature'); ?><div id="gallery-link"> <?php the_title(); ?> </div></a></div>
			
		<?php } ?>	    
		
              
					
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	
		  </div><!-- #page-content -->
                  
                 <?php get_sidebar(); ?>
		</div><!-- .site-content -->
		



</div><!-- #main .wrapper -->
</div><!-- #page -->
<?php get_footer(); ?>