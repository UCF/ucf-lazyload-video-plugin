=== UCF Lazyload Video Plugin ===

## Description ##
This plugin improves page performance by lazy-loading videos. It enqueues both a JavaScript file and a CSS file. In this version, we added support for lazy-loading YouTube videos. When a YouTube link like "https://youtube.com/watch?v={{YouTube-Video-ID}}" or "https://youtu.be/{{YouTube-Video-ID}}" is embedded in the WordPress editor, it automatically displays the video’s default thumbnail with a play button overlay. When the user clicks the play button, the video is loaded directly from YouTube.

## To implement it: ##
Simply adding the full YouTube URL will trigger the feature.

## Development ##
Note that compiled, minified css and js files are included within the repo.  Changes to these files should be tracked via git (so that users installing the plugin using traditional installation methods will have a working plugin out-of-the-box.)
[Enabling debug mode](https://codex.wordpress.org/Debugging_in_WordPress) in your `wp-config.php` file is recommended during development to help catch warnings and bugs.

## Requirements ##
* node v16+
* gulp-cli
* Fontawesome
* Bootstrap

## Instructions ##
1. Clone the ucf-lazyload-youtube-plugin repo into your local development environment, within your WordPress installation's `plugins/` directory: `git clone https://github.com/UCF/ucf-lazyload-video-plugin.git`
2. `cd` into the new ucf-lazyload-youtube-plugin directory, and run `npm install` to install required packages for development into `node_modules/` within the repo
3. Optional: If you'd like to enable [BrowserSync](https://browsersync.io) for local development, or make other changes to this project's default gulp configuration, copy `gulp-config.template.json`, make any desired changes, and save as `gulp-config.json`.
	@@ -65,7 +51,15 @@ If you are using the example markup you need the following liberies

    The full list of modifiable config values can be viewed in `gulpfile.js` (see `config` variable).
3. Run `gulp default` to process front-end assets.
4. If you haven't already done so, create a new WordPress site on your development environment to test this plugin against, and install and activate all plugin dependencies.
5. Activate this plugin on your development WordPress site.
6. Run `gulp watch` to continuously watch changes to scss and js files. If you enabled BrowserSync in `gulp-config.json`, it will also reload your browser when plugin files change.