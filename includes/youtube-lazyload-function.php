<?php

add_filter('embed_oembed_html', 'ucf_lazyload_youtube_oembed_filter', 10, 3);

function ucf_lazyload_youtube_oembed_filter($html, $url, $attr) {
    // Only run for YouTube URLs
    if (strpos($url, 'youtube.com') !== false || strpos($url, 'youtu.be') !== false) {
        // Extract the YouTube video ID from the URL
        preg_match('/(?:youtube\.com\/.*v=|youtu\.be\/)([^&\n]+)/', $url, $matches);
        if (!isset($matches[1])) {
            return $html; // fallback to normal embed
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
