window._ = require('lodash');
window.Popper = require('popper.js').default;
try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (e) {}

// windows._ = require ('myscript.js');



var t=0, c=1;

while(c<11) {
  t+=c;
  c++;
}

$('.lionel').css('color', 'red').html('Sommiel de 10 = ' + t);
