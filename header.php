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

<script> /* this will stop the page from showing until text is loaded */
  (function(d) {
    var config = {
      kitId: 'eok4egk',
      scriptTimeout: 3000,
      async: false
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bf_futuretastic' ); ?></a>
	<div id="header-container">
		<nav id="navbar" role="navigation">
			<section class="logo-container" role="banner" aria-label="Brushfire Logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand mr-10" rel="home"><img class="logo" src="http://unrbrushfire.org/wp-content/uploads/2017/03/logo_offwhite-e1490808554731-1.png" alt="Brushfire "></a>
			</section>
            <div class="navlinks" role="menubar" aria-label="Navigation Links">
                <section role="menu" aria-label="Main Navigation Links">
    				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
    			</section>
    			<section class="navbar-right" role="button" aria-label="Submission Work">
    				<a class="nav-button" href="https://brushfire.submittable.com/submit">Submit Your Work</a>
    			</section>
            </div>
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bf_futuretastic' ); ?></button>
		</nav>

        <div id="issuu-docs">
            <div class="recent-journal">
                <img src="https://image.isu.pub/151201061539-043f73ad373df04638163bf34f7b2e5d/jpg/page_1_thumb_large.jpg" alt="pub1">
                <p>Journal 1</p>
            </div>
        </div>
	</div>


	<div id="content" class="site-content">
