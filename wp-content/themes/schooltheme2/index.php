<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	

             <?php query_posts(array('category_name' => 'News')); ?>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>

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
			<?php endwhile; ?>

                       </div><!-- #content -->
                 <?php get_sidebar(); ?>
              </div><!--.site-content -->
			

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">

			<?php if ( current_user_can( 'edit_posts' ) ) :
				// Show a different message to a logged-in user who can add posts.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'No posts to display', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwelve' ), admin_url( 'post-new.php' ) ); ?></p>
				</div><!-- .entry-content -->

			<?php else :
				// Show the default message to everyone else.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			<?php endif; // end current_user_can() check ?>

			</article><!-- #post-0 -->

		<?php endif; // end have_posts() check ?>




</div><!-- #main .wrapper -->
</div><!-- #page -->
<?php get_footer(); ?>