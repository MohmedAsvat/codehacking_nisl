/**
 * Created by edwin on 3/26/17.
 */
const { mix } = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');



mix.styles([
    
    'resources/assets/css/libs/style.css',
    'resources/assets/css/libs/bootstrap.css',
    'resources/assets/css/libs/core.css',
    'resources/assets/css/libs/components.css',
    'resources/assets/css/libs/color.css'
    
], 'public/css/libs.css');

mix.scripts([
    'resources/assets/js/libs/pace.min.js',
    'resources/assets/js/libs/jquery.min.js',   
    'resources/assets/js/libs/bootstrap.min.js',
    'resources/assets/js/libs/blockui.min.js',
    'resources/assets/js/libs/app.js'
], 'public/js/libs.js');