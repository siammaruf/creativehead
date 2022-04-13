<?php

namespace CH\Admin\Customizations;

class CH_Social {
	public function __construct($wp_customize,$block) {
		$this->ch_add_social($wp_customize,$block);
	}

	public function ch_add_social($wp_customize,$block){

		// Add section.
		$wp_customize->add_section( 'ch_custom_social_area' , array(
			'title'    => __('Add Social Area','creativeHead'),
			'panel'    => $block,
			'priority' => 10
		) );

		$wp_customize->add_setting( 'customizer_repeater_social_list', array(
			'sanitize_callback' => 'customizer_repeater_sanitize',
		));

		$wp_customize->add_control( new \Customizer_Repeater(
			$wp_customize,
			'customizer_repeater_social_list',
				array(
					'label'   => esc_html__('Add Social','creativeHead'),
					'section' => 'ch_custom_social_area',
					'priority' => 1,
					'customizer_repeater_title_control' => true,
					'customizer_repeater_link_control' => true,
					'customizer_repeater_icon_control' => true,
				)
			)
		);
	}
}