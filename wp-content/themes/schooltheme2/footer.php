<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	
	<div class='footer'>
          <div class="wrap">
            <div class="logo">
<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            </div>
     
          <address>Harvard University<br>Cambridge,<abbr title="Massachusetts">MA</abbr>02138<br>
617.495.1000 </address>

 <ul>
  
		<li class="first"><a onclick="_gaq.push(['_trackEvent', 'Footer', 'OffsiteClick', 'Arts', 2]);" class="first" href="http://arts.harvard.edu">HarvardArts</a></li>
		<li class=""><a onclick="_gaq.push(['_trackEvent', 'Footer', 'OffsiteClick', 'Science', 2]);" class="" href="http://news.harvard.edu/gazette/section/science-n-health/">HarvardScience</a></li>
		<li class=""><a onclick="_gaq.push(['_trackEvent', 'Footer', 'OffsiteClick', 'Worldwide', 2]);" class="" href="http://www.worldwide.harvard.edu/iws/">HarvardWorldwide</a></li>
		<li class="last"><a onclick="_gaq.push(['_trackEvent', 'Footer', 'OffsiteClick', 'Community', 2]);" class="last" href="http://community.harvard.edu/">HarvardInTheCommunity</a></li>
  </ul>


</div>
      
       </div>


<div class="copy-footer">
	<div class="wrap">
	
		
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer Widgets')) : ?>
	<?php endif; ?>	 
  		     
        <br><br><br>
        Copyright &copy; 2013 The President and Fellows of Harvard College
        
	</div>

</div>

<?php wp_footer(); ?>
</body>
</html>