<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.mediacrazed.com
 * @since      1.0.0
 *
 * @package    Mediacrazed_Testimonial_Manager
 * @subpackage Mediacrazed_Testimonial_Manager/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Mediacrazed_Testimonial_Manager
 * @subpackage Mediacrazed_Testimonial_Manager/includes
 * @author     MediaCrazed <jared@mediacrazed.com>
 */
class Mediacrazed_Testimonial_Manager_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'mediacrazed-testimonial-manager',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
