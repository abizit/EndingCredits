<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Ending Credits
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div id="site-generator">
			<?php do_action( 'ec_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'ec' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'ec' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'ec' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'ec' ), 'Ending Credits', '<a href="mailto:abhijeetbajracharya@gmail.com" rel="designer">Abhijeet Bajracharya</a>' ); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>