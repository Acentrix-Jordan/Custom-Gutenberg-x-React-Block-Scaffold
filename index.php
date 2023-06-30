<?php
/**
 * Plugin Name: Custom Block
 * Plugin URI:  https://acentrix.co.uk
 * Description: A custom block plugin for WordPress.
 * Version:     1.0.0
 * Author:      Jordan Wilson
 * Author URI:  https://acentrix.co.uk
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: acentrix-plugin-name
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Enqueue block editor assets
function custom_block_plugin_enqueue_assets() {
    wp_enqueue_script(
        'custom-block-script',                          // Handle
        plugins_url('build/index.js', __FILE__),        // Script file URL
        array('wp-blocks', 'wp-i18n', 'wp-element'),    // Dependencies
        '1.0.0',                                        // Version
        true                                            // Enqueue in footer
    );

    wp_enqueue_style(
        'custom-block-styles',                           // Handle
        plugins_url('build/index.css', __FILE__),        // Stylesheet file URL
        array('wp-edit-blocks'),                         // Dependencies
        '1.0.0'                                          // Version
    );
}
add_action('enqueue_block_editor_assets', 'custom_block_plugin_enqueue_assets');
