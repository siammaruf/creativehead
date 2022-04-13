<?php
namespace CH\Admin\Customizations;
if (!defined('ABSPATH')) {
	die('You are not authorized to view this page.');
}
class CH_Logo_Area {
	public function __construct($wp_customize) {
		$this->ch_site_logo($wp_customize);
		$this->ch_main_side_logo($wp_customize);
		$this->ch_preload_logo($wp_customize);
	}

	public function ch_site_logo($customize){
		//Settings
		$customize->add_setting( 'site_logo' );//Setting for logo uploader

		//Controls
		$customize->add_control(
			new \WP_Customize_Image_Control(
				$customize,
				'site_logo',
				array(
					'label'      => 'Upload a logo',
					'section'    => 'title_tagline',
					'settings'   => 'site_logo'
				)
			)
		);
	}

	public function ch_main_side_logo($customize){
		//Settings
		$customize->add_setting( 'main_side_logo' );//Setting for logo uploader

		//Controls
		$customize->add_control(
			new \WP_Customize_Image_Control(
				$customize,
				'main_side_logo',
				array(
					'label'      => 'Upload a side logo',
					'section'    => 'title_tagline',
					'settings'   => 'main_side_logo'
				)
			)
		);
	}

	public function ch_preload_logo($customize){
		//Settings
		$customize->add_setting( 'main_preload_logo' );//Setting for logo uploader

		//Controls
		$customize->add_control(
			new \WP_Customize_Image_Control(
				$customize,
				'main_preload_logo',
				array(
					'label'      => 'Upload site preload logo',
					'section'    => 'title_tagline',
					'settings'   => 'main_preload_logo'
				)
			)
		);
	}
}