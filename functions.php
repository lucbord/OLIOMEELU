<?php

/*-----------------------------------------------------------------------------------*/
/* CUSTOM POST TYPES
/*-----------------------------------------------------------------------------------*/

// Register Custom Post Type
function custom_post_type() {

    $labels = array(
        'name'                => _x( 'Food menus', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Food menu', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Food menu', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
        'all_items'           => __( 'All Items', 'text_domain' ),
        'view_item'           => __( 'View Item', 'text_domain' ),
        'add_new_item'        => __( 'Add New Item', 'text_domain' ),
        'add_new'             => __( 'Add New', 'text_domain' ),
        'edit_item'           => __( 'Edit Item', 'text_domain' ),
        'update_item'         => __( 'Update Item', 'text_domain' ),
        'search_items'        => __( 'Search Item', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );

    $args = array(
        'label'               => __( 'foodmenu', 'text_domain' ),
        'description'         => __( 'Menù del ristorante', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
        'taxonomies'          => array( 'tipologia' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'http://localhost/wordpress/wp-content/themes/CIUPIN/img/fork.png',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    register_post_type( 'foodmenu', $args );

}

// Register Custom Taxonomy
function custom_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Tipologia', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Tipologia', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Tipo piatto', 'text_domain' ),
        'all_items'                  => __( 'All Items', 'text_domain' ),
        'parent_item'                => __( 'Parent Item', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
        'new_item_name'              => __( 'New Item Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New Item', 'text_domain' ),
        'edit_item'                  => __( 'Edit Item', 'text_domain' ),
        'update_item'                => __( 'Update Item', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'search_items'               => __( 'Search Items', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used items', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false,
    );
    register_taxonomy( 'tipologia', array( 'foodmenu' ), $args );

}
// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );

// Hook into the 'init' action
add_action( 'init', 'custom_taxonomy', 0 );



/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

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