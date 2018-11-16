window._ = require('lodash');
window.Popper = require('popper.js').default;
try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (e) {}

setTimeout(function () {
    var t = 0,
        c = 1,
        sommiel = 10;

    while (c <= sommiel) {
        t += c;
        c++;
    }

    $('.lionel').css('color', 'blue').html('Sommiel de ' + sommiel + ' = ' + t);
}, 2000);
