<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">
<?php wp_head(); ?>
</head>
<body>
<header>
	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<nav><?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?></nav>
</header>
<div id="content">