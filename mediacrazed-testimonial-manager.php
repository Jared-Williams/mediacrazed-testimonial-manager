<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.mediacrazed.com
 * @since             1.0.0
 * @package           Mediacrazed_Testimonial_Manager
 *
 * @wordpress-plugin
 * Plugin Name:       MediaCrazed Testimonial Manager
 * Plugin URI:        https://github.com/Jared-Williams/mediacrazed-testimonial-manager
 * Description:       Provides a simple Custom Post Type to manage Testimonials for clients. 
 * Version:           1.1.7
 * Author:            MediaCrazed
 * Author URI:        http://www.mediacrazed.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mediacrazed-testimonial-manager
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/Jared-Williams/mediacrazed-testimonial-manager
 * GitHub Branch:     master
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mediacrazed-testimonial-manager-activator.php
 */
function activate_mediacrazed_testimonial_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mediacrazed-testimonial-manager-activator.php';
	Mediacrazed_Testimonial_Manager_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mediacrazed-testimonial-manager-deactivator.php
 */
function deactivate_mediacrazed_testimonial_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mediacrazed-testimonial-manager-deactivator.php';
	Mediacrazed_Testimonial_Manager_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mediacrazed_testimonial_manager' );
register_deactivation_hook( __FILE__, 'deactivate_mediacrazed_testimonial_manager' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mediacrazed-testimonial-manager.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mediacrazed_testimonial_manager() {

	$plugin = new Mediacrazed_Testimonial_Manager();
	$plugin->run();

}
run_mediacrazed_testimonial_manager();
