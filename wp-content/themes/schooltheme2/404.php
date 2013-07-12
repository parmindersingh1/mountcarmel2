<?php
/**
 * The template for displaying 404 pages (Not Found).
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

				<div id="main-title" >
				<h2 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentytwelve' ); ?></h2>
				</div>

				<div class="entry-content">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			
                      </div><!-- #content -->
                <?php get_sidebar(); ?>
		</div><!-- .site-content -->
		
</div><!-- #main .wrapper -->
</div><!-- #page -->
<?php get_footer(); ?>