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
	<div id="header-container">
		<nav id="navbar" role="navigation">
			<section>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand mr-10" rel="home"><img class="logo" src="http://unrbrushfire.org/wp-content/uploads/2017/03/logo_offwhite.png" alt="Brushfire "></a>
			</section>
			<section>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</section>
			<section class="navbar-right">
				<button class="btn btn-primary">Submit Your Work</button>
			</section>

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bf_futuretastic' ); ?></button>
		</nav>
	</div>


	<div id="content" class="site-content">
