<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

 <div class="intro-wrap">
		
                       <div id="skip" class="wrap intro" role="main">
			<h1></h1>
                       </div>		
 
             </div><!--intro-wrap -->

		<div id="primary-content" class="site-content wrap">
                    
                      <div id="page-content" role="main">
		<?php if ( have_posts() ) : ?>

			<div id="main-title" >
				<h2 class="entry-title"><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
			</div>

			<?php twentytwelve_content_nav( 'nav-above' ); ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>
			
				<div id="main-title" >
				<h2 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h2>
				</div>

				<div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			

		<?php endif; ?>

	    </div><!-- #content -->
                 <?php get_sidebar(); ?>
		</div><!-- .site-content -->

</div><!-- #main .wrapper -->
</div><!-- #page -->
<?php get_footer(); ?>