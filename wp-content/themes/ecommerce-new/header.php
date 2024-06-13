<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ecommerce-new
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

	<title>Ecommerce</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- Header Section -->
	<header class="header" id="header">
		<nav class="navbar container">
			<a href="<?php echo home_url(); ?>" class="brand">
				<img src="http://localhost/ecommertce/wp-content/uploads/2024/06/NLogo.png" class="site-logo" alt="Site Logo">

			</a>
			<div class="burger" id="burger">
				<span class="burger-line"></span>
				<span class="burger-line"></span>
				<span class="burger-line"></span>
			</div>
			<div class="menu" id="menu">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'menu'           => 'Main Menu',
					'menu_id'        => 'main-menu',
					'container'      => 'ul',
					'container_class' => 'menu-inner',
					'menu_class'     => 'menu-inner',
				));
				?>
			</div>
			<a href="#" class="menu-block">Discover</a>
		</nav>