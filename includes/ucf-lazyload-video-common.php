<?php

if ( ! function_exists( 'ucf_lazyload_video_enqueue_scripts' ) ) {
	function ucf_lazyload_video_enqueue_scripts() {
		$plugin_data = get_plugin_data( UCF_LAZYLOAD_VIDEO__PLUGIN_FILE, false, false );
		$version     = $plugin_data['Version'];

		wp_enqueue_script(
			'ucf-lazyload-video-js',
			UCF_LAZYLOAD_VIDEO__STATIC_URL . '/js/script.min.js',
			null,
			$version,
			true
		);
	}
	add_action( 'wp_enqueue_scripts', 'ucf_lazyload_video_enqueue_scripts' );
}

if ( ! function_exists( 'ucf_lazyload_video_enqueue_styles' ) ) {
	function ucf_lazyload_video_enqueue_styles() {
		$plugin_data = get_plugin_data( UCF_LAZYLOAD_VIDEO__PLUGIN_FILE, false, false );
		$version     = $plugin_data['Version'];

		wp_enqueue_style(
			'ucf-lazyload-video-css',
			UCF_LAZYLOAD_VIDEO__STATIC_URL . '/css/style.min.css',
			null,
			$version
		);
	}
	add_action( 'wp_enqueue_scripts', 'ucf_lazyload_video_enqueue_styles' );
}

?>
