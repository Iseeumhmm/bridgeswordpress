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
            <section>
                <div class="hero">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/img/banners/banner-home.jpg" alt="Home Banner">
                    <div class="hero__main-text">
                        <p><h2>The Bridges offers the best of traditional course style, with beautiful views and elevation changes in 10 new holes that wind        through the Otter Valley.</h2>
                        </p>
                        <a href="#">
                            <div class="hero__main-view">
                                <p class="hero__main-view--text">view our rates</p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <!-- ***************************************  grid SECTION  *************************************** -->
            <section>
                <div class="container-fluid grid grid-section center-text uppercase-text">
                    <h1>Bridges Events</h1>
                    <p>- join us or book with us -</p>
                    <div class="row no-margin justify-content-center grid-row">
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <img class="grid" src="<?php echo get_template_directory_uri(); ?>/public/img/thumbs/food-truck.jpg" alt="Food Truck">
                            <p class="grid__inner-text ">
                                <span class="grid__inner-food-truck--text"> Food truck night benefit</span><br><br>
                                October 5th<br>
                                6pm - 9pm</p>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <img class="grid grid-middle" src="<?php echo get_template_directory_uri(); ?>/public/img/thumbs/3-man-scramble.jpg" alt="3 Man Scramble">
                            <p class="grid__inner-text">
                                <span class="grid-calendar--text"> 3-man <br>scramble</span><br><br><br>
                                October 20th <br>
                                10am</p>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-2 grid-img px-0">
                            <div class="grid-view square"style="background-image: linear-gradient(rgba(204, 151, 84, .5),rgba(204, 151, 84, .5)),url(<?php echo get_template_directory_uri(); ?>/public/img/thumbs/calendar.jpg); background-size: cover; filter: brightness(65%);">
                            </div>
                            <a href="#">
                                <div class="grid-calendar">
                                <p class="grid__inner-text">View our calendar</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container-fluid grid-container px-0">

                    <p class="grid-header center-text uppercase-text">- Tournament grids -</p>
                    <div class="row justify-content-center grid-row ">
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-box grid-gold square"></div>
                            <div class="grid__inner-text">
                                <h1>Gold grid</h1>
                                <p class="grid__inner-dash-padding">-</p>
                                <p>Starting at $96</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-box grid-silver square"></div>
                            <div class="grid__inner-text">
                                <h1>Silver grid</h1>
                                <p class="grid__inner-dash-padding">-</p>
                                <p>Starting at $74</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-box grid-bronze square"></div>
                            <div class="grid__inner-text">
                                <h1>Bronze grid</h1>
                                <p class="grid__inner-dash-padding">-</p>
                                <p>Starting at $62</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>
            <!-- ***************************************  TEE TIMES  *************************************** -->
            <section>
                <div class="hero_container top-tee">
                    <div class="hero lower-banner">
                        <img class="hero__tee-img" src="<?php echo get_template_directory_uri(); ?>/public/img/banners/banner-home-tee-times.jpg" alt="Tee Times">
                    </div>
                    <div class="hero__tee-text">
                        <h1>Tim's Tee Times</h1>
                        <p>Each day we offer specially priced green fees in a limited number</p>
                        <div class="hero__tee-phone">
                                <a href="tel:5198424142">Call today to reserve!<br>519 842 4142</a>
                        </div>
                    </div>
                </div>
            <!-- *********************************  GET TO KNOW THE COURCE  ********************************* -->
                <div class="hero_container">
                    <div class="hero lower-banner">
                        <img class="hero__course-img" src="<?php echo get_template_directory_uri(); ?>/public/img/banners/banner-home-courses.jpg" alt="Get to know the course">
                    </div>
                    <div class="hero__course-text">
                        <h1>Get to know our<br> courses from ther air!</h1>
                        <p>Thanks to our new drone footage, you can get aquainted with each of our courses before you try them.</p>
                            <a href="#">
                                <div class="hero__course-view">
                                <p class="hero__course-view--text">view courses</p>
                            </a>
                        </div>
                    </div>
                </div>
            <!-- ***************************************  GOOGLE MAP  *************************************** -->
                <div class="live-map--container">
                    <iframe class="hero" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11700.04782776991!2d-80.7281409!3d42.8514807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6a7f258b5e0363b1!2sThe+Bridges+at+Tillsonburg!5e0!3m2!1sen!2sca!4v1553011648968" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
    