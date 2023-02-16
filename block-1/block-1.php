<?php
/**
 * Documentation : https://www.advancedcustomfields.com/resources/acf_register_block_type/
 * Tuto exemple : https://capitainewp.io/formations/acf/blocs-acf-gutenberg/
 */

function block_1_init() {
	// Vérifie si la fonction acf_register_block_type existe.
	if ( function_exists( 'acf_register_block_type' ) ) {

		/**
		 * Déclare le block acf Block 1 ci-dessous.
		 * - name : nom du block
		 * - title : titre du block
		 * - description : description du block
		 * - category  https://wordpress.org/gutenberg/handbook/designers-developers/developers/block-api/block-registration/#category
		 * - icon  https://developer.wordpress.org/resource/dashicons/#welcome-widgets-menus
		 * - render_template : chemin vers le fichier php qui contient le rendu du block
		 * - enqueue_assets : fonction qui permet d'enregistrer des scripts et styles liés au block
		 */

		acf_register_block_type( array(
			'name'            => 'block-1',
			'title'           => __( 'Block 1' ),
			'description'     => __( 'A custom testimonial block 1.' ),
			'category'        => 'text',
			'icon'            => 'welcome-widgets-menus',
			'render_template' => plugin_dir_path( __FILE__ ) . 'block-1-view.php',
			'enqueue_assets'  => function () {
				wp_enqueue_style(
					'meetup-block-gutenberg',
					plugin_dir_url( __FILE__ ) . 'block-1.css',
				);
			},
		) );
	}
}

add_action( 'acf/init', 'block_1_init' );