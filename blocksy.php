<?php
/**
 * Plugin Name: Blocksy
 * Plugin URI: https://malayladu.com/
 * Description: Test plugin for Blocksy theme.
 * Version: 1.0
 * Author: Malay Ladu
 * Author URI: http://malayladu.com/
 * Text Domain: blocksy
 * Domain Path: /languages
 * License: GPL2
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

class Simple_Plugin {
	public function __construct() {
		add_action('admin_notices', [$this, 'display_admin_notice']);

		$strings = [
			__('Hello', 'blocksy'),
			__('World', 'blocksy'),
			__('How are you?', 'blocksy'),
		];

		load_plugin_textdomain(
			'blocksy',
			false,
			'/languages/'
		);
	}

	public function display_admin_notice() {
		echo '<div class="notice notice-success is-dismissible">';
		echo '<p>' . esc_html__('Hello! This is a simple plugin admin notice.', 'simple-plugin') . '</p>';
		echo '</div>';
	}
}

new Simple_Plugin();




