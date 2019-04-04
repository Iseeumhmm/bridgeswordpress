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

            <!-- ***************************************  EVENTS IFRAME  *************************************** -->
            <div class="hero-home"> 
                <iframe class="hero-events"src="https://calendar.google.com/calendar/embed?src=thebridgesattillsonburg.com_l685cs6fh4652b99btcu5315lg%40group.calendar.google.com&ctz=America%2FToronto" style="border: 0" width="740" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
            

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();