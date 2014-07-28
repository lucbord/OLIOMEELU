<?php
        /* Registro la Royal */
        register_new_royalslider_files(1);
         
        if ( function_exists( 'add_theme_support' ) )

            add_editor_style    ( 'editor-style.css' );
            add_theme_support   ( 'automatic-feed-links' );
            add_theme_support   ( 'menus' );
            add_theme_support   ( 'post-thumbnails' );

            set_post_thumbnail_size( 374, 280);
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

        /* Cambio il menu di wordpress da Articolo a Prodotto */
        function revcon_change_post_label() {
            global $menu;
            global $submenu;
            $menu[5][0] = 'Prodotti';
            $submenu['edit.php'][5][0] = 'Prodotti';
            $submenu['edit.php'][10][0] = 'Nuova Prodotto';
            echo '';
        }
        function revcon_change_post_object() {
            global $wp_post_types;
            $labels = &$wp_post_types['post']->labels;
            $labels->name = 'Prodotto';
            $labels->singular_name = 'Prodotto';
            $labels->add_new = 'Nuova Prodotto';
            $labels->add_new_item = 'Nuova Prodotto';
            $labels->edit_item = 'Modifica Prodotto';
            $labels->new_item = 'Prodotto';
            $labels->view_item = 'Visualizza Prodotto';
            $labels->search_items = 'Ricerca Prodotto';
            $labels->not_found = 'Nessuna Prodotto trovata';
            $labels->not_found_in_trash = 'Nessun Prodotto trovato nel cestino';
            $labels->all_items = 'Tutte i Prodotti';
            $labels->menu_name = 'Prodotto';
            $labels->name_admin_bar = 'Prodotto';
        }

        add_action( 'admin_menu', 'revcon_change_post_label' );
        add_action( 'init', 'revcon_change_post_object' );
?>