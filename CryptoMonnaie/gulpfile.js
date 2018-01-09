var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');
elixir(function(mix) {
    mix.sass('mystyle.scss');
    mix.livereload();
});