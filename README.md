# UCF Lazyload Video Plugin #
Contributors: ucfwebcom
Requires at least: 5.3
Tested up to: 5.3
Stable tag: 0.0.0
Requires PHP: 7.4
License: GPLv3 or later
License URI: http://www.gnu.org/copyleft/gpl-3.0.html

# UCF Lazyload Video Plugin #

This plugin improves page performance by lazy-loading videos. It enqueues both a JavaScript file and a CSS file.

## Description ##

This plugin improves page performance by lazy-loading YouTube videos. It enqueues both a JavaScript file and a CSS file. The JavaScript listens for clicks on elements with the .youtube-preview class. Once clicked, it dynamically loads the YouTube video.

## To implement it: ##

- Add the ```.youtube-preview``` class to your HTML element.
- Set the ```data-video-id``` attribute with the corresponding YouTube video ID. The JavaScript dynamically pulls the data-video-id and loads the correct YouTube iframe on click.
- If you want to use the youtube image thumbnail, you should make sure to add Youtube video ID to the src.

## Markup Example ##

Each video card includes:
- A thumbnail preview image generated using the YouTube video ID.
- An overlaid play button icon.
- The YouTube video ID defined in the ```data-video-id``` attribute (required).

```
<div class="youtube-preview embed-responsive embed-responsive-16by9" data-video-id="{{$youtube_video_id}}">
  <div class="embed-responsive-item overflow-hidden">
    <img
      src="https://img.youtube.com/vi/{{$youtube_video_id}}/hqdefault.jpg"
      alt="Video Preview"
      class="w-100 h-100 object-fit-cover"
      loading="lazy"
    />
    <div class="play-button" aria-label="Play video">
      <i class="fa-solid fa-circle-play rounded-circle bg-secondary box-shadow-soft-inverse fa-3x"></i>
    </div>
  </div>
</div>
```

### Important ###
- The data-video-id must use the YouTube video ID only (example: aYnvV5yD_w0), not the full URL.
- This same ID must also be used to generate the thumbnail preview:

``` src="https://img.youtube.com/vi/{{$youtube_video_id}}/hqdefault.jpg" ```

## Development ##

Note that compiled, minified css and js files are included within the repo.  Changes to these files should be tracked via git (so that users installing the plugin using traditional installation methods will have a working plugin out-of-the-box.)
[Enabling debug mode](https://codex.wordpress.org/Debugging_in_WordPress) in your `wp-config.php` file is recommended during development to help catch warnings and bugs.

## Requirements ##
* node v16+
* gulp-cli

## Optional Dependencies ##
If you are using the example markup you need the following liberies
* Bootstrap / Athena Framework classes for layout and responsiveness.
* Font Awesome 6+ for the play icon.


## Instructions ##
1. Clone the ucf-lazyload-youtube-plugin repo into your local development environment, within your WordPress installation's `plugins/` directory: `git clone https://github.com/UCF/ucf-lazyload-youtube-plugin.git`
2. `cd` into the new ucf-lazyload-youtube-plugin directory, and run `npm install` to install required packages for development into `node_modules/` within the repo
3. Optional: If you'd like to enable [BrowserSync](https://browsersync.io) for local development, or make other changes to this project's default gulp configuration, copy `gulp-config.template.json`, make any desired changes, and save as `gulp-config.json`.
	@@ -65,7 +51,15 @@ If you are using the example markup you need the following liberies

    The full list of modifiable config values can be viewed in `gulpfile.js` (see `config` variable).
3. Run `gulp default` to process front-end assets.
4. If you haven't already done so, create a new WordPress site on your development environment to test this plugin against, and install and activate all plugin dependencies.
5. Activate this plugin on your development WordPress site.
6. Run `gulp watch` to continuously watch changes to scss and js files. If you enabled BrowserSync in `gulp-config.json`, it will also reload your browser when plugin files change.