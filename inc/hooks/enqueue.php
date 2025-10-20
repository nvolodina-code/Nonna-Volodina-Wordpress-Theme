<?php
if ( ! defined('ABSPATH') ) exit;

add_action('wp_enqueue_scripts', function () {
	$ver = wp_get_theme()->get('Version');
	$uri = get_stylesheet_directory_uri();

	wp_enqueue_style(
		'theme-main',
		$uri . '/dist/css/main.min.css',
		[],
		$ver
	);

	wp_enqueue_script(
		'theme-main',
		$uri . '/dist/js/main.min.js',
		[],
		$ver,
		true
	);
});
