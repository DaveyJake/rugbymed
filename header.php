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

<script src="//use.typekit.net/dob8irt.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<script type="text/javascript">
$(document).ready(function(){
	$('#site-navigation').mmenu();
});
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="masthead" class="site-header" role="banner">
	<div class="header-wrapper">
		<center>
			<div class="main-graphic row">
				<div class="header-text left">
					<div class="top-line">USA Rugby</div>
					<div class="second-block">Medical</div>
					<div class="third-block">Symposium</div>
				</div>
				<img src="/usarmedsymposium/wp-content/images/usar-shield-header.png" />
				<div class="header-text right">
					<div class="top-line">Monte Carlo</div>
					<div class="second-block">Las Vegas</div>
					<div class="third-block">Feb. 12-13</div>
				</div>
			</div>
		</center>
	</div>
</header>

<div id="main-wrapper" class="row">

	<div id="sidebar-wrapper" class="columns small-12 medium-3 large-3">	

		<div id="main-sidebar">

			<a id="mobile-menu-button" href="#site-navigation"><i class="fa fa-bars"></i></a>

			<nav id="site-navigation" class="main-navigation" role="navigation">

			<?php if ( ! dynamic_sidebar( 'main-sidebar' ) ) : ?>

				<?php wp_nav_menu( array( 'theme_location' => 'main-sidebar' ) ); ?>

			<?php endif; ?>

			</nav><!-- #site-navigation -->

		</div>

	</div>

	<div class="content-wrapper columns small-12 medium-9 large-9">

		<div id="content" class="site-content ">
