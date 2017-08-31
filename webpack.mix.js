let mix = require('laravel-mix');

/*
 | Mix Asset Management
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

/*
 | Plugins
 */

const LiveReloadPlugin = require('webpack-livereload-plugin');

mix.webpackConfig({
    plugins: [
        new LiveReloadPlugin(),
    ]
});
