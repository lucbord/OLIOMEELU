<!DOCTYPE html>
<html>

	<head profile="http://gmpg.org/xfn/11">

	<!-- META 
	======================================================================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	 <!-- TITLE 
	  ======================================================================================= -->
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	 <!-- FONTS 
	======================================================================================= -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700,900,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
    <!-- CSS 
    ======================================================================================= -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

	<!-- JS 
	 ======================================================================================= -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/scripts.js" ></script>
 
	<!-- WPHEAD 
	======================================================================================= -->
	<?php wp_head(); ?>


</head>

<body>

<div class="container">

	<div id="page" class="hfeed row">

<header id="header" class="col-lg-12 col-xs-12">

	<div class="logo col-lg-4 col-md-4 col-sm-12 col-xs-12">
		<a href="<?php echo get_option('home'); ?>"><?php bloginfo('name');?></a>
	</div>

	<nav class="navbar navbar-inner col-lg-8 col-md-8 col-sm-12 col-xs-12" role="navigation">

	<?php wp_nav_menu( array( 

		'theme_location' 	=> 'primary-menu',
		'menu'            		=> 'main',
		'container'      		 => 'false', 
		'menu_class'	  	=> 'navi',
		'items_wrap' 		=> '<ul class="nav navbar-nav" >%3$s</ul>',
		'before'          		=> '<span></span>'

 	) ); ?>
</nav>

</header>

  <!-- Add the extra clearfix for only the required viewport -->
  <div class="clearfix"></div>