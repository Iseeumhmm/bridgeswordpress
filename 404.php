<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package BridgesAtTillsonburg
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="hero" style="background-image: linear-gradient(rgba(0,0,0, 0),rgba(0,0,0, .2)),url('<?php echo get_template_directory_uri(); ?>/public/img/banners/banner-about.jpg');">
					<div class="hero__main-text-pages">
						<h1>Sorry that page can't be found.</h1>
					</div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
