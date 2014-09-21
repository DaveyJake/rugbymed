<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package USA Rugby Medical Symposium
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

<script src="//use.typekit.net/dob8irt.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav id="mobile-site-navigation" class="mm-menu mm-horizontal mm-offcanvas" role="navigation">
<?php if ( ! dynamic_sidebar( 'main-sidebar' ) ) : ?>
	<?php wp_nav_menu( array( 'theme_location' => 'main-sidebar', 'id' => 'site-menu' ) ); ?>
<?php endif; ?>
</nav><!-- #site-navigation -->

<div id="main-wrapper" class="mm-page">

	<header id="masthead" class="site-header" role="banner">
		<a id="mobile-menu-button" href="#mobile-site-navigation">
			<span class="line line-1"></span>
			<span class="line line-2"></span>
			<span class="line line-3"></span>
		</a>
		<div class="header-wrapper">
			<center>
				<div class="main-graphic row">
					<div class="header-text top">
						<center>
							<span>USA Rugby</span>
							<span class="spacer"></span>
							<span>Medical</span>
							<span class="spacer"></span>
							<span>Symposium</span>
						</center>
					</div>
					<img src="/usarmedsymposium/wp-content/images/usar-shield-header.png" />
					<div class="header-text bottom">
						<center>
							<span class="top-line">Monte Carlo</span><span class="dot">&nbsp;•&nbsp;</span><span class="second-line">Las Vegas</span><span class="dot">&nbsp;•&nbsp;</span><span class="third-line">Feb. 12-13</span>
						</center>
					</div>
				</div>
			</center>
		</div>
		<img class="headerBG" data-interchange="[/usarmedsymposium/wp-content/images/monte-carlo-vegas-320.jpg, (only screen and (min-width: 1px))],
							   [/usarmedsymposium/wp-content/images/monte-carlo-vegas-480.jpg, (only screen and (min-width: 480px))],
							   [/usarmedsymposium/wp-content/images/monte-carlo-vegas-640.jpg, (only screen and (min-width: 640px))],
							   [/usarmedsymposium/wp-content/images/monte-carlo-vegas-768.jpg, (only screen and (min-width: 768px))],
							   [/usarmedsymposium/wp-content/images/monte-carlo-vegas-1024.jpg, only screen and (min-width: 1024px))],
							   [/usarmedsymposium/wp-content/images/monte-carlo-vegas-1280.jpg, (only screen and (min-width: 1280px))],
							   [/usarmedsymposium/wp-content/images/monte-carlo-vegas-1440.jpg, (only screen and (min-width: 1440px))],
							   [/usarmedsymposium/wp-content/images/monte-carlo-vegas-1600.jpg, (only screen and (min-width: 1600px))],
							   [/usarmedsymposium/wp-content/images/monte-carlo-vegas-1920.jpg, (only screen and (min-width: 1920px))]">
	</header>

	<div id="main-content-wrapper" class="row">

		<div class="content-wrapper columns small-12 medium-9 large-9">

			<div id="content" class="site-content ">
