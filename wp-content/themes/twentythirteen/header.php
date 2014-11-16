<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<div class="row home-link">
				<div class="col-md-6 col-xs-12" style="padding-left:0;">
			<a  href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
<!--				<h1 class="site-title"><?php //bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php //bloginfo( 'description' ); ?></h2>-->
				<img src="<?php echo get_site_url() . '/wp-content/uploads/2014/05/pearlpureness-logo.png'; ?>" alt="pearlpureness logo" />
			</a>
				</div>
				<div class="col-md-6 col-xs-12" style="text-align:right">
					<div id="wpmenucartl"></div>
					<ul class="toplink">
						<li><a href="<?php echo get_site_url() . '/products-page/your-account/' ?>"><i class="icon-user"></i> <span class="text">My Account</span></a></li>
						<li><a href="<?php echo get_site_url() . '/products-page/transaction-results/' ?>"><i class="icon-book"></i> <span class="text">Transaction Results</span></a></li>
						<li><a href="<?php echo get_site_url() . '/products-page/checkout/' ?>"><i class="icon-shopping-cart"></i> <span class="text">Checkout</span></a></li>
					</ul>
					<table class="table usp" style="margin-bottom: 0px; border:0">
					    <tr>
						<td class="icon"><i class="icon-truck icon-2x"></i></td>
						<td>FREE SHIPPING<br/>OVER $100</td>
						<td class="icon"><i class="icon-calendar icon-2x"></i></td>
						<td>FREE RETURN<br/>30 DAYS</td>
						<td class="icon"><i class="icon-time icon-2x"></i></td>
						<td>3 DAYS<br/>DELIVERY</td>
					    </tr>
					</table>

				</div>
			</div>

			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
