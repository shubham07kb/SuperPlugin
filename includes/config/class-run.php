<?php
/**
 * Run class
 *
 * @package SuperPlugin
 * @since   1.0.0
 */

namespace SuperPlugin\Includes\Config;

/**
 * Run class
 *
 * @package SuperPlugin
 * @since   1.0.0
 */
class Run {

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 */
	public function __construct( $json_input, $json_schema ) {

		// check json input.
		echo '<pre>';
		print_r( $json_input );
		echo '</pre>';
	}
}