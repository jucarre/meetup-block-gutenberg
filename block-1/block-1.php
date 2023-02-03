<?php

function block_1_init()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name' => 'block-1',
            'title' => __('Block 1'),
            'description' => __('A custom testimonial block 1.'),
            'render_template' => plugin_dir_path(__FILE__) . '/block-1-view.php',
            'enqueue_style' => plugin_dir_path(__FILE__) . '/block-1.css',
            'category' => 'formatting',
            'icon' => 'admin-comments',
        ));
    }
}
add_action('acf/init', 'block_1_init');