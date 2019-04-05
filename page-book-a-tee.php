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

            <!-- ***************************************  BOOK A TEE IFRAME  *************************************** -->
            <div class="hero text-center mt-7"> 
                <iframe width="740" height="425" style="border: none; margin: 5px" src="http://www.tee-on.com/PubGolf/servlet/com.teeon.teesheet.servlets.all.BookATeeTimeLanding?CourseCode=TILL&amp;LoginType=1&amp;RestrictToType=false" scrolling="no" frameborder="0"></iframe>
            </div>
        
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();