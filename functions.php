<?php

function theme_styles() {

	wp_enqueue_style( ‘bootstrap_css’, get_template_directory_uri() . ‘/css/bootstrap.min.css’ );
	wp_enqueue_style( ‘main_css’, get_template_directory_uri() . ‘/style.css’ );

}
add_action( ‘wp_enqueue_scripts’, ‘theme_styles’ );


function theme_js() {

	wp_register_script( ‘html5_shiv’, ‘<!—server link.js—>’ ‘’, ‘’, false );

}

<!— functions.php file —>
add_theme_support( ‘menus’ );

function register_theme_menus() {
	register_nav_menus(
		array(
			‘header-menu’  => __( ‘Header Menu’ );
		)
	);

}

add_action( ‘init’, ‘register_theme_menus’ );


?>
