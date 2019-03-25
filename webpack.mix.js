const mix = require('laravel-mix');

mix.js('js/app.js', './')
   .sass('sass/main.scss', './public/css/style.css')
