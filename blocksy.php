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


load_plugin_textdomain(
	'blocksy',
	false,
	dirname( dirname( \plugin_basename( __FILE__ ) ) ) . '/languages/'
);


