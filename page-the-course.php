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
             <section class="hero" style="background-image: linear-gradient(rgba(0,0,0, 0),rgba(0,0,0, .2)),url('<?php echo get_template_directory_uri(); ?>/public/img/banners/banner-course.jpg');">
                <div class="hero-title">
                    <h1 class="font-semi-bold color-white pb-5">The Course</h1>
                </div>
            </section>
                <!-- ***************************************  COURSE INFO  *************************************** -->

            <section class="course">
                <div class="container-fluid px-0 mx-0 mt-7">
                    <div class="row justify-content-center center-text">
                        <div class="col-lg-6 color-brown">
                            <p class="pb-6">Founded in 1925, and expanded to an 18-hole, par 70 course in 2009, The Bridges at Tillsonburg offers the best of traditional course style, beautiful views and challenging gameplay.<br><br>
                            With well-manicured greens, elevation changes, and lush fairways lined with large trees, The Bridges at Tillsonburg has been delicately carved out of nature, straddling the Big Otter Creek, and provides spectacular views.<br><br>
                            The 4 sets of tees allow players of all skill levels to choose their challenge.</p>
                        </div>
                    </div>
                 </div>
            </section>
            	<!-- *****************************************  FRONT 9  ***************************************** -->

            <section class="front-9">
                <div class="container-fluid grid-container px-0 center-text">
                    <p class="grid-header uppercase-text"><h1>FRONT NINE</h1></p>
                    <div class="row no-margin justify-content-center grid-row center-text">
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-view square" style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/course/hole-1.jpg">
                            </div>
                            <div class="greenfees-white-border">
                                <div class="grid__inner-text">
                                    <a href="#"><i class="far fa-play-circle"></i></a>
                                    <h1>Hole #1</h1>
                                    <p>276 Yards | Par 4</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-view square"style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/course/hole-2.jpg)">
                            </div>
                            <div class="greenfees-white-border">
                                <div class="grid__inner-text">
                                    <a href="#"><i class="far fa-play-circle"></i></a>
                                    <h1>Hole #2</h1>
                                    <p>162 Yards | Par 3</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-view square"style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/course/hole-3.jpg)">
                            </div>
                            <div class="greenfees-white-border">
                                <div class="grid__inner-text">
                                    <a href="#"><i class="far fa-play-circle"></i></a>
                                    <h1>Hole #3</h1>
                                    <p>351 Yards | Par 4</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-margin justify-content-center grid-row center-text">
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-view square" style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/course/hole-4.jpg">
                            </div>
                            <div class="greenfees-white-border">
                                <div class="grid__inner-text">
                                    <a href="#"><i class="far fa-play-circle"></i></a>
                                    <h1>Hole #4</h1>
                                    <p>503 Yards | Par 5</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-view square"style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/course/hole-5.jpg)">
                            </div>
                            <div class="greenfees-white-border">
                                <div class="grid__inner-text">
                                    <a href="#"><i class="far fa-play-circle"></i></a>
                                    <h1>Hole #5</h1>
                                    <p>155 Yards | Par 3</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-view square"style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/course/hole-6.jpg)">
                            </div>
                            <div class="greenfees-white-border">
                                <div class="grid__inner-text">
                                    <a href="#"><i class="far fa-play-circle"></i></a>
                                    <h1>Hole #6</h1>
                                    <p>398 Yards | Par 4</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    <div class="row no-margin justify-content-center grid-row center-text">
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-view square" style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/course/hole-7.jpg">
                            </div>
                            <div class="greenfees-white-border">
                                <div class="grid__inner-text">
                                    <a href="#"><i class="far fa-play-circle"></i></a>
                                    <h1>Hole #7</h1>
                                    <p>204 Yards | Par 3</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-view square"style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/course/hole-8.jpg)">
                            </div>
                            <div class="greenfees-white-border">
                                <div class="grid__inner-text">
                                    <a href="#"><i class="far fa-play-circle"></i></a>
                                    <h1>Hole #8</h1>
                                    <p>387 Yards | Par 4</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-view square"style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/course/hole-9.jpg)">
                            </div>
                            <div class="greenfees-white-border">
                                <div class="grid__inner-text">
                                    <a href="#"><i class="far fa-play-circle"></i></a>
                                    <h1>Hole #9</h1>
                                    <p>133 Yards | Par 3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                        <!-- ***************************************  BACK 9  *************************************** -->

            <section class="back-9">
                <div class="container-fluid grid-container px-0 center-text">
                    <p class="grid-header uppercase-text pt-5"><h1>BACK NINE</h1></p>
                    <div class="row no-margin justify-content-center grid-row center-text">
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-view square" style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/course/hole-10.jpg">
                            </div>
                            <div class="greenfees-white-border">
                                <div class="grid__inner-text">
                                    <a href="#"><i class="far fa-play-circle"></i></a>
                                    <h1>Hole #10</h1>
                                    <p>534 Yards | Par 5</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-view square"style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/course/hole-11.jpg">
                            </div>
                            <div class="greenfees-white-border">
                                <div class="grid__inner-text">
                                    <a href="#"><i class="far fa-play-circle"></i></a>
                                    <h1>Hole #11</h1>
                                    <p>317 Yards | Par 4</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-view square"style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/course/hole-12.jpg">
                            </div>
                            <div class="greenfees-white-border">
                                <div class="grid__inner-text">
                                    <a href="#"><i class="far fa-play-circle"></i></a>
                                    <h1>Hole #12</h1>
                                    <p>353 Yards | Par 4</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-margin justify-content-center grid-row center-text">
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-view square" style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/course/hole-13.jpg">
                            </div>
                            <div class="greenfees-white-border">
                                <div class="grid__inner-text">
                                    <a href="#"><i class="far fa-play-circle"></i></a>
                                    <h1>Hole #13</h1>
                                    <p>172 Yards | Par 3</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-view square"style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/course/hole-14.jpg">
                            </div>
                            <div class="greenfees-white-border">
                                <div class="grid__inner-text">
                                    <a href="#"><i class="far fa-play-circle"></i></a>
                                    <h1>Hole #14</h1>
                                    <p>328 Yards | Par 4</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-view square"style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/course/hole-15.jpg">
                            </div>
                            <div class="greenfees-white-border">
                                <div class="grid__inner-text">
                                    <a href="#"><i class="far fa-play-circle"></i></a>
                                    <h1>Hole #15</h1>
                                    <p>363 Yards | Par 4</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    <div class="row no-margin justify-content-center grid-row center-text">
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-view square" style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/course/hole-16.jpg">
                            </div>
                            <div class="greenfees-white-border">
                                <div class="grid__inner-text">
                                    <a href="#"><i class="far fa-play-circle"></i></a>
                                    <h1>Hole #16</h1>
                                    <p>163 Yards | Par 3</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-view square"style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/course/hole-17.jpg">
                            </div>
                            <div class="greenfees-white-border">
                                <div class="grid__inner-text">
                                    <a href="#"><i class="far fa-play-circle"></i></a>
                                    <h1>Hole #17</h1>
                                    <p>549 Yards | Par 5</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-view square"style="background-image: url(<?php echo get_template_directory_uri(); ?>/public/img/course/hole-18.jpg">
                            </div>
                            <div class="greenfees-white-border">
                                <div class="grid__inner-text">
                                    <a href="#"><i class="far fa-play-circle"></i></a>
                                    <h1>Hole #18</h1>
                                    <p>294 Yards | Par 4</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                    <!-- ******************************************  COURSE STATISTICS  ****************************************** -->

            <section class="course-statistics">
                <div class="container-fluid text-center pt-6">
                    <p class="uppercase-text"><h1 class="pb-4">Course Statistics</h1></p>
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-8 col-lg-6">
                            <table width="100%" class="text-left table table-borderless table-responsive-xs color-brown">
                                <thead class="text-uppercase font-serif color-white black-background">
                                    <th>Tee</th>
                                    <th>Par</th>
                                    <th>Length</th>
                                    <th>Rating</th>
                                    <th>Slope</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Bronze</td>
                                        <td>70</td>
                                        <td>5739 yards</td>
                                        <td>69.2</td>
                                        <td>126</td>
                                    </tr>
                                    <tr>
                                        <td>Blue</td>
                                        <td>70</td>
                                        <td>5442 yards</td>
                                        <td>68.5</td>
                                        <td>122</td>
                                    </tr>
                                    <tr>
                                        <td>Blue (W)</td>
                                        <td>70</td>
                                        <td>5442 yards</td>
                                        <td>72.4</td>
                                        <td>125</td>
                                    </tr>
                                    <tr>
                                        <td>White</td>
                                        <td>70</td>
                                        <td>5135 yards</td>
                                        <td>67.0</td>
                                        <td>118</td>
                                    </tr>
                                    <tr>
                                        <td>White (W)</td>
                                        <td>70</td>
                                        <td>5135 yards</td>
                                        <td>70.6</td>
                                        <td>123</td>
                                    </tr>
                                    <tr>
                                        <td>White/Green</td>
                                        <td>70</td>
                                        <td>4733 yards</td>
                                        <td>65.0</td>
                                        <td>110</td>
                                    </tr>
                                    <tr>
                                        <td>White/Green (W)</td>
                                        <td>70</td>
                                        <td>4733 yards</td>
                                        <td>68.0</td>
                                        <td>120</td>
                                    </tr>
                                    <tr>
                                        <td>Red</td>
                                        <td>70</td>
                                        <td>4294 yards</td>
                                        <td>63.5</td>
                                        <td>101</td>
                                    </tr>
                                    <tr>
                                        <td>Red (W)</td>
                                        <td>70</td>
                                        <td>4294 yards</td>
                                        <td>66.0</td>
                                        <td>111</td>
                                    </tr>
                                <tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
                <!-- ******************************************  DOWNLOAD SCORECARD  ****************************************** -->
            <section class="download-pdf py-7">
                <div class="container-fluid black-background text-center color-white">
                    <a href="#">
                        <div class="text-container">
                            <p class="font-sans color-white font-regular">Download our</p>
                            <h1 class="color-white">Scorecard</h1>
                        </div>
                    </a>
                </div>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
    