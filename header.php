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
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        
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

	<div>
            <a class=" logo" href="<?php echo get_option('home'); ?>"></a>
	</div>
    
        <div>
            <p class="motto"><?php bloginfo('description'); ?></p>
	</div>
        <div class="clear"></div>
    
        <!-- NAVIGATION -->
        <div class="row">
            <section id="navigation" class="twelve columns">

                <nav id="nav-wrap">

                <?php wp_nav_menu( array( 

                        'theme_location' 	=> 'primary-menu',
                        'menu'            	=> 'main',
                        'container'      	=> 'false', 
                        'menu_class'            => 'navi',
                        'items_wrap'            => '<ul id="topnav" class="sf-menu" >%3$s</ul>',
                        'before'          	=> '<span></span>'

                ) ); ?>
                </nav><!-- nav -->	

            </section>  
        </div>
</header>

  <!-- Add the extra clearfix for only the required viewport -->
  <div class="clearfix"></div>