<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Portage Bay
 */
?>

	

<div id="portagethefooter">

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="card-content blue-grey white-text">
		<center>
			<a class="grey-text text-lighten-3" href="<?php echo esc_url( __( 'http://wordpress.org/', 'httpdjmcloud-danieljmckeown-com' ) ); ?>"><?php printf( __( 'Powered by %s', 'httpdjmcloud-danieljmckeown-com' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span> Theme: <a class="grey-text text-lighten-3" href="<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'ThemeURI' ); ?>"><?php echo wp_get_theme(); ?></a> version <?php $my_theme = wp_get_theme(); echo $my_theme->get( 'Version' ); ?>
		</center>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- portagethefooter -->


<?php //  smoke weed every day ?>

<?php wp_footer(); ?>



</div><!-- megacontainer -->

</body>
</html>
