<?php
/*
Plugin Name: Link Images to None
Plugin URI: http://wordpress.org/plugins/link-images-to-none/
Description: Automatically Link images to none in selecting and uploading images in Wordpress
Author: Farzad Setoode
Version: 1.0
License: GPLv2
*/

function link_images_to_none() {

	$image_set = get_option( 'image_default_link_type' );

		if ($image_set !== 'none') {

		update_option('image_default_link_type', 'none');
		
}

}

add_action('admin_init', 'link_images_to_none', 10);