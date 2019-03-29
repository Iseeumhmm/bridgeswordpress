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
            <section class="hero" style="background-image: linear-gradient(rgba(0,0,0, 0),rgba(0,0,0, .2)),url('<?php echo get_template_directory_uri(); ?>/public/img/banners/banner-lessons.jpg');">
                <div class="hero__main-text-pages">
                   <h1>Lessons</h1>
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
                <!-- *****************************************  PRICING BOXES  ***************************************** -->
            <section class="lessons-clinics text-uppercase">
                <div class="container-fluid grid-container px-0 center-text">
                <p class="grid-header uppercase-text mt-6"><h1>Lessons and Clinics</h1></p>
                    <div class="row justify-content-center grid-row font-regular">
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 px-0">
                            <div class="grid-box grid-gold square"></div>
                            <div class="grid__inner-text">
                                <h1>1 Session</h1>
                                <p><p class="grid__inner-dash-padding">-</p><?php the_field('1_session_price'); ?></p>
                                <p class="book-now">Book Now</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 px-0">
                            <div class="grid-box grid-silver square"></div>
                            <div class="grid__inner-text">
                                <h1>3 Session</h1>
                                <p><p class="grid__inner-dash-padding">-</p><?php the_field('3_session_price'); ?></p>
                                <p class="book-now">Book Now</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 px-0">
                            <div class="grid-box grid-bronze square"></div>
                            <div class="grid__inner-text">
                                <h1>5 Session</h1>
                                <p><p class="grid__inner-dash-padding">-</p><?php the_field('5_session_price'); ?></p>
                                <p class="book-now">Book Now</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 px-0">
                            <div class="grid-box grid-black square"></div>
                            <div class="grid__inner-text">
                                <h1>Junior</h1>
                                <p><p class="grid__inner-dash-padding">-</p><?php the_field('junior_lessons_price'); ?></p>
                                <p class="book-now">Book Now</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center grid-row font-regular">
                        <div class="col-sm-12 col-xl-8 py-6 px-2 gift-box">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/img/banners/gift.png" alt="Gift Box"> 
                            <div class="text-left gift-text pl-6">
                                <h1>Makes a great gift!</h1>
                                <p>Gift voucher provided!</p>
                            </div>  
                        </div>
                    </div>
                </div>
            </section><p></p>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
    