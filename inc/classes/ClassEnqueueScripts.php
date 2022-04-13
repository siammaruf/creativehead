<?php
namespace CH\OPTIONS;
if (!defined('ABSPATH')) {
	die('You are not authorized to view the page.');
}

class ClassEnqueueScripts {
	public function __construct() {
		add_action('wp_enqueue_scripts',[$this,'creative_head_scripts']);
		add_action('elementor/editor/before_enqueue_scripts',[$this,'creative_head_enqueue_custom_admin_style']);
	}

	function creative_head_scripts(){
		// Adds support for pages with threaded comments
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		// Register scripts
		//wp_register_script( 'fontawesome-script', SCRIPTS.'all.min.js', array( 'jquery' ), false, true );
		wp_register_script( 'bootstrap-script', SCRIPTS.'bootstrap.min.js', array( 'jquery' ), false, true );
		wp_register_script( 'imagesloaded-script', SCRIPTS.'imagesloaded.pkgd.min.js', array( 'jquery' ), false, true );
		wp_register_script( 'isotope-script', SCRIPTS.'isotope.min.js', array( 'jquery' ), false, true );
		wp_register_script( 'swiper-script', SCRIPTS.'swiper.min.js', array( 'jquery' ), false, true );
		wp_register_script( 'TweenMax-script', SCRIPTS.'TweenMax.min.js', array( 'jquery' ), false, true );
		wp_register_script( 'odometer-script', SCRIPTS.'odometer.min.js', array( 'jquery' ), false, true );
		wp_register_script( 'fancybox-script', SCRIPTS.'fancybox.min.js', array( 'jquery' ), false, true );
		wp_register_script( 'wow-script', SCRIPTS.'wow.min.js', array( 'jquery' ), false, true );
		wp_register_script( 'scripts', SCRIPTS.'scripts.js', array( 'jquery' ), false, true );
		wp_register_script( 'creativehead-custom-script', SCRIPTS . 'app.js', array( 'jquery' ), false, true );

		// Load the custom scripts
		//wp_enqueue_script( 'fontawesome-script' );
		wp_enqueue_script( 'bootstrap-script' );
		wp_enqueue_script( 'imagesloaded-script' );
		wp_enqueue_script( 'isotope-script' );
		wp_enqueue_script( 'swiper-script' );
		wp_enqueue_script( 'TweenMax-script' );
		wp_enqueue_script( 'odometer-script' );
		wp_enqueue_script( 'fancybox-script' );
		wp_enqueue_script( 'scripts' );
		wp_enqueue_script( 'wow-script' );
		wp_enqueue_script( 'creativehead-custom-script' );

		// Load the stylesheets
		//wp_enqueue_style( 'fontawesome', STYLE. 'all.min.css' );
		wp_enqueue_style( 'animate', STYLE . 'animate.min.css' );
		wp_enqueue_style( 'odometer', STYLE . 'odometer.min.css' );
		wp_enqueue_style( 'fancybox', STYLE . 'fancybox.min.css' );
		wp_enqueue_style( 'swiper', STYLE . 'swiper.min.css' );
		wp_enqueue_style( 'bootstrap', STYLE . 'bootstrap.min.css' );
		wp_enqueue_style( 'style', STYLE . 'style.css' );
		wp_enqueue_style( 'creativehead-master', STYLE . 'master.css' );
	}

	function creative_head_enqueue_custom_admin_style() {
		// Register scripts
		wp_register_script( 'fontawesome-script', SCRIPTS.'all.min.js', array( 'jquery' ), false, true );

		// Load the custom scripts
		wp_enqueue_script( 'fontawesome-script' );

		// Load the stylesheets
		wp_enqueue_style( 'fontawesome', STYLE. 'all.min.css' );
	}
}

new ClassEnqueueScripts();