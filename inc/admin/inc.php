<?php
if (!defined('ABSPATH')) {
	die('You are not authorized to view this page.');
}

// Include External Functions
require_once __DIR__.'/customizer-repeater/inc/customizer.php';
require_once __DIR__.'/customizer-repeater/class/customizer-repeater-control.php';

// Linking Theme Admin Classes
require_once __DIR__.'/classes/customizations/CH_Header.php';
require_once __DIR__.'/classes/customizations/CH_Logo_Area.php';
require_once __DIR__.'/classes/customizations/CH_Sidebar.php';
require_once __DIR__.'/classes/customizations/CH_Social.php';
require_once __DIR__.'/classes/Theme_Customizations.php';