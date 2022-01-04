require('./bootstrap');
/*
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
*/
$( window ).on( "load", function() {
    var navbarHeight = $('#main_navbar_disabled').outerHeight();
    $('.content-wrapper').css('margin-top',navbarHeight);
})