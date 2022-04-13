<?php
namespace CH\Admin\Customizations;
if (!defined('ABSPATH')) {
	die('You are not authorized to view this page.');
}
class CH_Sidebar {
	public function __construct($wp_customize, $block) {
		$this->ch_sidebar_options($wp_customize,$block);
	}

	public function ch_sidebar_options($customize,$block){
		// Add section.
		$customize->add_section( 'custom_sidebar_options' , array(
			'title'    => __('Change Sidebar Options','creativeHead'),
			'panel'    => $block,
			'priority' => 10
		) );
		$this->ch_add_sidebar_about_company($customize,'custom_sidebar_options');
		$this->ch_add_sidebar_address($customize,'custom_sidebar_options');
		$this->ch_add_sidebar_email($customize,'custom_sidebar_options');
		$this->ch_add_sidebar_mobile($customize,'custom_sidebar_options');
	}

	public function ch_add_sidebar_about_company($customize,$section){
		// Add setting
		$customize->add_setting( 'ch_sidebar_about_company', array(
			'default'           => __( '', 'creativeHead' ),
			'sanitize_callback' => [$this,'sanitize_text']
		) );

		// Add control
		$customize->add_control( new \WP_Customize_Control(
				$customize,
				'ch_sidebar_about_company',
				array(
					'label'    => __( 'About Creative Head (Sidebar)', 'creativeHead' ),
					'section'  => $section,
					'settings' => 'ch_sidebar_about_company',
					'type'     => 'textarea'
				)
			)
		);
	}

	public function ch_add_sidebar_address($customize,$section){
		// Add setting
		$customize->add_setting( 'ch_sidebar_address', array(
			'default'           => __( '', 'creativeHead' ),
			'sanitize_callback' => [$this,'sanitize_text']
		) );

		// Add control
		$customize->add_control( new \WP_Customize_Control(
				$customize,
				'ch_sidebar_address',
				array(
					'label'    => __( 'Office Address (Sidebar)', 'creativeHead' ),
					'section'  => $section,
					'settings' => 'ch_sidebar_address',
					'type'     => 'textarea'
				)
			)
		);
	}

	public function ch_add_sidebar_email($customize,$section){
		// Add setting
		$customize->add_setting( 'ch_sidebar_email', array(
			'default'           => __( '', 'creativeHead' ),
			'sanitize_callback' => [$this,'sanitize_text']
		) );

		// Add control
		$customize->add_control( new \WP_Customize_Control(
				$customize,
				'ch_sidebar_email',
				array(
					'label'    => __( 'Office Contact Email', 'creativeHead' ),
					'section'  => $section,
					'settings' => 'ch_sidebar_email',
					'type'     => 'email'
				)
			)
		);
	}

	public function ch_add_sidebar_mobile($customize,$section){
		// Add setting
		$customize->add_setting( 'ch_sidebar_mobile', array(
			'default'           => __( '+000 0000 0000', 'creativeHead' ),
			'sanitize_callback' => [$this,'sanitize_text']
		) );

		// Add control
		$customize->add_control( new \WP_Customize_Control(
				$customize,
				'ch_sidebar_mobile',
				array(
					'label'    => __( 'Office Contact Mobile', 'creativeHead' ),
					'section'  => $section,
					'settings' => 'ch_sidebar_mobile',
					'type'     => 'text'
				)
			)
		);
	}

	public function sanitize_text( $text ): string {
		return sanitize_text_field( $text );
	}
}