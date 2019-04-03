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
            <section class="hero" style="background-image: linear-gradient(rgba(0,0,0, 0),rgba(0,0,0, .2)),url('<?php echo get_template_directory_uri(); ?>/public/img/banners/banner-about.jpg');">
                <div class="hero__main-text-pages">
                    <h1>About Us</h1>
                </div>
            </section>
            <!-- ****************************************  ALTERNATING IMAGES  **************************************** -->

            <section class="alternating">
                <div class="container-fluid px-0 mx-0 mt-7">
                    <div class="row">
                        <div class="col-lg-6 px-0">
                            <img class="contact-logo darken"src="<?php echo get_template_directory_uri(); ?>/public/img/thumbs/clubhouse.jpg" alt="Club House">
                        </div>
                        <div class="d-flex col-lg-6 mt-xl-7 px-0">
                            <div class="contact__info--contact-us align-self-center pl-7 pr-8">
                                <h1 class="text-capitalize">The Clubhouse</h1>
                                <p>We want everyone to feel right at home here at The Bridges. Our warm and cozy clubhouse is the perfect spot to call your second home. Join us for great dining, a refreshing drink or just to say hello as the doors are always open and someone is sure to be here with a smile on their face. <p>
                                <p class="mt-5 contact-clubhouse">After your round of golf or dining experience, enjoy a beverage and a meal on Tillsonburg’s largest patio, surrounded by nature. Our friendly and accommodating staff will ensure your time off the course is as enjoyable as the time you spend on the course.</p>
                            </div>
                        </div>
                    <div class="row alternating-col mt-xl-7">
                        <div class="d-flex col-lg-6 mt-xl-7 px-0">
                            <div class="contact__info--contact-us align-self-center pl-7 pb-6 pr-8">
                                <h1 class="text-capitalize">Mulligans Place</h1>
                                <p>Mulligans is the perfect place to grab a bite before your game, meet with family, colleagues and friends, or simply relax after a round of golf. Chef Vasco Serrador operates our newly redesigned pub, overseeing an inspired menu of clubhouse classics with locally sourced ingredients.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 px-0">
                            <img class="contact-logo darken"src="<?php echo get_template_directory_uri(); ?>/public/img/thumbs/clubhouse.jpg" alt="Club House">
                        </div>
                    </div>
                </div>
            </section>

                <!-- ****************************************  PRO SHOP IMAGE  **************************************** -->

            <section class="hero mt-xl-7" style="background-image: linear-gradient(rgba(0,0,0, 0),rgba(0,0,0, .8)),url('<?php echo get_template_directory_uri(); ?>/public/img/banners/banner-pro-shop.jpg');">
                <div class="container-fluid pb-7 color-white font-regular text-center">
                    <div class="d-flex row align-text-top justify-content-center">
                        <div class="text-items col-lg-6 align-self-end">
                            <h1 class="font-semi-bold color-white pb-5">Pro Shop</h1>
                            <p class="font-sans font-regular color-white">The Bridges at Tillsonburg's Pro Shop is where golfers of all abilities will find all of the necessities for their round, as well as interesting golf specialty items.</p>
                            <a href="#">
                                <div class="hero__main-view">
                                    <p class="hero__main-view--text color-white text-items--cta">View our current specials</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            
                <!-- *******************************************  OUR TEAM  ******************************************* -->
            <section class="team">
                <div class="container-fluid px-0 mx-0 mt-7">
                    <div class="center-text">
                        <h1>our team</h1>
                    </div>
                    <div class="row justify-content-center center-text">
                        <div class="col-md-6">
                            <p class="description pb-6"><?php the_field('our_team_description'); ?></p>
                        </div>
                    </div>
                    <div class="row justify-content-center center-text">
                        <div class="member col-sm-3 col-md-auto px-5">
                            <?php 
                                $image = get_field('team_member_1_of_4_image');
                                if( !empty($image) ): 
                                    $url = $image['url'];
                                    $alt = $image['alt'];
                                ?>
                                <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                            <?php endif; ?>
                            <h2><?php the_field('team_member_1_of_4_name'); ?></h2>
                            <p><?php the_field('team_member_1_of_4_title'); ?></p>
                        </div>
                        <div class="member col-sm-3 col-md-auto px-5">
                            <?php 
                                $image = get_field('team_member_2_of_4_image');
                                if( !empty($image) ): 
                                    $url = $image['url'];
                                    $alt = $image['alt'];
                                ?>
                                <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                            <?php endif; ?>
                            <h2><?php the_field('team_member_2_of_4_name'); ?></h2>
                            <p><?php the_field('team_member_2_of_4_title'); ?></p>
                        </div>
                        <div class="member col-sm-3 col-md-auto px-5">
                            <?php 
                                $image = get_field('team_member_3_of_4_image');
                                if( !empty($image) ): 
                                    $url = $image['url'];
                                    $alt = $image['alt'];
                                ?>
                                <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                            <?php endif; ?>
                            <h2><?php the_field('team_member_3_of_4_name'); ?></h2>
                            <p><?php the_field('team_member_3_of_4_title'); ?></p>
                        </div>
                        <div class="member col-sm-3 col-md-auto px-5">
                            <?php 
                                $image = get_field('team_member_4_of_4_image');
                                if( !empty($image) ): 
                                    $url = $image['url'];
                                    $alt = $image['alt'];
                                ?>
                                <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                            <?php endif; ?>
                            <h2><?php the_field('team_member_4_of_4_name'); ?></h2>
                            <p><?php the_field('team_member_4_of_4_title'); ?></p>
                        </div> 
                    </div>
                </div>
            </section>
                <!-- ****************************************  CARROLL TRAIL IMAGE  **************************************** -->

            <section class="hero hero-carroll" style="background-image: linear-gradient(rgba(0,0,0, .5),rgba(0,0,0, .8)),url('<?php echo get_template_directory_uri(); ?>/public/img/banners/banner-carroll-trail.jpg');">
                <div class="container-fluid pb-7 color-white font-regular">
                    <h1 class="text-center pt-7 pb-5 color-white">The Carroll Trail</h1>
                    <div class="row carroll-trail align-text-top justify-content-center">
                        <div class="col-lg-4 text-left pr-6">
                            <p class="font-sans color-white font-regular">A unique feature of The Bridges at Tillsonburg golf course is the fact that there is a community trail system weaving through the new expansion holes on the golf course.<br><br> The trail system became a major attraction for the Tillsonburg Golf Club's expansion to 18 holes. The Tillsonburg Trail Committee (TTC) was formed and undertook the fundraising for this $1.2 million dollar project. The project was completely fund raised and paid for by public donations with the generous support of Pat and Liz Carroll and family.<br><br> This non-motorized 3-season trail is fully accessible to the public and compliments the existing trail systems throughout the town. The 5.1 km trail winds through beautiful natural areas in, around and through the Otter Creek floodplain crossing the creek in a number of locations. </p>
                        </div>
                        <div class="col-lg-4 text-left pl-6">
                            <p class="color-white">It provides recreation opportunities for residents and tourists alike. The 2.8 metre width can accommodate two-way traffic for walking, jogging and cross country skiing.<br><br> Sections of the Carroll Trail are finished with asphalt due to the elevation changes and to prevent erosion on these sloped areas. Approximately 170 tons of Armor-stone were used for erosion control and to give character to the trail and 6,000 tons of gravel and screenings were put down to make up the trail itself. Many native to the Carolinian Forest trees were planted along the entire trail system for beauty and to provide erosion control. Native plants, in the form of 'live stakes' were added as well.<br><br>  The Carroll Trail trail head originates in Coronation Park where there is ample parking available.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
    