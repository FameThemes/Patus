<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Patus
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'patus' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="site-branding">
				<?php if ( get_header_image() ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
				</a>
				<?php endif; // End header image check. ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="container">
				<button class="menu-toggle"><span class="genericon genericon-menu"></span></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				<ul class="nav-social">
					<?php if ( get_theme_mod('ft_social_rss') != '' ) { echo '<li><a href="'. esc_url( get_theme_mod('ft_social_rss') ) .'"><span class="genericon genericon-feed"></span></a></li>'; } ?>
					<?php if ( get_theme_mod('ft_social_email') != '' ) { echo '<li><a href="mailto:'. antispambot( get_theme_mod('ft_social_email') ) .'"><span class="genericon genericon-mail"></span></a></li>'; } ?>
					<?php if ( get_theme_mod('ft_social_twitter') != '' ) { echo '<li><a href="'. esc_url( get_theme_mod('ft_social_twitter') ) .'"><span class="genericon genericon-twitter"></span></a></li>'; } ?>
					<?php if ( get_theme_mod('ft_social_facebook') != '' ) { echo '<li><a href="'. esc_url( get_theme_mod('ft_social_facebook') ) .'"><span class="genericon genericon-facebook-alt"></span></a></li>'; } ?>
					<?php if ( get_theme_mod('ft_social_google') != '' ) { echo '<li><a href="'. esc_url( get_theme_mod('ft_social_google') ) .'"><span class="genericon genericon-googleplus-alt"></span></a></li>'; } ?>
				</ul>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
