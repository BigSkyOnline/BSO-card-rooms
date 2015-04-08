<?php

/**
 * Plugin Name: BSO Card Rooms
 * Plugin URI: http://lasvegastoppicks.com/
 * Description: BSO Card Rooms
 * Author: Bradford Knowlton
 * Author URI: http://bradknowlton.com
 * License: GPL2
 * Version: 1.09.5
 * GitHub Plugin URI: https://github.com/BigSkyOnline/BSO-card-rooms
 * GitHub Branch: master
 */
 
     add_action( 'init', 'register_cpt_card_room' );
     
    function register_cpt_card_room() {
	    $labels = array(
	    'name' => _x( 'Las Vegas Card Rooms', 'card-room' ),
	    'singular_name' => _x( 'card-room', 'card-room' ),
	    'add_new' => _x( 'Add New', 'card-room' ),
	    'add_new_item' => _x( 'Add New card room', 'card-room' ),
	    'edit_item' => _x( 'Edit card room', 'card-room' ),
	    'new_item' => _x( 'New card room', 'card-room' ),
	    'view_item' => _x( 'View card room', 'card-room' ),
	    'search_items' => _x( 'Search Card Rooms', 'card-room' ),
	    'not_found' => _x( 'No Card Rooms found', 'card-room' ),
	    'not_found_in_trash' => _x( 'No Card Rooms found in Trash', 'card-room' ),
	    'parent_item_colon' => _x( 'Parent card room:', 'card-room' ),
	    'menu_name' => _x( 'Card Rooms', 'card-room' ),
	    );
	    $args = array(
	    'labels' => $labels,
	    'hierarchical' => true,
	    'supports' => array( 'title', 'editor' ),
	    'public' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'show_in_nav_menus' => true,
	    'publicly_queryable' => true,
	    'exclude_from_search' => false,
	    'has_archive' => true,
	    'query_var' => true,
	    'can_export' => true,
	    'rewrite' => true,
	   // 'menu_icon' => 'dashicons-video-alt',
	    'capability_type' => 'page'
	    );

	    register_post_type( 'card-room', $args );
    } 

