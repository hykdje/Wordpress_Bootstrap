<?php wp_head(); ?>

<?php
	$args = array(
		‘menu’  => ‘header-menu’,
		‘menu_class’  => ‘nav navbar-nav’,
		‘container’  => ‘false’
	);
	wp_nav_menu( $args );
?>
