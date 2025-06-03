<?php

add_filter('embed_oembed_html', 'ucf_lazyload_youtube_oembed_filter', 10, 3);

function ucf_lazyload_youtube_oembed_filter($html, $url, $attr) {
    // Only run for YouTube URLs
    if (strpos($url, 'youtube.com') !== false || strpos($url, 'youtu.be') !== false) {
        // Improved Regex to match multiple YouTube URL formats
        preg_match(
            '/(?:youtube\.com\/(?:watch\?v=|embed\/|shorts\/|attribution_link.*[?&]v=)|youtu\.be\/|m\.youtube\.com\/watch\?v=)([a-zA-Z0-9_-]{11})/',
            $url,
            $matches
        );

        if (!isset($matches[1])) {
            return $html; // Fallback to normal embed if ID not found
        }

        $video_id = esc_attr($matches[1]);
        $thumbnail_url = "https://img.youtube.com/vi/{$video_id}/hqdefault.jpg";

        ob_start();
        ?>
        <div class="youtube-preview" data-video-id="<?php echo $video_id; ?>" tabindex="0" role="button" aria-label="Play video">
            <div class="embed-responsive-item overflow-hidden">
                <img
                    src="<?php echo esc_url($thumbnail_url); ?>"
                    alt="Video Preview"
                    class="w-100 h-100 object-fit-cover"
                    loading="lazy"
                />
                <div class="play-button" aria-label="Play video">
                    <i class="fa-solid fa-circle-play rounded-circle bg-secondary box-shadow-soft-inverse fa-3x"></i>
                    <span class="sr-only">Play video</span>
                </div>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }

    return $html;
}

?>
