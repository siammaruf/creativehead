<?php
/**
 * functions.php
 *
 * The theme's functions and definitions.
 */

/**
 * ----------------------------------------------------------------------------------------
 * Define constants.
 * ----------------------------------------------------------------------------------------
 */
define( 'THEMEROOT', get_template_directory_uri() );
const IMAGES = THEMEROOT . '/assets/images/';
const SCRIPTS = THEMEROOT . '/assets/js/';
const STYLE = THEMEROOT . '/assets/css/';

/**
 * ----------------------------------------------------------------------------------------
 * Add Theme Support.
 * ----------------------------------------------------------------------------------------
 */
add_theme_support( 'post-thumbnails' );

/**
 * ----------------------------------------------------------------------------------------
 * Define theme functions.
 * ----------------------------------------------------------------------------------------
 */
require_once __DIR__.'/inc/loader.php';