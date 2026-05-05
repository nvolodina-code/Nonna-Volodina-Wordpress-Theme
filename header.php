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
		<div class="site-header__logo">
			<a href="">
				<img src="" alt="">
			</a>
		</div>

		<button
			class="site-header__toggle"
			aria-expanded="false"
			aria-controls="site-header-nav"
			aria-label="<?php esc_attr_e( 'Toggle navigation', 'nonna-volodina' ); ?>"
		>
			<span class="site-header__toggle-bar"></span>
			<span class="site-header__toggle-bar"></span>
			<span class="site-header__toggle-bar"></span>
		</button>

		<nav id="site-header-nav" class="site-header__nav" aria-label="<?php esc_attr_e( 'Primary Menu', 'nonna-volodina' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_class'     => 'site-header__menu',
					'container'      => false,
				)
			);
			?>
		</nav>
	</header>

	<main id="main-content" class="site-main">
