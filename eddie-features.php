<?php
/**
 * 
 * Eddie Features Plugin
 * 
 * @package eddie-features
 * @author Edward Osei-Nyarko <edward.osei.nyarko@gmail.com>
 * 
 * Plugin Name:       Eddie Featues
 * Plugin URI:        https://github.com/nana-yaw/eddie-features
 * Description:       Adds Gutenberg Blocks.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Edward Osei-Nyarko
 * Author URI:        https://www.linkedin.com/in/edward-osei-nyarko-5789b3118/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       eddie-features
 * Domain Path:       /languages
 */

 /**
 * Bootstrap the plugin.
 */
require_once 'vendor/autoload.php';

use EddieFeatures\Plugin;

if ( class_exists( 'EddieFeatures\Plugin' ) ) {
	$the_plugin = new Plugin();
}

register_activation_hook( __FILE__, [ $the_plugin, 'activate' ] );

register_deactivation_hook( __FILE__, [ $the_plugin, 'deactivate' ] );