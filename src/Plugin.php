<?php
/**
 * Plugin Class.
 *
 * @package eddie-features
 */

namespace EddieFeatures;

/**
 * Class Plugin.
 */
class Plugin {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->init();
	}

	/**
	 * Initialize plugin
	 */
	private function init() {
		define( 'EDDIE_FEATURES_PLUGIN_PATH', untrailingslashit( plugin_dir_path( __DIR__ ) ) );
		define( 'EDDIE_FEATURES_PLUGIN_URL', untrailingslashit( plugin_dir_url( __DIR__ ) ) );
		define( 'EDDIE_FEATURES_PLUGIN_BUILD_PATH', EDDIE_FEATURES_PLUGIN_PATH . '/assets/build' );
		define( 'EDDIE_FEATURES_PLUGIN_BUILD_URL', EDDIE_FEATURES_PLUGIN_URL . '/assets/build' );
		define( 'EDDIE_FEATURES_PLUGIN_VERSION', '1.0.0' );

		new Assets();
	}
}