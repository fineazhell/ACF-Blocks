<?php 
/*
Plugin Name: Basic ACF Block
Plugin URI: http://localhost/trainingground/
Description: This is a how to create a simple acf block
Author: Ian
Version: 1.0
Author URI: 
*/

// Pet information
function pet_register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/pet-information/block.json' );
}
add_action( 'init', 'pet_register_acf_blocks' );

// Ajax training
function repeater_register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/repeater/block.json' );
}
add_action( 'init', 'repeater_register_acf_blocks' );
