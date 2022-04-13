<?php
namespace CH_ELEMENTOR;
use ElementorCH\Widgets\WidgetCreativeHeadMainSlider;
if ( ! defined( 'ABSPATH' ) ) { exit; }

class ElementorWidgetRegister {
	public function __construct() {
		add_action( 'elementor/init', [ $this, 'creative_head_elementor_init' ] );
	}

	function creative_head_elementor_init(){
		add_action( 'elementor/widgets/register', [ $this, 'creative_head_elementor_register_widgets' ] );
	}

	function creative_head_elementor_register_widgets($widgets_manager){
		require_once( __DIR__ . '/widgets/WidgetCreativeHeadMainSlider.php' );
		$widgets_manager->register( new WidgetCreativeHeadMainSlider() );
	}

}

new ElementorWidgetRegister();