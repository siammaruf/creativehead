<?php
namespace ElementorCH\Widgets;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;
use Elementor\Utils;

if ( ! defined( 'ABSPATH' ) ) { exit; }

class WidgetCreativeHeadMainSlider extends Widget_Base{

	public function get_name() {
		return 'creative-head-main-slider';
	}

	public function get_title() {
		return esc_html__( 'CH Main Slider', 'creativeHead' );
	}

	public function get_icon() {
		return 'fa-light fa-image-landscape';
	}

	public function get_categories() {
		return [ 'general' ];
	}

//	public function get_script_depends() {
//		wp_register_script("bootstrap-js", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(), false, true);
//
//		return [
//			'bootstrap-js'
//		];
//	}
//
//	public function get_style_depends() {
//		wp_register_style( "bootstrap-css", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), false, "all" );
//		return [
//			'bootstrap-css'
//		];
//	}

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'creativeHead' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new Repeater();

		$repeater->add_control(
			'list_title', [
				'label' => esc_html__( 'Title', 'creativeHead' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'List Title' , 'creativeHead' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'button_title', [
				'label' => esc_html__( 'Button Title', 'creativeHead' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'List Button Title' , 'creativeHead' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'button_link', [
				'label' => esc_html__( 'Link', 'creativeHead' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'List Button Link' , 'creativeHead' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'list_image',
			[
				'label' => esc_html__( 'Choose Image', 'creativeHead' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
		);

		$repeater->add_control(
			'caption_image',
			[
				'label' => esc_html__( 'Choose Caption Image', 'creativeHead' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Repeater List', 'creativeHead' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_title' => esc_html__( 'Title #1', 'creativeHead' ),
						'list_image' => esc_html__( 'Item image.', 'creativeHead' ),
						'caption_image' => esc_html__( 'Caption image.', 'creativeHead' ),
						'button_title' => esc_html__( 'Button Title.', 'creativeHead' ),
						'button_link' => esc_html__( 'Button link.', 'creativeHead' ),
					],
					[
						'list_title' => esc_html__( 'Title #2', 'creativeHead' ),
						'list_image' => esc_html__( 'Item image.', 'creativeHead' ),
						'caption_image' => esc_html__( 'Caption image.', 'creativeHead' ),
						'button_title' => esc_html__( 'Button Title.', 'creativeHead' ),
						'button_link' => esc_html__( 'Button link.', 'creativeHead' ),
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		// generate the final HTML on the frontend using PHP
		$settings = $this->get_settings_for_display();

		if ( $settings['list'] ) {
			?>
            <section class="slider creative-head-slider-main"><!-- Start Slider -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
	                    <?php $i = 0; ?>
			            <?php foreach (  $settings['list'] as $item ) { ?>
                        <div class="swiper-slide <?php echo ($i==0) ? 'active':''; ?>" data-background="<?php echo $item['list_image']['url']; ?>">
                            <div class="slide-inner">
                                <?php if (!empty($item['caption_image']['url'])):?>
                                    <figure><img src="<?php echo $item['caption_image']['url']; ?>" alt="Image"></figure>
                                <?php endif;?>
                                <h2><?php echo $item['list_title']; ?></h2>
				                <?php if (!empty($item['button_title'])):?>
                                    <?php
                                    $btn_link = "#";
                                    if(!empty($item['button_link'])){
	                                    $btn_link = $item['button_link'];
                                    }
                                    ?>
                                    <div class="link">
                                        <a href="<?=$btn_link?>"><?php echo $item['button_title']; ?></a>
                                    </div>
				                <?php endif;?>
                                <!-- end link -->
                            </div>
                            <!-- end slide-inner -->
                        </div>
                        <!-- end swiper-slide -->
			            <?php } ?>
                    </div>
                    <!-- end swiper-wrapper -->
                    <div class="swiper-pagination"></div>
                    <!-- end swiper-pagination -->
                    <div class="swiper-button-next"><span></span><b>NEXT</b></div>
                    <!-- end swiper-button-next -->
                </div>
                <!-- end swiper-container -->
            </section>
            <!-- end slider -->
			<?php
		}
	}

}