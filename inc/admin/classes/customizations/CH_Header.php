<?php
namespace CH\Admin\Customizations;
if (!defined('ABSPATH')) {
	die('You are not authorized to view this page.');
}
class CH_Header {
	public function __construct($wp_customize, $block) {
		$this->ch_header_tel($wp_customize,$block);
	}

	public function ch_header_tel($customize,$block){
		// Add section.
		$customize->add_section( 'custom_header_text' , array(
			'title'    => __('Change Header Text','creativeHead'),
			'panel'    => $block,
			'priority' => 10
		) );

		// Add setting
		$customize->add_setting( 'ch_header_text_tel_block', array(
			'default'           => __( '+000 000 000', 'creativeHead' ),
			'sanitize_callback' => [$this,'sanitize_text']
		) );

		// Add control
		$customize->add_control( new \WP_Customize_Control(
				$customize,
				'custom_header_text',
				array(
					'label'    => __( 'Header Telephone', 'creativeHead' ),
					'section'  => 'custom_header_text',
					'settings' => 'ch_header_text_tel_block',
					'type'     => 'text'
				)
			)
		);
	}

	public function sanitize_text( $text ): string {
		return sanitize_text_field( $text );
	}
}