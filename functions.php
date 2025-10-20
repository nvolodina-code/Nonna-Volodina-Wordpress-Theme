<?php
if ( ! defined('ABSPATH') ) exit;

foreach ( glob( get_template_directory() . '/inc/hooks/*.php' ) as $file ) {
	require_once $file;
}
