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
                            <p>Joining one of our leagues is a wonderful way to make new friends, stay active and make golf a part of your life. There is nothing quite like relaxing on the open course with friends in our beautiful surroundings.</p><br>
                            <p>For further information on one or our leagues, please contact The Bridges.</p>
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
                            <img class="contact-logo"src="<?php echo get_template_directory_uri(); ?>/public/img/thumbs/mens-league.jpg" alt="Men's League Golf">
                        </div>
                        <div class="d-flex col-lg-6 px-0">
                            <div class="contact__info--contact-us align-self-center pl-7 pr-8">
                                <h1>Men's League</h1>
                                <h3>Tuesday night men's 10-hole league</h3>
                                <p>The Men’s League at The Bridges at Tillsonburg is open to both members and non-members alike. The first 3 weeks of play, we will find each team's scoring average and then place them in an A,B, or C Division where they will compete against other teams for the season. A weekly putting tournament for “GOLD” will be held on the 18th green following every round.<p>
                                <ul>
                                    <li>$50/ team or $25/person</li>
                                    <li>No Weekly Fee for Members</li>
                                    <li>Non-member $20 Cart included</li>
                                    <li>Maximum 40 Teams</li>
                                    <li>5:30 PM Shotgun Start Tuesday Night</li>
                                </ul>
                                <h2>Men's Steak BBQ</h2>
                                <p>September 26 after golf</p>
                            </div>
                        </div>
                    <!-- ***************************************** WOMEN'S LEAGUE  ***************************************** -->
                    <div class="row mt-7">
                        <div class="d-flex col-lg-6 px-0">
                            <div class="contact__info--contact-us align-self-center pl-7 pb-6 pr-8">
                                <h1>Women's League</h1>
                                <h3>Wednesday night Ladies' league</h3>
                                <p>The Ladies' League at The Bridges at Tillsonburg is open to both members and non-members.<br>
                                Course is closed Wednesday 3 PM - Closed to all but the Women's League.<p>
                                <ul>
                                    <li>Back 9 is Only available for Tee Times After 4:30PM</li>
                                    <li>After 4:30PM Groups can book both Front or Back</li>
                                    <li>Weekly Games & Prizes: Posted on Tee Blocks 1 & 10</li>
                                </ul>
                                <h2>End of year Dinner</h2>
                                <p>September 27th 6:30PM: Includes Dinner, Prizes, Games</p>
                            </div>
                        </div>
                        <div class="col-lg-6 px-0">
                            <img class="contact-logo darken"src="<?php echo get_template_directory_uri(); ?>/public/img/thumbs/womens-league.jpg" alt="Women's Golf League">
                        </div>
                    </div>
                    <!-- ***************************************** JUNIORS LEAGUE  ***************************************** -->
                    <div class="row mt-7">
                        <div class="col-lg-6 px-0">
                            <img class="contact-logo"src="<?php echo get_template_directory_uri(); ?>/public/img/thumbs/junior-league.jpg" alt="Junior's League Golf">
                        </div>
                        <div class="d-flex col-lg-6 px-0">
                            <div class="contact__info--contact-us align-self-center pl-7 pr-8">
                            <h1>JUNIOR LEAGUE & JUNIOR GOLF CAMPS</h1>
                            <p>Most recreational sport programs are coached by parents who have a passion for the sport and enjoy helping young people. The Junior Golf League is no different! We are looking for parents who would be interested in the league. The Golf Shop staff will be responsible for overseeing the league; providing leadership and instruction to everyone!</p><br>
                            <p>Advanced skills are not required. Must have access to a set of golf clubs. If your child can drive, chip or putt, we have a role for them in our league.<p>
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
                            <h2 class="pb-5">Monday Junior League*</h2>
                            <p>Begins July 3, 2017<br>
                                8:30 AM – 12:30 PM <br><br>
                                Each Monday will consist of Golf, Lessons, Rules & Lunch Provided.<br><br>
                                $99.00 (Includes 11 Sessions)<br><br>
                                Year-End Junior Tournament<br>
                                sponsored by: <br>
                                Hogarth Insurance</p>
                        </div>
                        <div class="col-md-2 px-0 offset-md-1">
                            <h2 class="pb-5">July Junior Golf Camp</h2>
                            <p>July 24th – 27th<br><br>
                                Mon – Thurs<br>
                                8:30am – 12:30pm<br><br>
                                Cost: $99.00 (four days)</p>
                        </div>
                        <div class="col-md-2 px-0 offset-md-1">
                            <h2 class="pb-5">August Junior Golf Camp</h2>
                            <p>August 21st – 24th<br><br>
                                Mon – Thurs<br>
                                8:30am – 12:30pm<br><br>
                                Cost $99.00 (four days)</p>
                        </div>
                    </div>
                </div>
                <p class="py-6">*Any Holiday Monday's will be an afternoon session from 3:00 PM - 6:00 PM*</p>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
    