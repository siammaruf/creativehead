<?php
if (!defined('ABSPATH')) {
	die('You are not authorized to view this page.');
}

// Load Admin Options
require_once __DIR__.'/admin/inc.php';

// Linking Theme Classes
require_once __DIR__.'/classes/ClassThemeFunctions.php';
require_once __DIR__ . '/classes/ClassEnqueueScripts.php';
require_once __DIR__ . '/classes/ClassCustomPostTypes.php';

// Load Elementor Widget Data
require_once __DIR__.'/elementor/ElementorWidgetRegister.php';