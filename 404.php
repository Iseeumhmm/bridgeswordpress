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
			<section class="about">
				<div class="hero">
					<img class="darken" src="<?php echo get_template_directory_uri(); ?>/public/img/banners/banner-about.jpg" alt="About Banner">
					<div class="hero__main-green-text center-text">
						<h1>Sorry page not found.</h1>
					</div>
				</div>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
