window._ = require('lodash');
window.swal = require('sweetalert2');
window.Popper = require('popper.js').default;

try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
    require('@fortawesome/fontawesome-free/js/all.js');
} catch (e) {}
