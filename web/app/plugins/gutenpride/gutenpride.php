<?php
/**
 * Plugin Name:       Gutenpride
 * Description:       Example static block scaffolded with Create Block tool.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gutenpride
 *
 * @package           create-block
 */

function ssr_block_render($attrs){
	$album = new WP_Query(array(
		'post_types' => 'album'
	));
	$data = array(
		'title' => $attrs['title'],
		'albums' => $albums
	);
	return view( __DIR__ . '/view/ssr-block/render.blade.php', $data)->render();
};


/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_gutenpride_block_init() {
	register_block_type( __DIR__ . '/build/blocTxt' );
	register_block_type( __DIR__ . '/build/txtBlack' );
	register_block_type( __DIR__ . '/build/giftCard' );
	register_block_type( __DIR__ . '/build/victory' );
};
add_action( 'init', 'create_block_gutenpride_block_init' );
