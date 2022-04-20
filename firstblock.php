<?php

/**
 * Plugin Name: First Block
 * Plugin URI:
 * Description: This is my first block.
 * Version: 1.0.0
 * Author: Carlos Fortes
 * Author URI:
 * License: GPLv2+
 * Text Domain: first-block
 * Domain Path: /languages
 */


function cdfortes_firstblock_init() {
    register_block_type_from_metadata( __DIR__ );
}

add_action( "init", "cdfortes_firstblock_init" );