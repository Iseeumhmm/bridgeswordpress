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

    //response generation function
    $response = "";
    
    //function to generate response
    function my_contact_form_generate_response($type, $message){
    
        global $response;
    
        if($type == "success") $response = "<div class='success'>{$message}</div>";
        else $response = "<div class='error'>{$message}</div>";
    
    }
     //response messages
    $missing_content = "Please supply all information.";
    $email_invalid   = "Email Address Invalid.";
    $message_unsent  = "Message was not sent. Try Again.";
    $message_sent    = "Thanks! Your message has been sent.";

    //user posted variables
    $name = $_POST['message_name'];
    $email = $_POST['message_email'];
    $message = $_POST['message_text'];
    $forWho = $_POST['message_for-who'];
    $submitted = $_POST['submitted'];

    //php mailer variables
    $to = get_option('admin_email');
    $subject = "Message for ".$forWho." from the Bridges at Tillsonburg Website";
    $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";
 
    if($submitted == "1"){
        //validate email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
        else //email is valid
        {
            //validate presence of name and message
            if(empty($name) || empty($message)){
                my_contact_form_generate_response("error", $missing_content);
            }
            else //ready to go!
            {
                $sent = wp_mail($to, $subject, strip_tags($message), $headers);
                if($sent) {
                    my_contact_form_generate_response("success", $message_sent); //message sent!
                }
                else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
                // header("location: ?page_id=16");
            }
        }
    // }
    }
    else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);
?>
<?php get_header();?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
        <style type="text/css">
                    .error{
                        padding: 5px 9px;
                        border: 1px solid red;
                        color: red;
                        border-radius: 3px;
                    }
                    
                    .success{
                        padding: 5px 9px;
                        border: 1px solid green;
                        color: green;
                        border-radius: 3px;
                    }
                    
                    form span{
                        color: red;
                    }
             </style>

        <!-- *********************************************  GOOGLE MAP  ********************************************* -->

            <section class="hero">
                <iframe class="map-contact" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11700.04782776991!2d-80.7281409!3d42.8514807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6a7f258b5e0363b1!2sThe+Bridges+at+Tillsonburg!5e0!3m2!1sen!2sca!4v1553011648968" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                                <div class="icons">
                                    <a href="mailto: <?php the_field('team_member_1_of_4_email'); ?>"<i class="far fa-envelope"></i></a>
                                    <?php
                                        $extension = get_field('team_member_1_of_4_extension');
                                        if( !empty($extension) ):
                                        ?>
                                        <a href="tel:5198424142"><i class="fas fa-phone middle"></i> <span>ext <?php the_field('team_member_1_of_4_extension'); ?></span></a> 
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-auto px-5">
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
                                <div class="icons">
                                    <a href="mailto: <?php the_field('team_member_2_of_4_email'); ?>"<i class="far fa-envelope"></i></a>
                                    <?php
                                        $extension = get_field('team_member_2_of_4_extension');
                                        if( !empty($extension) ):
                                        ?>
                                        <a href="tel:5198424142"><i class="fas fa-phone middle"></i> <span>ext <?php the_field('team_member_2_of_4_extension'); ?></span></a> 
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-auto px-5">
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
                                <div class="icons">
                                    <a href="mailto: <?php the_field('team_member_3_of_4_email'); ?>"<i class="far fa-envelope"></i></a>
                                    <?php
                                        $extension = get_field('team_member_3_of_4_extension');
                                        if( !empty($extension) ):
                                        ?>
                                        <a href="tel:5198424142"><i class="fas fa-phone middle"></i> <span>ext <?php the_field('team_member_3_of_4_extension'); ?></span></a> 
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-auto px-5">
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
                                <div class="icons">
                                    <a href="mailto: <?php the_field('team_member_4_of_4_email'); ?>"<i class="far fa-envelope"></i></a>
                                    <?php
                                        $extension = get_field('team_member_4_of_4_extension');
                                        if( !empty($extension) ):
                                        ?>
                                        <a href="tel:5198424142"><i class="fas fa-phone middle"></i> <span>ext <?php the_field('team_member_4_of_4_extension'); ?></span></a> 
                                    <?php endif; ?>
                                </div>
                            </div>  
                        </div>
                    </div>

            </section>

            <!-- ********************************************* CONTACT FORM  *********************************************** -->

            <section class="contact-form">
                    <div class="center-text">
                        <h1>Send Message</h1>
                        <div class="message"><?php echo $response; ?></div>
                    </div>
                    <div id="respond">
                        <form action="#respond" method="post">
                            <p><label for="message_name"><input type="text" name="message_name" placeholder="Name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p>
                            <p><label for="message_email"><input type="text" name="message_email" placeholder="Email" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p>
                            <p><label for="message_for-who"><input type="text" name="message_for-who" placeholder="Who's this message for?" value="<?php echo esc_attr($_POST['message_for-who']); ?>"></label></p>
                            <p><label for="message_text"><textarea type="text" name="message_text" placeholder="Message"><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></p>
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
    