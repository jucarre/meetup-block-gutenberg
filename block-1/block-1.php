<?php

function block_1_init() {
	// Check function exists.
	if ( function_exists( 'acf_register_block_type' ) ) {

		// Register a testimonial block.
		acf_register_block_type( array(
			'name'            => 'block-1',
			'title'           => __( 'Block 1' ),
			'description'     => __( 'A custom testimonial block 1.' ),
			// category list https://wordpress.org/gutenberg/handbook/designers-developers/developers/block-api/block-registration/#category
			'category'        => 'text',
			// icon list https://developer.wordpress.org/resource/dashicons/#welcome-widgets-menus
			'icon'            => 'welcome-widgets-menus',
			'render_template' => plugin_dir_path( __FILE__ ) . 'block-1-view.php',
			'enqueue_assets'   => function () {
				wp_enqueue_style(
					'meetup-block-gutenberg',
					plugin_dir_url(__FILE__) . 'block-1.css',
				);
			},
		) );
	}
}

add_action( 'acf/init', 'block_1_init' );