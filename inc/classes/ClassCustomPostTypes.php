<?php
namespace CH\OPTIONS;
if (!defined('ABSPATH')) {
	die('You are not authorized to view the page.');
}
class ClassCustomPostTypes {
	public function __construct() {
		add_action( 'init', array($this,'post_portfolio_init') );
		add_action( 'init', array($this,'portfolio_category') );
	}

	function post_portfolio_init()
	{
		$args = $this->generate_args_for_post_type(
			'My Work',
			'My Works',
			'dashicons-images-alt',
			array( 'slug' => 'portfolio' ),
			array( 'title', 'editor', 'author', 'thumbnail' )
		);
		register_post_type( 'portfolio', $args );
	}

	public function portfolio_category() {
		$args = array(
			'labels'                     => $this->get_tax_labels('Category', 'Categories'),
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'show_in_rest'               => true,
		);
		register_taxonomy( 'portfolio_category', array( 'portfolio' ), $args );
	}

	public function generate_args_for_post_type(
		$single_name, $plural_name, string $icon = '', array $rewrite = [], array $support = [], array $taxonomies = []
	): array {
		$labels = array(
			'name'                  => _x( $plural_name, 'Post type general name', 'creativeHead' ),
			'singular_name'         => _x( $single_name, 'Post type singular name', 'creativeHead' ),
			'menu_name'             => _x( $plural_name, 'Admin Menu text', 'creativeHead' ),
			'name_admin_bar'        => _x( $single_name, 'Add New on Toolbar', 'creativeHead' ),
			'add_new'               => __( 'Add New', 'creativeHead' ),
			'add_new_item'          => __( 'Add New ' . $single_name, 'creativeHead' ),
			'new_item'              => __( 'New ' . $single_name, 'creativeHead' ),
			'edit_item'             => __( 'Edit '. $single_name, 'creativeHead' ),
			'view_item'             => __( 'View '. $single_name, 'creativeHead' ),
			'all_items'             => __( 'All '.$plural_name, 'creativeHead' ),
			'search_items'          => __( 'Search '.$plural_name, 'creativeHead' ),
			'parent_item_colon'     => __( 'Parent '.$plural_name.':', 'creativeHead' ),
			'not_found'             => __( 'No '.$plural_name.' found.', 'creativeHead' ),
			'not_found_in_trash'    => __( 'No '.$plural_name.' found in Trash.', 'creativeHead' ),
		);
		$args = array(
			'labels'             => $labels,
			'description'        => $single_name . ' custom post type.',
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => $rewrite,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 20,
			'show_in_rest'       => true
		);

		if( !empty( $icon ) ){
			$args['menu_icon'] = $icon;
		}
		if( !empty($support) ) {
			$args['supports'] = $support;
		}
		if( !empty($taxonomies) ) {
			$args['taxonomies'] = $taxonomies;
		}

		return $args;
	}

	public function get_tax_labels( $single, $plural): array {
		return array(
			'name'                       => _x( $plural, 'Taxonomy General Name', 'm4h' ),
			'singular_name'              => _x( $single, 'Taxonomy Singular Name', 'm4h' ),
			'menu_name'                  => __( $plural, 'm4h' ),
			'all_items'                  => __( 'All '.$plural, 'm4h' ),
			'parent_item'                => __( 'Parent '.$single, 'm4h' ),
			'parent_item_colon'          => __( 'Parent '.$single.':', 'm4h' ),
			'new_item_name'              => __( 'New '.$single.' Name', 'm4h' ),
			'add_new_item'               => __( 'Add New '.$single, 'm4h' ),
			'edit_item'                  => __( 'Edit '.$single, 'm4h' ),
			'update_item'                => __( 'Update '.$single, 'm4h' ),
			'view_item'                  => __( 'View '.$single, 'm4h' ),
			'separate_items_with_commas' => __( 'Separate '.$plural.' with commas', 'm4h' ),
			'add_or_remove_items'        => __( 'Add or remove '.$plural, 'm4h' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'm4h' ),
			'popular_items'              => __( 'Popular '.$plural, 'm4h' ),
			'search_items'               => __( 'Search '.$plural, 'm4h' ),
			'not_found'                  => __( 'Not Found', 'm4h' ),
			'no_terms'                   => __( 'No '.$plural, 'm4h' ),
			'items_list'                 => __( $plural.' list', 'm4h' ),
			'items_list_navigation'      => __( $plural.' list navigation', 'm4h' ),
		);
	}

}
new ClassCustomPostTypes();