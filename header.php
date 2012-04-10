<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() ){
		//TODO: put refresh to main site with post's hashed url # 
	}
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<?php wp_nav_menu( array( 'container_class' => 'wpNavMenu', 'theme_location' => 'primary' ) ); ?>
<div id="wrapper" class="hfeed">

	<header>
		<h1 id="wpSiteName"><?php bloginfo( 'name' ); ?></h1>
		<h2 id="wpSiteDescription"><?php bloginfo( 'description' ); ?></h2>
	</header>

	<div id="main">
	
	
	
	
	
