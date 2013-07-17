<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="fb_likebutton">
<div class="fb-like" data-href="https://www.facebook.com/mcschool123" data-send="false" data-width="160" data-layout="count" data-show-faces="false"></div>
</div>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  <div id="twitter_like">
           <a href="https://twitter.com/SatlujSchool" class="twitter-follow-button" data-dnt="true">Follow @twitterapi</a>
  </div>


<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
           <div class="wrap">

              <div class="utility">

		<!-- Lower Navigation -->
<nav id="lower-navigation" class="navigation" role="navigation">
	<h3 class="menu-toggle"><?php _e( 'Lower Menu', 'twentytwelve' ); ?></h3>
	<div class="skip-link assistive-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a></div>
	<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'nav-menu', 'fallback_cb' => false ) ); ?>
</nav><!-- #lower-navigation -->

           <label id="searchlabel" for="searchtext">Search:</label>
          <?php get_search_form(); ?>

              </div><!-- .utility -->

               <div class="logo">
<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

   		</div><!-- .logo -->

               <div id="main-nav">
              
         <nav id="main-navigation" class="main-navigation" role="navigation">
	<h3 class="menu-toggle"><?php _e( 'Main Menu', 'twentytwelve' ); ?></h3>
	<div class="skip-link assistive-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a></div>
	<?php wp_nav_menu( array( 'theme_location' => 'third', 'menu_class' => 'nav-menu', 'fallback_cb' => false ) ); ?>
</nav><!-- #main-navigation -->

               </div><!-- #main_nav-->  
               
  <nav id="header-nav" class="head-navigation" role="navigation">
	<h3 class="menu-toggle"><?php _e( 'Middle Menu', 'twentytwelve' ); ?></h3>
	<div class="skip-link assistive-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a></div>
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'fallback_cb' => false ) ); ?>
</nav><!-- #main-navigation -->
     

		
 </div><!-- wrap -->
	</header><!-- #masthead -->

	<div id="main" class="wrapper">