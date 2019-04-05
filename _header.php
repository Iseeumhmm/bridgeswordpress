
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BridgesAtTillsonburg
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/public/css/style.css">
    <title>Bridges at Tillsonburg</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bridgesattillsonburg' ); ?></a>

        <header id="masthead" class="site-header">
        <div class="container-fluid p-0" id="outer"></div>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="logo">
                    <a href="/index" class="navbar-brand">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/img/logo/logo.png" alt="Logo">
                    </a>
                </div>
                <button class="navbar-toggler mr-md-7" data-toggle="collapse" data-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <div class="navbar-nav ml-auto navbar-mobile-center">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="/book-a-tee" class="nav-link px-nav-link">Book a tee</a>
                            </li>
                            <li class="nav-item">
                                <a href="/about" class="nav-link px-nav-link">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" area-expanded="false">Golf</a>
                                <div class="dropdown-menu">
                                    <a href="/the-course" class="dropdown-item">The Course</a>
                                    <a href="/proshop" class="dropdown-item">The Pro Shop</a>
                                    <a href="/lessons" class="dropdown-item">Lessons</a>
                                    <a href="/league" class="dropdown-item">League</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="/events" class="nav-link px-nav-link">Events</a>
                            </li>
                            <li class="nav-item">
                                <a href="/contact" class="nav-link px-nav-link">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="/greenfees" class="nav-link px-nav-link">Green fees</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        </header><!-- #masthead -->

        <div id="content" class="site-content">
