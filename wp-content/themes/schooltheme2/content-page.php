<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>


              <div class="intro-wrap">
		
                        <div id="skip" class="wrap intro" role="main">
			<h1><?php the_title(); ?></h1>
                       </div>		
 
             </div><!--intro-wrap -->

		<div id="primary-content" class="site-content wrap">
                    
                      <div id="page-content" role="main">
                      <div id="main-title" >
			<h2 class="entry-title"><?php the_title(); ?></h1>
                      </div>
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
                       </div><!-- #content -->
                 <?php get_sidebar(); ?>
		</div><!-- .site-content -->
		
	
