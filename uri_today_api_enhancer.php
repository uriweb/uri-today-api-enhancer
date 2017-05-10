<?php
/*
Plugin Name: URI Today API Enhancer
Plugin URI: http://www.uri.edu
Description: Add custom and meta fields to the WordPress API
Version: 1.0
Author: URI Web Communications
Author URI: 
@author: John Pennypacker <jpennypacker@uri.edu>
*/


function uri_today_api_enhancer_create_api_posts_meta_field() {
	register_rest_field( 'post', 'post_meta_fields', array(
		'get_callback'    => 'uri_today_api_enhancer_get_post_meta_for_api',
		'schema'          => null,
		)
	);
}
add_action( 'rest_api_init', 'uri_today_api_enhancer_create_api_posts_meta_field', 10, 3 );


function uri_today_api_enhancer_get_post_meta_for_api( $object ) {
	//return the post meta
	return get_post_meta( $object['id'] );
}

