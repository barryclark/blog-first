<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<!-- ADDED IN BY BAZZZZ -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />	

<link rel="shortcut icon" href="images/favicon.png" />
<link rel="apple-touch-icon" href="images/shortcut.png" />

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/basic.css" media="screen, handheld" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/mobile.css" media="only screen and (min-width: 320px) and (max-width: 640px)" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/desktop.css" media="only screen and (min-width: 640px)" />
<link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/default.js"></script>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>

	<div id="header">
		<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" />
	</div>

	<!--<h1>
		<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	</h1>-->
	<!--<p><?php bloginfo( 'description' ); ?></p>-->

	<div id="access" role="navigation">
	  <!--<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
		<a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a>-->
		<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
	</div><!-- #access -->