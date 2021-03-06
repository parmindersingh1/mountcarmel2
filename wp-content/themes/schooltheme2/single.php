<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>



	<div class="intro-wrap"> 
 		     <div id="skip" class="wrap intro" role="main">
             		<?php if ( is_single() ) : ?>
			<h1><?php the_title(); ?></h1>
             		<?php else : ?>
                 	<h1>News</h1>
	             <?php endif; ?>
     		</div>		
 	 </div><!--intro-wrap -->

                         <div id="primary-content" class="site-content wrap">
			  <div id="page-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>		
			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
                      <?php get_sidebar(); ?>
                     </div><!--.site-content -->
	

</div><!-- #main .wrapper -->
</div><!-- #page -->
<?php get_footer(); ?>
