const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    // .postCss('resources/css/app.css', 'public/css', [
    //
    // ]);
    .sass('resources/sass/app.scss', 'public/css');

// mix.copyDirectory('resources/assets/fonts', 'public/assets/fonts');
// mix.copy('resources/assets/fonts', 'public/assets/fonts');
// mix.copyDirectory('resources/assets/images', 'public/assets/images');
// mix.copy('resources/assets/images', 'public/assets/images');
//
// mix.js('resources/assets/plugins/simplebar/js/simplebar.min.js', 'public/assets/plugins/simplebar/js')
//     .postCss('resources/assets/plugins/simplebar/css/simplebar.css', 'public/assets/plugins/simplebar/css', []);
//
// mix.js('resources/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js', 'public/assets/plugins/perfect-scrollbar/js')
//     .postCss('resources/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css', 'public/assets/plugins/perfect-scrollbar/css', []);
//
// mix.js('resources/assets/plugins/metismenu/js/metisMenu.min.js', 'public/assets/plugins/metismenu/js')
//     .postCss('resources/assets/plugins/metismenu/css/metisMenu.min.css', 'public/assets/plugins/metismenu/css', []);
//
// mix.js('resources/assets/js/pace.min.js', 'public/assets/js')
//     .postCss('resources/assets/css/pace.min.css', 'public/assets/css', []);
//
// mix.js('resources/assets/js/bootstrap.bundle.min.js', 'public/assets/js')
//     .postCss('resources/assets/css/bootstrap.min.css', 'public/assets/css', []);
//
// mix.js('resources/assets/js/app.js', 'public/assets/js')
//     .postCss('resources/assets/css/app.css', 'public/assets/css', [])
//     .postCss('resources/assets/css/custom.css', 'public/assets/css', []);

/*
mix.js('resources/assets/plugins/highcharts/js/highcharts.js', 'public/assets/plugins/highcharts/js')
    .js('resources/assets/plugins/highcharts/js/exporting.js', 'public/assets/plugins/highcharts/js')
    .js('resources/assets/plugins/highcharts/js/variable-pie.js', 'public/assets/plugins/highcharts/js')
    .js('resources/assets/plugins/highcharts/js/export-data.js', 'public/assets/plugins/highcharts/js')
    .js('resources/assets/plugins/highcharts/js/accessibility.js', 'public/assets/plugins/highcharts/js')
    .postCss('resources/assets/plugins/highcharts/css/highcharts.css', 'public/assets/plugins/highcharts/css', []);
*/
// mix.postCss('resources/assets/plugins/highcharts/css/highcharts.css', 'public/assets/plugins/highcharts/css', []);
//
// mix.js('resources/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js', 'public/assets/plugins/vectormap')
//     .js('resources/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js', 'public/assets/plugins/vectormap')
//     .postCss('resources/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css', 'public/assets/plugins/vectormap', []);
//
// mix.js('resources/assets/plugins/apexcharts-bundle/js/apexcharts.min.js', 'public/assets/plugins/apexcharts-bundle/js');
//
// mix.js('resources/assets/js/index2.js', 'public/assets/js/index2.js');
//
// mix.postCss('resources/assets/css/dark-theme.css', 'public/assets/css', []);
//
// mix.postCss('resources/assets/css/semi-dark.css', 'public/assets/css', []);
//
// mix.postCss('resources/assets/css/header-colors.css', 'public/assets/css', []);
//
/*
mix.postCss('resources/assets/css/icons.css', 'public/assets/css', [
    'postcss-attribute-case-insensitive'
]);
*/
// mix.js('resources/assets/js/jquery.min.js', 'public/assets/js/jquery.min.js');

// mix.js('resources/js/plugins.js', 'public/assets/plugins/js')
