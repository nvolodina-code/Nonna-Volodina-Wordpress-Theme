<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;} ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="site-header">
		<div class="site-logo">
			<a href="">
				<img src="" alt="">
			</a>
		</div>
		<nav class="site-nav" aria-label="<?php esc_attr_e( 'Primary Menu', 'nonna-volodina' ); ?>">
			<?php
			wp_nav_menu([
				'theme_location' => 'primary',
				'menu_class'     => 'primary-menu',
				'container'      => false,
			]);
			?>
		</nav>
	</header>

	<main id="main-content" class="site-main">
