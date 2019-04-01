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
            <section class="hero" style="background-image: linear-gradient(rgba(0,0,0, 0),rgba(0,0,0, .2)),url('<?php echo get_template_directory_uri(); ?>/public/img/banners/banner-golf-leagues.jpg');">
                <div class="hero__main-text-pages">
                   <h1>Golf Leagues</h1>
                </div>
            </section>

            <!-- *****************************************  INFORMATION  ***************************************** -->

            <section class="league-info">
                <div class="container-fluid px-0 mx-0 mt-7">
                    <div class="row justify-content-center center-text">
                        <div class="col-lg-6 color-brown">
                            <p><?php the_field('descriptive_paragraph'); ?></p>
                        </div>
                    </div>
                </div>
            </section>
                    <!-- *****************************************  LEAGUE ROWS  ***************************************** -->

            <section class="league-rows color-brown">
                <div class="container-fluid px-0 mx-0 mt-7">
                    <!-- *****************************************  MEN'S LEAGUE  ***************************************** -->
                    <div class="row">
                        <div class="col-lg-6 px-0">
                            <?php 
                                $image = get_field('mens_league_image');
                                if( !empty($image) ): 
                                    $url = $image['url'];
                                    $alt = $image['alt'];
                                ?>
                                <img class="contact-logo" src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="d-flex col-lg-6 px-0">
                            <div class="contact__info--contact-us align-self-center pl-7 pr-8">
                                <h1><?php the_field('mens_league_title'); ?></h1>
                                <h3><?php the_field('mens_league_sub_title'); ?></h3>
                                <p><?php the_field('mens_league_text_body'); ?></p>
                                <h2><?php the_field('mens_league_event_title'); ?></h2>
                                <p><?php the_field('mens_league_event_sub_title'); ?></p>
                            </div>
                        </div>
                    <!-- ***************************************** WOMEN'S LEAGUE  ***************************************** -->
                    <div class="row mt-7">
                        <div class="d-flex col-lg-6 px-0">
                            <div class="contact__info--contact-us align-self-center pl-7 pb-6 pr-8">
                                <h1><?php the_field('womens_league_title'); ?></h1>
                                <h3><?php the_field('womens_league_sub_title'); ?></h3>
                                <p><?php the_field('womens_league_text_body'); ?></p>
                                <h2><?php the_field('womens_league_event_title'); ?></h2>
                                <p><?php the_field('womens_league_event_sub_title'); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 px-0">
                            <?php 
                                $image = get_field('womens_league_image');
                                if( !empty($image) ): 
                                    $url = $image['url'];
                                    $alt = $image['alt'];
                                ?>
                                <img class="contact-logo" src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- ***************************************** JUNIORS LEAGUE  ***************************************** -->
                    <div class="row mt-7">
                        <div class="col-lg-6 px-0">
                            <?php 
                                $image = get_field('juniors_league_image');
                                if( !empty($image) ): 
                                    $url = $image['url'];
                                    $alt = $image['alt'];
                                ?>
                                <img class="contact-logo darken" src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="d-flex col-lg-6 px-0">
                            <div class="contact__info--contact-us align-self-center pl-7 pr-8">
                                <h1><?php the_field('juniors_league_title'); ?></h1>
                                <h3><?php the_field('juniors_league_sub_title'); ?></h3>
                                <p><?php the_field('juniors_league_text_body'); ?></p>
                                <h2><?php the_field('juniors_league_event_title'); ?></h2>
                                <p><?php the_field('juniors_league_event_sub_title'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                    <!-- ***************************************** DATES AND TIMES  ***************************************** -->

            <section class="dates-times center-text mt-6">
                <div class="container-fluid px-0 mx-0">
                    <div class="row justify-content-center">
                        <div class="col-md-2 px-0">
                            <h2 class="pb-5"><?php the_field('event_1_title'); ?></h2>
                            <p><?php the_field('event_1_body'); ?></p>
                        </div>
                        <div class="col-md-2 px-0 offset-md-1">
                        <h2 class="pb-5"><?php the_field('event_2_title'); ?></h2>
                            <p><?php the_field('event_2_body'); ?></p>
                        </div>
                        <div class="col-md-2 px-0 offset-md-1">
                        <h2 class="pb-5"><?php the_field('event_3_title'); ?></h2>
                            <p><?php the_field('event_3_body'); ?></p>
                        </div>
                    </div>
                </div>
                <p class="py-6"><?php the_field('asterisk_reference'); ?></p>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
    