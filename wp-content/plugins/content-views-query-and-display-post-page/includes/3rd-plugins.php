<?php

/**
 * Resolved conflict with other plugins
 *
 * @package   PT_Content_Views
 * @author    PT Guy <http://www.contentviewspro.com/>
 * @license   GPL-2.0+
 * @link      http://www.contentviewspro.com/
 * @copyright 2016 PT Guy
 */
# Autoptimize: Disable "Force JavaScript in <head>"
add_filter( 'autoptimize_filter_js_defer', 'cv_filter_js_defer', 10, 1 );
function cv_filter_js_defer( $defer ) {
	$defer = "defer ";
	return $defer;
}
