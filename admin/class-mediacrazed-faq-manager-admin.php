<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://www.mediacrazed.com
 * @since      1.0.0
 *
 * @package    Mediacrazed_Testimonial_Manager
 * @subpackage Mediacrazed_Testimonial_Manager/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Mediacrazed_Testimonial_Manager
 * @subpackage Mediacrazed_Testimonial_Manager/admin
 * @author     MediaCrazed <jared@mediacrazed.com>
 */
class Mediacrazed_Testimonial_Manager_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the Testimonial Custom Post Type for the admin area.
	 *
	 * @since    1.0.0
	 */

	// Register Custom Post Type
	public function mc_testimonial_custom_post_type() {

		if ( ! function_exists('mc_testimonial_custom_post_type') ) {

			$labels = array(
				'name'                  => _x( 'Testimonials', 'Post Type General Name', 'text_domain' ),
				'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'text_domain' ),
				'menu_name'             => __( 'Testimonials', 'text_domain' ),
				'name_admin_bar'        => __( 'Testimonial', 'text_domain' ),
				'archives'              => __( 'Testimonial Archives', 'text_domain' ),
				'parent_item_colon'     => __( 'Parent Testimonial:', 'text_domain' ),
				'all_items'             => __( 'All Testimonials', 'text_domain' ),
				'add_new_item'          => __( 'Add New Testimonial', 'text_domain' ),
				'add_new'               => __( 'Add New', 'text_domain' ),
				'new_item'              => __( 'New Testimonial', 'text_domain' ),
				'edit_item'             => __( 'Edit Testimonial', 'text_domain' ),
				'update_item'           => __( 'Update Testimonial', 'text_domain' ),
				'view_item'             => __( 'View Testimonial', 'text_domain' ),
				'search_items'          => __( 'Search Testimonial', 'text_domain' ),
				'not_found'             => __( 'Not found', 'text_domain' ),
				'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
				'featured_image'        => __( 'Featured Image', 'text_domain' ),
				'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
				'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
				'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
				'insert_into_item'      => __( 'Insert into Testimonial', 'text_domain' ),
				'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'text_domain' ),
				'items_list'            => __( 'Testimonials list', 'text_domain' ),
				'items_list_navigation' => __( 'Testimonials list navigation', 'text_domain' ),
				'filter_items_list'     => __( 'Filter Testimonials list', 'text_domain' ),
			);
			$rewrite = array(
				'slug'                  => 'testimonial',
				'with_front'            => true,
				'pages'                 => true,
				'feeds'                 => true,
			);
			$args = array(
				'label'                 => __( 'Testimonial', 'text_domain' ),
				'description'           => __( 'Testimonial Manager from MediaCrazed', 'text_domain' ),
				'labels'                => $labels,
				'supports'              => array( 'title', 'editor', 'page-attributes', 'genesis-cpt-archives-settings' ),
				'taxonomies'            => array( 'category', 'post_tag' ),
				'hierarchical'          => false,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 5,
				'menu_icon'             => 'dashicons-editor-help',
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => 'testimonials',
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'rewrite'               => $rewrite,
				'capability_type'       => 'post',
			);
			register_post_type( 'mc_testimonial_post_type', $args );

		}
		add_action( 'init', 'mc_testimonial_custom_post_type' );

	}
	
}
