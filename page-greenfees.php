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
            <section class="greenfees">
                <div class="hero">
                    <img class="darken" src="<?php echo get_template_directory_uri(); ?>/public/img/banners/banner-green-fees.jpg" alt="Green Fees Banner">
                    <div class="hero__main-green-text center-text">
                    <h1>Green Fees</h1>
                    </div>
                </div>
            </section>
	        <!-- ******************************************  FEES SECTION  ****************************************** -->
	        <section>
            <div class="container-fluid grid-container px-0 center-text">
              <p class="grid-header uppercase-text mt-7"><h1>2019 Green Fee Rates</h1></p>
              <div class="row justify-content-center grid-row mt-6">
              <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                  <div class="grid-box grid-gold square"></div>
                  <div class="grid__inner-text">
                      <h1>Weekend</h1>
                      <p>18 Holes</p>
                  </div>
              </div>
              <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                  <div class="grid-box grid-gold square"></div>
                  <div class="grid__inner-text">
                      <h1>Riding</h1>
                      <p>$52<p class="grid__inner-dash-padding">-</p>$45</p>
                  </div>
              </div>
              <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                  <div class="grid-box grid-gold square"></div>
                  <div class="grid__inner-text">
                          <h1>Walking</h1>
                          <p>$37<p class="grid__inner-dash-padding">-</p>$33</p>
                  </div>
              </div>
              </div>
              <div class="row justify-content-center grid-row center-text">
                  <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                      <div class="grid-box grid-black square"></div>
                      <div class="grid__inner-text">
                          <h1>Weekday</h1>
                          <p>18 Holes</p>
                      </div>
                  </div>
                  <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                      <div class="grid-box grid-black square"></div>
                      <div class="grid__inner-text">
                          <h1>Riding</h1>
                          <p>$47<p class="grid__inner-dash-padding">-</p>$45</p>
                      </div>
                  </div>
                  <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                    <div class="grid-box grid-black square"></div>
                    <div class="grid__inner-text">
                      <h1>Walking</h1>
                      <p>$32<p class="grid__inner-dash-padding">-</p>$28</p>
                    </div>
                  </div>
              	</div>
	            </div>
	            <!-- ****************************************  GRID IMAGES  **************************************** -->
	            <div class="row no-margin justify-content-center grid-row center-text">
                <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                    <div class="grid-view square" style="background-image: linear-gradient(rgba(0,0,0, .6),rgba(0,0,0, .6)),url(<?php echo get_template_directory_uri(); ?>/public/img/thumbs/9-holes.jpg); background-size: cover; filter: brightness(65%);">
                    </div>
                    <div class="greenfees-white-border">
                        <div class="grid__inner-text">
                            <h1>9 Holes</h1>
                            <p>Riding anytime<p class="grid__inner-dash-padding">-</p>$30</clap>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                    <div class="grid-view square"style="background-image: linear-gradient(rgba(0,0,0, .6),rgba(0,0,0, .6)),url(<?php echo get_template_directory_uri(); ?>/public/img/thumbs/senior-special.jpg); background-size: cover; filter: brightness(65%);">
                    </div>
                    <div class="greenfees-white-border">
                        <div class="grid__inner-text">
                            <h1>Thursday</h1>
                            <p>Senior Special<p class="grid__inner-dash-padding">-</p>$40</p>
                            <p class="grid__inner-bracketed">(all day)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                    <div class="grid-view square"style="background-image: linear-gradient(rgba(0,0,0, .6),rgba(0,0,0, .6)),url(<?php echo get_template_directory_uri(); ?>/public/img/thumbs/after-5.jpg); background-size: cover; filter: brightness(65%);">
                    </div>
                    <div class="greenfees-white-border">
                        <div class="grid__inner-text">
                            <h1>After</h1>
                            <p>5:00 PM<p class="grid__inner-dash-padding">-</p>$2 / hole</p>
                            <p class="grid__inner-bracketed">(includes cart)</p>
                        </div>
                    </div>
                </div>
	            </div>
	            <div class="center-text font-regular mt-5">
	                <p>All prices include HST</p>
	            </div>
	        </section>
	        <!-- ***************************************  GREEN FEE PACKAGES  *************************************** -->
	        <section>
            <div class="container-fluid grid-container px-0 center-text">
                <p class="grid-header uppercase-text mt-7"><h1>Green Fee Packages</h1></p>
                <div class="row justify-content-center grid-row center-text mt-6">
                    <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                        <div class="grid-box grid-silver rectangle"></div>
                        <div class="grid__inner-text">
                            <h1 class="mb-0">18 Holes</h1>
                            <p class="uppercase-text font-serif">With Cart</p>
                            <p class="grid__inner-dash-padding">-</p>
                            <p class="uppercase-text font-serif">
                                20 passes<br>
                                $850
                            </p>
                            <p class="grid__inner-bracketed">($42.50 / round)</p>
                            <p class="grid__inner-dash-padding">-</p>
                            <p class="uppercase-text font-serif">
                                40 passes<br>
                                $1350
                            </p>
                            <p class="grid__inner-bracketed">($33.75 / round)</p>
                            <p class="grid__inner-dash-padding">-</p>
                            <p class="uppercase-text font-serif">
                                60 passes<br>
                                $1750
                            </p>
                            <p class="grid__inner-bracketed">($29.17 / round)</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                        <div class="grid-box grid-bronze rectangle"></div>
                        <div class="grid__inner-text">
                                <h1 class="mb-0">9 Holes</h1>
                                <p class="uppercase-text font-serif">With Cart</p>
                                <p class="grid__inner-dash-padding">-</p>
                                <p class="uppercase-text font-serif">
                                    20 passes<br>
                                    $490
                                </p>
                                <p class="grid__inner-bracketed">($24.50 / round)</p>
                                <p class="grid__inner-dash-padding">-</p>
                                <p class="uppercase-text font-serif">
                                    40 passes<br>
                                    $790
                                </p>
                                <p class="grid__inner-bracketed">($19.75 / round)</p>
                                <p class="grid__inner-dash-padding">-</p>
                                <p class="uppercase-text font-serif">
                                    60 passes<br>
                                    $1090
                                </p>
                                <p class="grid__inner-bracketed">($18.17 / round)</p>
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
