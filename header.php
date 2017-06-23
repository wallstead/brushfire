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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

        <!-- for auditting -->
        <script type="text/javascript">
            var access_analytics = {
                base_url: "https://analytics.ssbbartgroup.com/api/",
                instance_id: "AA-590382487ff9c"
            };
            (function(a, b, c) {
                var d = a.createElement(b);
                a = a.getElementsByTagName(b)[0];
                d.src = c.base_url + "access.js?o=" + c.instance_id + "&v=2";
                a.parentNode.insertBefore(d, a)
            })(document, "script", access_analytics);
        </script>
    </head>

    <body <?php body_class(); ?>>
    <div id="page" class="site">
    	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bf_futuretastic' ); ?></a>
    	<div id="header-container">
            <div class="nav-container">
                <nav id="navbar" role="navigation">
        			<section class="logo-container" role="banner" aria-label="Brushfire Logo">
                        <button id="navburger" class="hamburger hamburger--slider" type="button" aria-label="Menu" aria-controls="navigation">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
        				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand mr-10" rel="home"><img class="logo" src="http://unrbrushfire.org/wp-content/uploads/2017/03/logo_offwhite-e1490808554731-1.png" alt="Brushfire "></a>
        			</section>
                    <div class="navlinks" role="menubar" aria-label="Navigation Links">
                        <section class="links" role="menu" aria-label="Main Navigation Links" >
            				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
            			</section>
            			<section class="navbar-right" role="button" aria-label="Submission Work">
            				<a class="nav-button" href="https://brushfire.submittable.com/submit">Submit Your Work</a>
                            <a class="nav-button" href="https://brushfire.submittable.com/submit/87351/logo-design-contest">Submit Your Logo</a>
            			</section>
                    </div>
        		</nav>
            </div>

            <div id="issuu-docs">
                <?php
                    $response = wp_remote_get( 'http://search.issuu.com/api/2_0/document?q=username:brushfire&responseParams=%2A&sortBy=epoch' );
                    if( is_array($response) ) {
                      $header = $response['headers']; // array of http header lines
                        $body = $response['body']; // use the content
                        $array = json_decode( $body, true );
                        if( ! empty( $array ) ) {

                            $counter = 0;
                            foreach($array['response']['docs'] as $doc) {
                                if ($counter == 0) {
                                    echo '<a href="https://issuu.com/brushfire/docs/'.$doc['docname'].'"><div class="recent-journal most-recent-journal"><p>'.$doc['title'].'</p><img src="https://image.isu.pub/'.$doc['documentId'].'/jpg/page_1_thumb_large.jpg" alt="'.$doc['title on Issuu'].'"></div></a>';
                                } else {
                                    echo '<a href="https://issuu.com/brushfire/docs/'.$doc['docname'].'"><div class="recent-journal"><p>'.$doc['title'].'</p><img src="https://image.isu.pub/'.$doc['documentId'].'/jpg/page_1_thumb_large.jpg" alt="'.$doc['title on Issuu'].'"></div></a>';
                                }

                                counter++;
                            }
                        }
                    }
                ?>
            </div>
    	</div>

        <script>
        $( window ).on( "load", function() {



            $('.recent-journal').each(function(i, obj) {

                $(this).animate({opacity:1}, 350*i, function() {
                    console.log(250*i);
                });
            });

        });
        </script>


    	<div id="content" class="site-content">
