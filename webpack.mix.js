const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.sass('resources/sass/base.scss', 'public/css/app.css');
mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/main.js', 'public/js/app.js')
    .vue()
    .options({
        processCssUrls:false
    });
mix.copy('resources/js/videotube.min.js', 'public/js/');


//************** supplierBase - End ******************
mix.sass('resources/sass/supplierBase/main.scss', 'public/css/supplierBase.css');
mix.js('resources/js/supplierBase.js', 'public/js/supplierBase.js')
    .js('resources/js/supplierBaseApp.js', 'public/js/supplierBase.js')
    .vue()
    .options({
        processCssUrls:false
    });
mix.copy('resources/js/modal-box.min.js', 'public/js/modal-box.min.js');
mix.copy('resources/sass/modal-box.min.css', 'public/css/modal-box.min.css');
//************** supplierBase - End ******************

//************** Admin - START ******************
mix.js('resources/js/admin-app.js', 'public/js/admin').vue();
mix.copy('node_modules/chart.js/dist/Chart.min.js', 'public/js/admin');
mix.sass('resources/sass/admin-sass/style.scss', 'public/css/admin');
mix.copy('node_modules/axios/dist/axios.min.js', 'public/js/admin');
mix.copy('node_modules/@coreui/chartjs/dist/css/coreui-chartjs.css', 'public/css/admin');
mix.copy('node_modules/cropperjs/dist/cropper.css', 'public/css/admin');
mix.copy('node_modules/@coreui/utils/dist/coreui-utils.js', 'public/js/admin');
mix.copy('node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js', 'public/js/admin');
mix.copy('node_modules/@coreui/chartjs/dist/js/coreui-chartjs.bundle.js', 'public/js/admin');
mix.copy('node_modules/cropperjs/dist/cropper.js', 'public/js/admin');
mix.copy('resources/js/coreui/main.js', 'public/js/admin');
mix.copy('resources/js/coreui/colors.js', 'public/js/admin');
mix.copy('resources/js/coreui/charts.js', 'public/js/admin');
mix.copy('resources/js/coreui/widgets.js', 'public/js/admin');
mix.copy('resources/js/coreui/popovers.js', 'public/js/admin');
mix.copy('resources/js/coreui/tooltips.js', 'public/js/admin');
mix.js('resources/js/coreui/menu-create.js', 'public/js/admin');
mix.js('resources/js/coreui/menu-edit.js', 'public/js/admin');
mix.js('resources/js/coreui/media.js', 'public/js/admin');
mix.js('resources/js/coreui/media-cropp.js', 'public/js/admin');
mix.copy('node_modules/@coreui/icons/fonts', 'public/fonts');
mix.copy('node_modules/@coreui/icons/css/free.min.css', 'public/css/admin');
mix.copy('node_modules/@coreui/icons/css/brand.min.css', 'public/css/admin');
mix.copy('node_modules/@coreui/icons/css/flag.min.css', 'public/css/admin');
mix.copy('node_modules/@coreui/icons/svg/flag', 'public/svg/flag');
mix.copy('node_modules/@coreui/icons/sprites/', 'public/icons/sprites');
//************** Admin - End ******************

mix.copy('public_html/mix-manifest.json', 'public/mix-manifest.json');
mix.copy('resources/assets', 'public/assets');
mix.copy('public/css/admin', 'public_html/css/admin');
mix.copy('public/js/admin', 'public_html/js/admin');
mix.copy('public/css', 'public_html/css');
mix.copy('public/js', 'public_html/js');
