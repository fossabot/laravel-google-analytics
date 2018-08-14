const mix = require('laravel-mix');

mix.setPublicPath('public')
  .setResourceRoot('resources')
  .js('resources/js/script.js', 'js/script.js')
  .version();

