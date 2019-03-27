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

        <!-- *********************************************  GOOGLE MAP  ********************************************* -->

            <section>
                <iframe class="hero-contact" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11700.04782776991!2d-80.7281409!3d42.8514807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6a7f258b5e0363b1!2sThe+Bridges+at+Tillsonburg!5e0!3m2!1sen!2sca!4v1553011648968" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </section>

            <!-- *****************************************  LOGO AND CONTACT US  ***************************************** -->

            <section class="contact">
                <div class="container-fluid px-0 mx-0">
                    <div class="row">
                        <div class="col-lg-6 px-0">
                            <img class="contact-logo"src="<?php echo get_template_directory_uri(); ?>/public/img/thumbs/contact.jpg" alt="Contact Logo">
                        </div>
                        <div class="col-lg-6 px-0">
                            <div class="contact__info d-flex">
                                <div class="contact__info--contact-us pl-6 align-self-center">
                                    <h1>contact us</h1>
                                    <p>101 John Pound Road<br>
                                        Tillsonburg, ON N4G 4H3
                                    </p>
                                    <h2>tee times / pro shop</h2>
                                    <p>(519) 842-4142 ext 4</p>
                                    <h2>seasonal hours</h2>
                                    <p>Monday - Friday: 9AM - 7PM<br>
                                        Saturdays & Sundays: 9AM - 6PM
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
            </section>

            <!-- ***********************************************  OUR TEAM  *********************************************** -->

            <section class="team">
                    <div class="container-fluid px-0 mx-0">
                        <div class="center-text">
                            <h1>our team</h1>
                        </div>
                        <div class="row justify-content-center center-text">
                            <div class="col-md-auto px-5 ">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/img/staff/tyler-martindale.jpg" alt="Tyler Martindale">
                                <h2>Tyler Martindale</h2>
                                <p>Golf Professional</p>
                                <div class="icons">
                                    <i class="far fa-envelope"></i>
                                    <i class="fas fa-phone middle"></i> <span>ext 2</span> 
                                </div>
                            </div>
                            <div class="col-md-auto px-5">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/img/staff/taylor-thoonen.jpg" alt="Taylor Thoonen">
                                <h2>Taylor Thoonen</h2>
                                <p>Food & Beverage Manager</p>
                                <div class="icons">
                                    <i class="far fa-envelope"></i>
                                    <i class="fas fa-phone middle"></i> <span>ext 3</span> 
                                </div>
                            </div>
                            <div class="col-md-auto px-5">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/img/staff/vasco-serrador.jpg" alt="Vasco Serrador">
                                <h2>Vasco Serrador</h2>
                                <p>Head Chef</p>
                                <div class="icons">
                                    <i class="far fa-envelope"></i>
                                    <i class="fas fa-phone middle"></i> <span>ext 4</span> 
                                </div>
                            </div>
                            <div class="col-md-auto px-5">
                                <img src="<?php echo get_template_directory_uri(); ?>/public/img/staff/shayne-tremblay.jpg" alt="Shayne Tremblay">
                                <h2>Shayne Tremblay</h2>
                                <p>Superintendant</p>
                                <div class="icons">
                                    <i class="far fa-envelope"></i>
                                </div>
                            </div>  
                        </div>
                    </div>

            </section>

            <!-- ********************************************* CONTACT FORM  *********************************************** -->

            <section class="contact-form">
                    <div class="center-text">
                        <h1>Send Message</h1>
                    </div>
                    <div id="respond">
                    <!-- <?php echo $response; ?> -->
                    
                    <!-- <form action="?page_id=16" method="post"> -->
                    <form method="post">
                        <p><label for="message_name"><input type="text" name="message_name" placeholder="Name" value=""></label></p>
                        <p><label for="message_email"><input type="text" name="message_email" placeholder="Email" value=""></label></p>
                        <p><label for="message_for-who"><input type="text" name="message_for-who" placeholder="Who's this message for?" value=""></label></p>
                        <p><label for="message_text"><textarea type="text" name="message_text" placeholder="Message"></textarea></label></p>
                        <input type="hidden" name="submitted" value="1">
                        <p><input class="btn" value="Send Message" type="submit"></p>
                    </form>
                    </div>
            </section>

            <!-- ***********************************************  FOOTER  ************************************************* -->

            </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
    