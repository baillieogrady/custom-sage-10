const mix = require('laravel-mix');
require('@tinypixelco/laravel-mix-wp-blocks');
require('laravel-mix-copy-watched');
// require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Sage application. By default, we are compiling the Sass file
 | for your application, as well as bundling up your JS files.
 |
 */

mix
  .setPublicPath('./dist')
  .browserSync('elpv4.pantheonlocal.com');

mix
  .postCss('resources/assets/styles/app.css', 'dist/styles', [
    require('postcss-import')(),
    require('postcss-nested')(),
    require('tailwindcss')('./tailwind.config.js'),
  ])

mix
  .postCss('resources/assets/styles/editor.css', 'dist/styles', [
    require('postcss-import')(),
    require('postcss-nested')(),
    require('tailwindcss')('./tailwind.config.js'),
  ])

mix
  .js('resources/assets/scripts/app.js', 'scripts')
  .extract();

mix
  .copyWatched('resources/assets/images/**', 'dist/images')
  // .copyWatched('resources/assets/fonts/**', 'dist/fonts');

mix
  .autoload({ jquery: ['$', 'window.jQuery'] })
  .options({ processCssUrls: false })
  .sourceMaps(false, 'source-map')
  .version();
