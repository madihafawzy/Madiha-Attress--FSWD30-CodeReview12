<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package cr12_Madiha_Attress_traveler
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cr12_madiha_attress_traveler_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'cr12_madiha_attress_traveler_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function cr12_madiha_attress_traveler_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'cr12_madiha_attress_traveler_pingback_header' );
