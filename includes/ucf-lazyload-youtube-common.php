<?php

if ( ! function_exists( 'ucf_lazyload_youtube_enqueue_scripts' ) ) {
	function ucf_lazyload_youtube_enqueue_scripts() {
		$plugin_data = get_plugin_data( UCF_LAZYLOAD_YOUTUBE__PLUGIN_FILE, false, false );
		$version     = $plugin_data['Version'];

		wp_enqueue_script(
			'ucf-lazyload-youtube-js',
			UCF_LAZYLOAD_YOUTUBE__STATIC_URL . '/js/ucf-lazyload-youtube.min.js',
			null,
			$version,
			true
		);
	}
	add_action( 'wp_enqueue_scripts', 'ucf_lazyload_youtube_enqueue_scripts' );
}

if ( ! function_exists( 'ucf_lazyload_youtube_enqueue_styles' ) ) {
	function ucf_lazyload_youtube_enqueue_styles() {
		$plugin_data = get_plugin_data( UCF_LAZYLOAD_YOUTUBE__PLUGIN_FILE, false, false );
		$version     = $plugin_data['Version'];

		wp_enqueue_style(
			'ucf-lazyload-youtube-css',
			UCF_LAZYLOAD_YOUTUBE__STATIC_URL . '/css/ucf-lazyload-youtube.min.css',
			null,
			$version
		);
	}
	add_action( 'wp_enqueue_scripts', 'ucf_lazyload_youtube_enqueue_styles' );
}
?>
