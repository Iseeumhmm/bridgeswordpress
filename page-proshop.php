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
                            <p><?php the_field('descriptive_paragraph'); ?></p>
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
                                        <div class="grid-view rectangle" style="background-image: url(<?php the_field('item_1_image'); ?>)">
                                        </div>
                                        <div class="greenfees-white-border"></div>
                                    </div>
                                    <h3><?php the_field('item_1_heading'); ?></h3>
                                    <p class="mb-5"><?php the_field('item_1_body'); ?></p>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div>
                                        <div class="grid-view rectangle" style="background-image: url(<?php the_field('item_2_image'); ?>)">
                                        </div>
                                        <div class="greenfees-white-border"></div>
                                    </div>
                                    <h3><?php the_field('item_2_heading'); ?></h3>
                                    <p class="mb-5"><?php the_field('item_2_body'); ?></p>
                                </div>
                                <div class="col-md-4 px-0">
                                    <div>
                                        <div class="grid-view rectangle" style="background-image: url(<?php the_field('item_3_image'); ?>)">
                                        </div>
                                        <div class="greenfees-white-border"></div>
                                    </div>
                                    <h3><?php the_field('item_3_heading'); ?></h3>
                                    <p class="mb-5"><?php the_field('item_3_body'); ?></p>
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
    

