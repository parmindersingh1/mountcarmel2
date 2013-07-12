<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
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

		     </div><!-- #content -->    
                  <?php get_sidebar(); ?>            
		</div><!-- .site-content -->
</div><!-- #main .wrapper -->
</div><!-- #page -->
<?php get_footer(); ?>