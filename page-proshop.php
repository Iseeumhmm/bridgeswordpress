<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BridgesAtTillsonburg
 */

get_header();?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <!-- *****************************************  HERO BANNER  ***************************************** -->
            <section class="hero" style="background-image: linear-gradient(rgba(0,0,0, 0),rgba(0,0,0, .2)),url('<?php echo get_template_directory_uri(); ?>/public/img/banners/banner-pro-shop.jpg');">
                <div class="hero-title">
                    <h1 class="font-semi-bold color-white pb-5">Pro Shop</h1>
                </div>
            </section>

             <!-- *****************************************  INFORMATION  ***************************************** -->

             <section>
                <div class="container-fluid px-0 mx-0 mt-7">
                    <div class="row justify-content-center center-text">
                        <div class="col-lg-6 color-brown">
                            <p>The Bridges at Tillsonburg's Pro Shop is where golfers of all abilities will find all of the necessities for their round, as well as interesting golf specialty items. Our partnership with Titleist® means you have access to some of the BEST equipment in golf.<br><br>
                            Stop in an view our great selection of golf wear, shoes, clubs and accessories.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ***************************************  PRO SHOP SPECIALS  *************************************** -->

            <section class="shop-items">
                <div class="container-fluid grid-container px-0 mb-5 center-text">
                    <p class="pt-7"><h1>PRO SHOP SPECIALS</h1></p>
                    <div class="row justify-content-center pt-5">
                        <div class="col-md-12 col-xl-8">
                            <div class="row no-margin justify-content-center dates-times center-text">
                                <div class="col-md-4 px-0">
                                    <div>
                                        <div class="grid-view rectangle" style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/shop/ping-grips.jpg)">
                                        </div>
                                        <div class="greenfees-white-border"></div>
                                    </div>
                                    <h3>PING Grips “Full Cord”</h3>
                                    <p class="mb-5"> 8 - 11 Clubs<br>
                                        $75 installed</p>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div>
                                        <div class="grid-view rectangle" style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/shop/hat.jpg)">
                                        </div>
                                        <div class="greenfees-white-border"> </div>
                                    </div>
                                    <h3>Bridges Logo Hats</h3>
                                    <p class="mb-5">$17.99</p>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div>
                                        <div class="grid-view rectangle" style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/shop/footjoy-shoes.jpg)">
                                        </div>
                                        <div class="greenfees-white-border"></div>
                                    </div>
                                    <h3>Green Footjoy Shoes</h3>
                                    <p class="mb-5">$79.99</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
    

