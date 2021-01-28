<?php

add_action( 'wp_enqueue_scripts', 'custom_load_font_awesome' );
function custom_load_font_awesome() {
    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.2.0/css/all.css' );
}
/* Custom Post Types
--------------------------------------------- */
add_action( 'init', 'smtcode_team' );
function smtcode_team() {
	$labels = array(
		'name'               => __( 'Team' ),
		'singular_name'      => __( 'Team' ),
		'all_items'          => __( 'All Team' ),
		'add_new'            => _x( 'Add new Team', 'Team' ),
		'add_new_item'       => __( 'Add new Team' ),
		'edit_item'          => __( 'Edit Team' ),
		'new_item'           => __( 'New Team' ),
		'view_item'          => __( 'View Team' ),
		'search_items'       => __( 'Search in Team' ),
		'not_found'          => __( 'No Team found' ),
		'not_found_in_trash' => __( 'No Team found in trash' ),
		'parent_item_colon'  => ''
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'has_archive'        => false, // Set to false hides Archive Pages
		'menu_icon'          => 'dashicons-admin-users', //pick one here ~> https://developer.wordpress.org/resource/dashicons/
		'rewrite'            => array( 'slug' => 'team' ),
		'taxonomies'         => array( ),
		'query_var'          => true,
		'menu_position'      => 5,
		'capability_type'    => 'page',
    		'publicly_queryable' => false, // Set to false hides Single Pages
		'supports'           => array(  'thumbnail' , 'custom-fields', 'excerpt', 'comments', 'title', 'editor')
	);
	register_post_type( 'team', $args );
}
/* Taxonomies
--------------------------------------------- */
register_taxonomy( 'team-category', 'team',
	array(
		'labels' => array(
			'name'                       => _x( 'Team Categories', 'taxonomy general name' , 'genesis-base' ),
			'singular_name'              => _x( 'Team Category' , 'taxonomy singular name', 'genesis-base' ),
			'search_items'               => __( 'Search Team Categories'                   , 'genesis-base' ),
			'popular_items'              => __( 'Popular Team Categories'                  , 'genesis-base' ),
			'all_items'                  => __( 'All Team'                                , 'genesis-base' ),
			'edit_item'                  => __( 'Edit Team Category'                      , 'genesis-base' ),
			'update_item'                => __( 'Update Team Category'                    , 'genesis-base' ),
			'add_new_item'               => __( 'Add New Team Category'                   , 'genesis-base' ),
			'new_item_name'              => __( 'New Team Category Name'                  , 'genesis-base' ),
			'separate_items_with_commas' => __( 'Separate Team Categories with commas'     , 'genesis-base' ),
			'add_or_remove_items'        => __( 'Add or remove Team Categories'            , 'genesis-base' ),
			'choose_from_most_used'      => __( 'Choose from the most used Team Categories', 'genesis-base' ),
			'not_found'                  => __( 'No Team Categories found.'                , 'genesis-base' ),
			'menu_name'                  => __( 'Team Categories'                          , 'genesis-base' ),
			'parent_item'                => null,
			'parent_item_colon'          => null,
		),
		'exclude_from_search' => true,
		'has_archive'         => true,
		'hierarchical'        => true,
		'rewrite'             => array( 'slug' => _x( 'team-type', 'team-type slug' , 'genesis-team-pro' ), 'with_front' => false ),
		'show_ui'             => true,
		'show_tagcloud'       => false,
	)
);

/* Register Widgets
--------------------------------------------- */
genesis_register_sidebar( array(
    'id' => 'custom-widget',
    'name' => __( 'Custom Widget', 'genesis' ),
    'description' => __( 'Custom Widget Area', 'childtheme' ),
) );

// Call:
// genesis_widget_area( 'custom-widget', array(
//     'before' => '<div class="custom-widget widget-area">',
//     'after'  => '</div>',
// ) );

