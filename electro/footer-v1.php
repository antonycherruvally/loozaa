<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package electro
 */
?>
			<?php
			/**
			 * 
			 */
			/*do_action( 'electro_content_bottom' );*/ ?>
		<!--</div><!-- .col-full -->
	<!--</div><!-- #content -->

	<?php do_action( 'electro_before_footer' ); ?>

	<footer id="colophon" class="site-footer">
			
		<?php
		/**
		 * @hooked electro_footer_widgets - 10
		 * @hooked electro_credit - 20
		 */
		do_action( 'electro_footer' ); ?>

	</footer><!-- #colophon -->

	<?php do_action( 'electro_after_footer' ); ?>

</div><!-- #page -->
</div>

<?php wp_footer(); ?>

</body>
</html>