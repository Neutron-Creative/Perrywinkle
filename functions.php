<?php
	add_theme_support( 'custom-logo', array('header-text' => array( 'site-title' )));

	/*function register_menus() {
		register_nav_menus(
			array(
				'header-menu' => __( 'Header Menu' ),
				'header-menu-right' => __( 'Header Menu Right' )
			)
		);
	}

	add_action( 'init', 'register_menus' );*/

	function enqueue() {
		wp_enqueue_style( 'all', get_template_directory_uri() . '/assets/build/css/all.css');
	}

	add_action( 'wp_enqueue_scripts', 'enqueue' );
?>
