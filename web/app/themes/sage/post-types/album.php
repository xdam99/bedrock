<?php

/**
 * Registers the `album` post type.
 */
function album_init() {
	register_post_type(
		'album',
		[
			'labels'                => [
				'name'                  => __( 'Albums', 'sage' ),
				'singular_name'         => __( 'Album', 'sage' ),
				'all_items'             => __( 'All Albums', 'sage' ),
				'archives'              => __( 'Album Archives', 'sage' ),
				'attributes'            => __( 'Album Attributes', 'sage' ),
				'insert_into_item'      => __( 'Insert into album', 'sage' ),
				'uploaded_to_this_item' => __( 'Uploaded to this album', 'sage' ),
				'featured_image'        => _x( 'Featured Image', 'album', 'sage' ),
				'set_featured_image'    => _x( 'Set featured image', 'album', 'sage' ),
				'remove_featured_image' => _x( 'Remove featured image', 'album', 'sage' ),
				'use_featured_image'    => _x( 'Use as featured image', 'album', 'sage' ),
				'filter_items_list'     => __( 'Filter albums list', 'sage' ),
				'items_list_navigation' => __( 'Albums list navigation', 'sage' ),
				'items_list'            => __( 'Albums list', 'sage' ),
				'new_item'              => __( 'New Album', 'sage' ),
				'add_new'               => __( 'Add New', 'sage' ),
				'add_new_item'          => __( 'Add New Album', 'sage' ),
				'edit_item'             => __( 'Edit Album', 'sage' ),
				'view_item'             => __( 'View Album', 'sage' ),
				'view_items'            => __( 'View Albums', 'sage' ),
				'search_items'          => __( 'Search albums', 'sage' ),
				'not_found'             => __( 'No albums found', 'sage' ),
				'not_found_in_trash'    => __( 'No albums found in trash', 'sage' ),
				'parent_item_colon'     => __( 'Parent Album:', 'sage' ),
				'menu_name'             => __( 'Albums', 'sage' ),
			],
			'public'                => true,
			'hierarchical'          => false,
			'show_ui'               => true,
			'show_in_nav_menus'     => true,
			'supports'              => [ 'title', 'thumbnail' ],
			'has_archive'           => true,
			'rewrite'               => true,
			'query_var'             => true,
			'menu_position'         => null,
			'menu_icon'             => 'dashicons-admin-post',
			'show_in_rest'          => true,
			'rest_base'             => 'album',
			'rest_controller_class' => 'WP_REST_Posts_Controller',
		]
	);

}

add_action( 'init', 'album_init' );

/**
 * Sets the post updated messages for the `album` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `album` post type.
 */
function album_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['album'] = [
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Album updated. <a target="_blank" href="%s">View album</a>', 'sage' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'sage' ),
		3  => __( 'Custom field deleted.', 'sage' ),
		4  => __( 'Album updated.', 'sage' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Album restored to revision from %s', 'sage' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false, // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Album published. <a href="%s">View album</a>', 'sage' ), esc_url( $permalink ) ),
		7  => __( 'Album saved.', 'sage' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Album submitted. <a target="_blank" href="%s">Preview album</a>', 'sage' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'Album scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview album</a>', 'sage' ), date_i18n( __( 'M j, Y @ G:i', 'sage' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Album draft updated. <a target="_blank" href="%s">Preview album</a>', 'sage' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	];

	return $messages;
}

add_filter( 'post_updated_messages', 'album_updated_messages' );

/**
 * Sets the bulk post updated messages for the `album` post type.
 *
 * @param  array $bulk_messages Arrays of messages, each keyed by the corresponding post type. Messages are
 *                              keyed with 'updated', 'locked', 'deleted', 'trashed', and 'untrashed'.
 * @param  int[] $bulk_counts   Array of item counts for each message, used to build internationalized strings.
 * @return array Bulk messages for the `album` post type.
 */
function album_bulk_updated_messages( $bulk_messages, $bulk_counts ) {
	global $post;

	$bulk_messages['album'] = [
		/* translators: %s: Number of albums. */
		'updated'   => _n( '%s album updated.', '%s albums updated.', $bulk_counts['updated'], 'sage' ),
		'locked'    => ( 1 === $bulk_counts['locked'] ) ? __( '1 album not updated, somebody is editing it.', 'sage' ) :
						/* translators: %s: Number of albums. */
						_n( '%s album not updated, somebody is editing it.', '%s albums not updated, somebody is editing them.', $bulk_counts['locked'], 'sage' ),
		/* translators: %s: Number of albums. */
		'deleted'   => _n( '%s album permanently deleted.', '%s albums permanently deleted.', $bulk_counts['deleted'], 'sage' ),
		/* translators: %s: Number of albums. */
		'trashed'   => _n( '%s album moved to the Trash.', '%s albums moved to the Trash.', $bulk_counts['trashed'], 'sage' ),
		/* translators: %s: Number of albums. */
		'untrashed' => _n( '%s album restored from the Trash.', '%s albums restored from the Trash.', $bulk_counts['untrashed'], 'sage' ),
	];

	return $bulk_messages;
}

add_filter( 'bulk_post_updated_messages', 'album_bulk_updated_messages', 10, 2 );
