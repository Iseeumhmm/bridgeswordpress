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
    <style>
        .course-bg {
            background-image: url('<?php echo get_template_directory_uri(); ?>/public/img/banners/banner-home-courses.jpg');
        }
        .tee-bg {
            background-image: url('<?php echo get_template_directory_uri(); ?>/public/img/banners/banner-home-tee-times.jpg');
        }
        .main-bg {
            background-image: url('<?php echo get_template_directory_uri(); ?>/public/img/banners/banner-home.jpg');
        }
        @media (max-width: 768px) {
            .course-bg {
                background-image: url('<?php echo get_template_directory_uri(); ?>/public/img/mobile/banner-home-courses-mobile.jpg');
            }
            .tee-bg {
                background-image: url('<?php echo get_template_directory_uri(); ?>/public/img/mobile/banner-home-tee-mobile.jpg');
            }
            .main-bg {
                background-image: url('<?php echo get_template_directory_uri(); ?>/public/img/mobile/banner-home-courses-mobile.jpg');
            }
        }
    }
    </style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <!-- ***************************************  MAIN HERO IMAGE  *************************************** -->
            <section class="hero hero-home main-bg" style="background-image: linear-gradient(rgba(0,0,0, 0),rgba(0,0,0, .2)),url('<?php echo get_template_directory_uri(); ?>/public/img/banners/banner-home.jpg');">
                <div class="hero__main-text">
                    <p><h2>The Bridges offers the best of traditional course style, with beautiful views and elevation changes in 10 new holes that wind through the Otter Valley.</h2>
                    </p>
                    <a href="/bridges/greenfees">
                        <div class="hero__main-view">
                            <p class="hero__main-view--text color-white">view our rates</p>
                        </div>
                    </a>
                </div>
            </section>
            <!-- ***************************************  GRID SECTION  *************************************** -->
            <section>
                <div class="container-fluid grid grid-section center-text uppercase-text">
                    <h1>Bridges Events</h1>
                    <p>- join us or book with us -</p>
                    <div class="row justify-content-center mx-0 grid-row">
                        <div class="col-sm-4 col-lg-3 col-xl-2 px-0">
                            <?php 
                                $image = get_field('row-1-box-1-image');
                                if( !empty($image) ): 
                                    $url = $image['url'];
                                    $alt = $image['alt'];
                                ?>
                                <div class="grid-view grid-img square" title="<?php echo $alt; ?>" style="background-image: url(<?php echo $url; ?>); background-size: cover;">
                                    <p class="grid__inner-text ">
                                        <span class="grid__inner-food-truck--text"><?php the_field('row-1-box-1-title'); ?></span><br><br>
                                        <?php the_field('row-1-box-1-date'); ?><br>
                                        <?php the_field('row-1-box-1-time'); ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-4 col-lg-3 col-xl-2 px-0">
                            <?php 
                                $image = get_field('row-1-box-2-image');
                                if( !empty($image) ): 
                                    $url = $image['url'];
                                    $alt = $image['alt'];
                                ?>
                                <div class="grid-view grid-img square" title="<?php echo $alt; ?>" style="background-image: url(<?php echo $url; ?>); background-size: cover;">
                                    <p class="grid__inner-text ">
                                        <span class="grid__inner-food-truck--text"><?php the_field('row-1-box-2-title'); ?></span><br><br>
                                        <?php the_field('row-1-box-2-date'); ?><br>
                                        <?php the_field('row-1-box-2-time'); ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-4 col-lg-3 col-xl-2 grid-img px-0">
                            <?php 
                                $image = get_field('row-1-box-3-image');
                                if( !empty($image) ): 
                                    $url = $image['url'];
                                    $alt = $image['alt'];
                                ?>
                                <div class="grid-view grid-view-calendar square"style="background-image: linear-gradient(rgba(204, 151, 84, .5),rgba(204, 151, 84, .5)),url(<?php echo $url; ?>); background-size: cover; filter: brightness(65%);">
                                    <a href="/bridges/events">
                                        <div class="grid-calendar">
                                        <p class="grid__inner-text"><?php the_field('row-1-box-3-text'); ?></p>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="container-fluid px-0">
                    <p class="center-text uppercase-text">- Tournament Packages -</p>
                    <div class="row justify-content-center grid-row mx-0">
                        <div class="col-sm-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-box grid-gold square">
                                <div class="grid__inner-text">
                                    <h1>Gold Package</h1>
                                    <p class="grid__inner-dash-padding">-</p>
                                    <p>Starting at <?php the_field('gold_package'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-box grid-silver square">
                                <div class="grid__inner-text">
                                    <h1>Silver Package</h1>
                                    <p class="grid__inner-dash-padding">-</p>
                                    <p>Starting at <?php the_field('silver_package'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-3 col-xl-2 px-0">
                            <div class="grid-box grid-bronze square">
                                <div class="grid__inner-text">
                                    <h1>Bronze Package</h1>
                                    <p class="grid__inner-dash-padding">-</p>
                                    <p>Starting at <?php the_field('bronze_package'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>
            <!-- ***************************************  TEE TIMES  *************************************** -->
            
            <section class="hero tee-bg">
                <div class="hero__tee-text">
                    <h1>Tim's Tee Times</h1>
                    <p>Each day we offer specially priced green fees in a limited number</p>
                    <div class="hero__tee-phone color-brown">
                        <a href="tel:5198424142">Call today to reserve!<br>519 842 4142</a>
                    </div>
                </div>
            </section>
            
            <!-- *********************************  GET TO KNOW THE COURSE  ********************************* -->

            <section class="hero course-bg">
                <div class="hero__course-text">
                    <h1>Get to know our courses from the air!</h1>
                    <p class="pt-3 color-white">Thanks to our new drone footage, you can get aquainted with each of our courses before you try them.</p>
                        <a href="/bridges/the-course">
                            <div class="hero__course-view">
                                <p class="hero__course-view--text color-white">view courses</p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <!-- ***************************************  GOOGLE MAP  *************************************** -->
            <section class="hero">
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11700.04782776991!2d-80.7281409!3d42.8514807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6a7f258b5e0363b1!2sThe+Bridges+at+Tillsonburg!5e0!3m2!1sen!2sca!4v1553011648968" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
    