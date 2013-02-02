<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!-- Meta tags & browser stuff -->
<meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
<link rel="apple-touch-icon" href="images/shortcut.png" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?> — <?php bloginfo('description'); ?></title>

<!-- Make the HTML5 elements work in IE. -->
<!--[if IE]>
<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- WP Includes -->
<?php wp_head(); ?>

<!-- Google Analytics Tracking -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2530088-4']);
  _gaq.push(['_setDomainName', 'bazclark.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/basic.css" media="screen, handheld" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/mobile.css" media="only screen and (min-width: 320px) and (max-width: 640px)" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/desktop.css" media="only screen and (min-width: 640px)" />

<!-- JS -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>

<!-- Fonts -->

</head>

<body <?php body_class(); ?>>

	<div class="wrapper">
	    		
	<header>
	    <a class="logo" href="<?php echo home_url(); ?>/">
	    	<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" />
	    </a>
  			<?php /* I'LL NEED TO PUT THIS BACK IN LATER IN PLACE OF THE IMAGE
	      AS THE OPTION TO HAVE A TEXT HEADER bloginfo('name'); */?>
		
		<nav>
			<?php wp_nav_menu(array(
			    'sort_column' => 'menu_order',
			    'container_class' => 'menu-header',
			    'menu' => 'Header',
			    'container' => '',
			    'show_home' => 'Blog',
			    'exclude' => '1175, 1177, 3, 4',
			    'items_wrap' => '%3$s'
			)); ?>
		</nav>
	</header>
