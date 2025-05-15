<?php
/*
Plugin Name: UCF Lazyload Video Plugin
Description: This plugin improves page performance by lazy-loading YouTube videos. It enqueues both a JavaScript file and a CSS file. The JavaScript listens for clicks on elements with the .youtube-preview class. Once clicked, it dynamically loads the YouTube video.
Version: 0.1.0
Author: UCF Web Communications
License: GPL3
GitHub Plugin URI: UCF/ucf-lazyload-video-plugin
*/

if ( ! defined( 'WPINC' ) ) {
    die;
}

define( 'UCF_LAZYLOAD_VIDEO__PLUGIN_URL', plugins_url( basename( dirname( __FILE__ ) ) ) );
define( 'UCF_LAZYLOAD_VIDEO__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'UCF_LAZYLOAD_VIDEO__STATIC_URL', UCF_LAZYLOAD_VIDEO__PLUGIN_URL . '/static' );
define( 'UCF_LAZYLOAD_VIDEO__PLUGIN_FILE', __FILE__ );

include_once UCF_LAZYLOAD_VIDEO__PLUGIN_DIR . 'includes/ucf-lazyload-video-common.php';
