<?php if ( ! defined('ABSPATH') ) exit; ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<a class="u-skip-link" href="#main-content"><?php esc_html_e('Skip to content', 'nonna-volodina-wordpress-theme'); ?></a>

	<header class="site-header"></header>

	<main id="main-content" class="site-main">
