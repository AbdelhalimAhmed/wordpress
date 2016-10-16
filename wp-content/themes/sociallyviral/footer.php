<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SociallyViral
 */
?>

	</div><!-- #content -->
</div><!-- .main-container -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<a href="#blog" class="toplink" rel="nofollow"><i class="icon-angle-up"></i></a>
			<nav id="navigation" class="footer-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>