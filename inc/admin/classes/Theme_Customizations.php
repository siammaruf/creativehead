<?php
namespace CH\Admin;
use CH\Admin\Customizations\CH_Header;
use CH\Admin\Customizations\CH_Logo_Area;
use CH\Admin\Customizations\CH_Sidebar;
use CH\Admin\Customizations\CH_Social;

if (!defined('ABSPATH')) {
	die('You are not authorized to view this page.');
}

class Theme_Customizations {
	/**
	 * Admin Theme Customization Construct
	 */
	public function __construct() {
		add_action( 'customize_register', [$this,'ch_customize_register'] );
	}

	/**
	 * @param $wp_customize
	 */
	public function ch_customize_register( $wp_customize ) {
		new CH_Logo_Area($wp_customize);
		$this->ch_add_header_tel($wp_customize);
	}

	public function ch_add_header_tel($customize){
		// Create custom panel.
		$customize->add_panel( 'ch_text_blocks', array(
			'priority'       => 500,
			'theme_supports' => '',
			'title'          => __( 'Header Blocks', 'creativeHead' ),
			'description'    => __( 'Set editable blocks for certain content.', 'creativeHead' ),
		) );

		// Add Theme Options
		new CH_Header($customize,'ch_text_blocks');
		new CH_Sidebar($customize,'ch_text_blocks');
		new CH_Social($customize,'ch_text_blocks');
	}
}

new Theme_Customizations();