<?php
/**
 * ------------------------------------------------------------------------
 * Theme's JavaScript Assets
 * ------------------------------------------------------------------------
 * This file is for registering your theme's scripts. In here you
 * should also deregister all unwanted assets which can be
 * shiped with various third-parity plugins.
 */

if ( ! function_exists( 'tonik_register_scripts' ) ) {
	/**
	 * Registers theme's JavaScript scripts.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function tonik_register_scripts() {
		wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', false );
		wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', false );
		wp_enqueue_script( 'popper', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', false );
		wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', false );
		wp_enqueue_script( 'app', get_theme_file_uri( 'resources/assets/js/app.js' ), array(), false, true );
		wp_enqueue_script( 'headroom', get_theme_file_uri( 'resources/assets/js/headroom.js' ), array(), false, true );
	}
}
add_action( 'wp_enqueue_scripts', 'tonik_register_scripts' );
