let mix = require('laravel-mix');

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
mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/clndr.css',
    'resources/assets/css/style.css',
    'resources/assets/css/fobochart.css',
    'resources/assets/css/flexslider.css',
    'resources/assets/css/font-awesome.css',
    'resources/assets/css/graph.css',
    'resources/assets/css/icon-font.min.css',
    'resources/assets/css/owl.carousel.css',
    'resources/assets/css/atlas.css',
    'resources/assets/css/dataTables.bootstrap.min.css',
    'resources/assets/css/dropzone.min.css',
    'resources/assets/css/style.css'

], 'public/css/start.css')
.scripts([
    'resources/assets/js/jquery.min.js',
    'resources/assets/js/amcharts.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/Chart.min.js',
    'resources/assets/js/bootstrap.js',
    'resources/assets/js/clndr.js',
    'resources/assets/js/cbpFWTabs.js',
    'resources/assets/js/imagezoom.js',    
    'resources/assets/js/jquery-1.10.2.min.js',
    'resources/assets/js/jquery.dataTables-invert.min.js', 
    'resources/assets/js/jquery.dataTables.min.js', 
    'resources/assets/js/jquery.fileupload.js',
    'resources/assets/js/jquery.iframe-transport.js',  
    'resources/assets/js/jquery.knob.js',     
    'resources/assets/js/jquery.flexslider.js',
    'resources/assets/js/jquery.flot.js',   
    'resources/assets/js/jquery.fn.gantt.js',    
    'resources/assets/js/jquery.nicescroll.js',
    'resources/assets/js/light.js',
    'resources/assets/js/menu_jquery.js',
    'resources/assets/js/moment-2.2.1.js',
    'resources/assets/js/owl.carousel.js',
    'resources/assets/js/pie-chart.js',
    'resources/assets/js/script.js',
    'resources/assets/js/scripts.js',
    'resources/assets/js/serial.js',
    'resources/assets/js/simpleCart.min.js',
    'resources/assets/js/site.js',
    'resources/assets/js/underscore-min.js'
], 'public/js/start.js')
.js(['resources/assets/js/app.js'],'public/js/app.js');


