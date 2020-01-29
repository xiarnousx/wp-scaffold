<?php
/**
 * Registers new custom post types.
 *
 * @package Fictional University
 * @version 1.0.0
 * Plugin Name: Fictional University Custom Post Types
 * Description: Registers new custom post types.
 * Author: Ihab Arnous
 * Version: 1.0.0
 */

/**
 * The fu_post_types registers new post types.
 * Google register_post_types and checkout parameters
 *
 * @return void
 */
function fu_post_types() {
	register_post_type(
		'event',
		array(
			'public'      => true,
			'labels'      => array(
				'name'          => 'Events',
				'add_new_item'  => 'Add New Event',
				'edit_item'     => 'Edit Event',
				'all_items'     => 'All Events',
				'singular_name' => 'Event',
			),
			'menu_icon'   => 'dashicons-calendar',
			'has_archive' => true,
			'rewrite'     => array(
				'slug' => 'events',
			),
			'supports'    => array( 'title', 'editor', 'excerpt' ),
		)
	);

}

add_action( 'init', 'fu_post_types' );
