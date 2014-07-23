<?php

            if ( function_exists( 'add_theme_support' ) )
	  
		add_editor_style    ( 'editor-style.css' );
		add_theme_support   ( 'automatic-feed-links' );
		add_theme_support   ( 'menus' );
		add_theme_support   ( 'post-thumbnails' );

		add_image_size( 'shop', 200, 9999 );
                            add_image_size( 'food', 200, 200 );
                            

	if (function_exists('register_sidebar')) {

		register_sidebar(array(
			'name' => 'Sidebar Widgets',
			'id'   => 'sidebar-widgets',
			'description'   => 'Widget Area',
			'before_widget' => ' <div id="%1$s" class="widgetSidebar %2$s"> ',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>'
			));

            }

	function register_menu() {
		register_nav_menu('primary-menu', __('Primary Menu'));
	}
	
	add_action('init', 'register_menu');

?>