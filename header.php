<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BF_FUTURETASTIC
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bf_futuretastic' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="navbar">
			<section class="navbar-primary">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand mr-10" rel="home"><img class="logo" src="http://unrbrushfire.org/wp-content/uploads/2017/03/logo.png" alt="Brushfire "></a>
			</section>
			<section class="navbar-section">
				<a href="#" class="btn btn-link">About Us</a>
				<a href="https://github.com/picturepan2/spectre" class="btn btn-link">Artist Spotlight</a>
				<a href="https://github.com/picturepan2/spectre" class="btn btn-link">Contact</a>
			</section>
			<section class="navbar-section">
				<button class="btn btn-primary">Submit</button>
			</section>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bf_futuretastic' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
