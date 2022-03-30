<?php

/**
 * Registers the `artist` taxonomy,
 * for use with 'album'.
 */
function artist_init() {
	register_taxonomy( 'artist', [ 'album' ], [
		'hierarchical'          => false,
		'public'                => true,
		'show_in_nav_menus'     => true,
		'show_ui'               => true,
		'show_admin_column'     => false,
		'query_var'             => true,
		'rewrite'               => true,
		'capabilities'          => [
			'manage_terms' => 'edit_posts',
			'edit_terms'   => 'edit_posts',
			'delete_terms' => 'edit_posts',
			'assign_terms' => 'edit_posts',
		],
		'labels'                => [
			'name'                       => __( 'Artists', 'sage' ),
			'singular_name'              => _x( 'Artist', 'taxonomy general name', 'sage' ),
			'search_items'               => __( 'Search Artists', 'sage' ),
			'popular_items'              => __( 'Popular Artists', 'sage' ),
			'all_items'                  => __( 'All Artists', 'sage' ),
			'parent_item'                => __( 'Parent Artist', 'sage' ),
			'parent_item_colon'          => __( 'Parent Artist:', 'sage' ),
			'edit_item'                  => __( 'Edit Artist', 'sage' ),
			'update_item'                => __( 'Update Artist', 'sage' ),
			'view_item'                  => __( 'View Artist', 'sage' ),
			'add_new_item'               => __( 'Add New Artist', 'sage' ),
			'new_item_name'              => __( 'New Artist', 'sage' ),
			'separate_items_with_commas' => __( 'Separate artists with commas', 'sage' ),
			'add_or_remove_items'        => __( 'Add or remove artists', 'sage' ),
			'choose_from_most_used'      => __( 'Choose from the most used artists', 'sage' ),
			'not_found'                  => __( 'No artists found.', 'sage' ),
			'no_terms'                   => __( 'No artists', 'sage' ),
			'menu_name'                  => __( 'Artists', 'sage' ),
			'items_list_navigation'      => __( 'Artists list navigation', 'sage' ),
			'items_list'                 => __( 'Artists list', 'sage' ),
			'most_used'                  => _x( 'Most Used', 'artist', 'sage' ),
			'back_to_items'              => __( '&larr; Back to Artists', 'sage' ),
		],
		'show_in_rest'          => true,
		'rest_base'             => 'artist',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	] );

}

add_action( 'init', 'artist_init' );

/**
 * Sets the post updated messages for the `artist` taxonomy.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `artist` taxonomy.
 */
function artist_updated_messages( $messages ) {

	$messages['artist'] = [
		0 => '', // Unused. Messages start at index 1.
		1 => __( 'Artist added.', 'sage' ),
		2 => __( 'Artist deleted.', 'sage' ),
		3 => __( 'Artist updated.', 'sage' ),
		4 => __( 'Artist not added.', 'sage' ),
		5 => __( 'Artist not updated.', 'sage' ),
		6 => __( 'Artists deleted.', 'sage' ),
	];

	return $messages;
}

add_filter( 'term_updated_messages', 'artist_updated_messages' );
