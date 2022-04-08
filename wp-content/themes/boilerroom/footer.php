<?php
/**
 * This is the template that displays all of the <footer> section and rest of html code.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
		<?php get_template_part( 'resources/templates/parts/parts', 'footer' ); ?>

		<?php wp_footer(); ?>

		<script>
			var myElement = document.querySelector("header");
			// construct an instance of Headroom, passing the element
			var headroom  = new Headroom(myElement);
			// initialise
			headroom.init();
		</script>


	</body>
</html>
