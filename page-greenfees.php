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
            <section class="hero hero-home" style="background-image: linear-gradient(rgba(0,0,0, 0),rgba(0,0,0, .6)),url('<?php echo get_template_directory_uri(); ?>/public/img/banners/banner-green-fees.jpg');">
                <div class="hero-title">
                    <h1 class="font-semi-bold color-white">Green Fees</h1>
                </div>
            </section>
	        <!-- ******************************************  FEES SECTION  ****************************************** -->
	        <section class="greenfees">
            <div class="container-fluid grid-container px-0 center-text">
              <p class="grid-header uppercase-text mt-7"><h1>2019 Green Fees Rates</h1></p>
              <div class="row justify-content-center grid-row mt-6">
              <div class="col-sm-4 col-lg-3 col-xl-2 px-0">
                  <div class="grid-box grid-gold square">
                    <div class="grid__inner-text">
                        <h1>Weekend</h1>
                        <p>18 Holes</p>
                    </div>
                  </div>
              </div>
              <div class="col-sm-4 col-lg-3 col-xl-2 px-0">
                  <div class="grid-box grid-gold square">
                    <div class="grid__inner-text">
                        <h1>Riding</h1>
                        <p><?php the_field('weekend-price-riding'); ?><p>-</p><?php the_field('weekend-price-after-riding'); ?></p>
                        <p class="grid__inner-bracketed">(<?php the_field('weekend-after-time-riding'); ?>)</p>
                    </div>
                  </div>
              </div>
              <div class="col-sm-4 col-lg-3 col-xl-2 px-0">
                  <div class="grid-box grid-gold square">
                    <div class="grid__inner-text">
                            <h1>Walking</h1>
                            <p><?php the_field('weekend-price-walking'); ?><p>-</p><?php the_field('weekend-price-after-walking'); ?></p>
                            <p class="grid__inner-bracketed">(<?php the_field('weekend-after-time-walking'); ?>)</p>
                    </div>
                  </div>
              </div>
              </div>
              <div class="row justify-content-center grid-row center-text">
                  <div class="col-sm-4 col-lg-3 col-xl-2 px-0">
                      <div class="grid-box grid-black square">
                      <div class="grid__inner-text">
                            <h1>Weekday</h1>
                            <p>18 Holes</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-lg-3 col-xl-2 px-0">
                      <div class="grid-box grid-black square">
                      <div class="grid__inner-text">
                            <h1>Riding</h1>
                            <p><?php the_field('weekday-price-riding'); ?><p>-</p><?php the_field('weekday-price-after-riding'); ?></p>
                            <p class="grid__inner-bracketed">(<?php the_field('weekday-after-time-riding'); ?>)</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-lg-3 col-xl-2 px-0">
                    <div class="grid-box grid-black square">
                    <div class="grid__inner-text">
                        <h1>Walking</h1>
                        <p><?php the_field('weekday-price-walking'); ?><p>-</p><?php the_field('weekday-price-after-walking'); ?></p>
                        <p class="grid__inner-bracketed">(<?php the_field('weekday-after-time-walking'); ?>)</p>
                    </div>
                    </div>
                  </div>
              	</div>
	            </div>
                <!-- ****************************************  GRID IMAGES  **************************************** -->
                <div class="row no-margin justify-content-center grid-row center-text">
                    <div class="col-sm-4 col-lg-3 col-xl-2 px-0">
                        <div class="grid-view grid-img square" style="background-image:  linear-gradient(rgba(0,0,0, .6),rgba(0,0,0, .6)),url(<?php the_field('bottom_row_1_image'); ?>); background-size: cover;">
                            <div class="grid__inner-text ">
                                <h1><?php the_field('bottom_row_1_title'); ?></h1>
                                <p class="font-serif"><?php the_field('bottom_row_1_sub_title'); ?><p>-</p><?php the_field('bottom_row_1_price'); ?></p>
                                <p class="grid__inner-bracketed"><?php the_field('bottom_row_1_price_description'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-3 col-xl-2 px-0">
                        <div class="grid-view grid-img square" style="background-image:  linear-gradient(rgba(0,0,0, .6),rgba(0,0,0, .6)),url(<?php the_field('bottom_row_2_image'); ?>); background-size: cover;">
                            <div class="grid__inner-text ">
                                <h1><?php the_field('bottom_row_2_title'); ?></h1>
                                <p class="font-serif"><?php the_field('bottom_row_2_sub_title'); ?><p>-</p><?php the_field('bottom_row_2_price'); ?></p>
                                <p class="grid__inner-bracketed"><?php the_field('bottom_row_2_price_description'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-3 col-xl-2 px-0">
                        <div class="grid-view grid-img square" style="background-image:  linear-gradient(rgba(0,0,0, .6),rgba(0,0,0, .6)),url(<?php the_field('bottom_row_3_image'); ?>); background-size: cover;">
                            <div class="grid__inner-text ">
                                <h1><?php the_field('bottom_row_3_title'); ?></h1>
                                <p class="font-serif"><?php the_field('bottom_row_3_sub_title'); ?><p>-</p><?php the_field('bottom_row_3_price'); ?></p>
                                <p class="grid__inner-bracketed"><?php the_field('bottom_row_3_price_description'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
	            <div class="center-text font-regular mt-5">
	                <p>All prices include HST</p>
	            </div>
	        </section>
	        <!-- ***************************************  GREEN FEE PACKAGES  *************************************** -->
	        <section class="greenfees-packages">
            <div class="container-fluid grid-container px-0 center-text">
                <p class="grid-header uppercase-text mt-7"><h1>Green Fee Packages</h1></p>
                <div class="row justify-content-center grid-row center-text mt-6">
                    <div class="col-sm-6 col-md-3 col-lg-2 px-0">
                        <div class="grid-box grid-silver ">
                            <div class="grid__inner-text-rectangle">
                                <h1 class="mb-0">18 Holes</h1>
                                <p class="uppercase-text font-serif">With Cart</p>
                                <p>-</p>
                                <p class="uppercase-text font-serif"><?php the_field('18_holes_tier_1_item'); ?><br>
                                    <?php the_field('18_holes_tier_1_price'); ?>
                                </p>
                                <p class="grid__inner-bracketed"><?php the_field('18_holes_tier_1_price_description'); ?></p>
                                <p>-</p>
                                <p class="uppercase-text font-serif"><?php the_field('18_holes_tier_2_item'); ?><br>
                                    <?php the_field('18_holes_tier_2_price'); ?>
                                </p>
                                <p class="grid__inner-bracketed"><?php the_field('18_holes_tier_2_price_description'); ?></p>
                                <p>-</p>
                                <p class="uppercase-text font-serif"><?php the_field('18_holes_tier_3_item'); ?><br>
                                    <?php the_field('18_holes_tier_3_price'); ?>
                                </p>
                                <p class="grid__inner-bracketed"><?php the_field('18_holes_tier_3_price_description'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-2 px-0">
                        <div class="grid-box grid-bronze">
                            <div class="grid__inner-text-rectangle">
                                <h1 class="mb-0">9 Holes</h1>
                                <p class="uppercase-text font-serif">With Cart</p>
                                <p>-</p>
                                <p class="uppercase-text font-serif"><?php the_field('9_holes_tier_1_item'); ?><br>
                                <?php the_field('9_holes_tier_1_price'); ?>
                                </p>
                                <p class="grid__inner-bracketed"><?php the_field('9_holes_tier_1_price_description'); ?></p>
                                <p>-</p>
                                <p class="uppercase-text font-serif"><?php the_field('9_holes_tier_2_item'); ?><br>
                                    <?php the_field('9_holes_tier_2_price'); ?>
                                </p>
                                <p class="grid__inner-bracketed"><?php the_field('9_holes_tier_2_price_description'); ?></p>
                                <p>-</p>
                                <p class="uppercase-text font-serif"><?php the_field('9_holes_tier_3_item'); ?><br>
                                    <?php the_field('9_holes_tier_3_price'); ?>
                                </p>
                                <p class="grid__inner-bracketed"><?php the_field('9_holes_tier_3_price_description'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="center-text font-regular mb-7 mt-5">
                  <p>Prices are valid anytime and are transferrable among playing partners.</p>
              </div>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
