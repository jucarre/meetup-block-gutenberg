<?php
/**
 * Plugin Name: Meetup Block Gutenberg
 * Plugin URI:
 * Description: A simple block ACF Gutenberg for WordPress Meetup Nice
 * Version: 1.0.0
 * Author: Julien Carré & Christophe Gibelli
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

//require_once plugin_dir_path(__FILE__) . 'block-1/dev.php';

register_activation_hook(__FILE__, 'child_plugin_activate');

function child_plugin_activate()
{
    if (!is_plugin_active('advanced-custom-fields-pro/acf.php') && current_user_can('activate_plugins')) {
        // Stop activation redirect and show error
        wp_die(
            'Sorry, but this plugin requires ACF Pro Plugin to be installed and active.<br>
            <br><a href="' . admin_url('plugins.php') . '">&laquo; Return to Plugins</a>');
    }

}

// Import ACF Block 1
require_once plugin_dir_path(__FILE__) . 'block-1/block-1.php';