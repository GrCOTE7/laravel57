window._ = require('lodash');
window.Popper = require('popper.js').default;
try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (e) {}

var sommiel = 7;

console.log('sommiel = ' + sommiel);
$('#sommiel').html(sommiel);

setTimeout(function () {
    var t = 0,
        c = 1;

    while (c <= sommiel) {
        t += c;
        c++;
      }
      
      $('.lionel').css('color', 'blue').html('Sommiel de ' + sommiel + ' = ' + t);
    }, (sommiel*500)); // Tempo: 1/2 seconde par unité
