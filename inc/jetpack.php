<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Portage Bay
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function httpdjmcloud_danieljmckeown_com_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'httpdjmcloud_danieljmckeown_com_jetpack_setup' );
