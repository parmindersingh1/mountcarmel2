<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

              <div class="intro-wrap">
		
                        <div id="skip" class="wrap intro" role="main">
			<h1><?php the_title(); ?></h1>
                       </div>		
 
             </div><!--intro-wrap -->

		<div id="primary-content" class="site-content wrap">
                    
                      <div id="page-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>				
			<?php endwhile; // end of the loop. ?>
                    
                     </div><!-- #page-content -->
                  
                 <?php get_sidebar(); ?>
		</div><!-- .site-content -->
		



</div><!-- #main .wrapper -->
</div><!-- #page -->
<?php get_footer(); ?>