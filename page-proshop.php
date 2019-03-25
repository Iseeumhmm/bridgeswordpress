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
            <section class="leagues">
                    <div class="hero">
                        <img class="darken" src="<?php echo get_template_directory_uri(); ?>/public/img/banners/banner-pro-shop.jpg" alt="Pro Shop Banner">
                        <div class="hero__main-green-text center-text">
                                <h1>Pro Shop</h1>
                        </div>
                    </div>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
    