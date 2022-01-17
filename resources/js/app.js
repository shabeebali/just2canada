require('./bootstrap');
/*
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
*/
$( document ).ready(function() {
    var navbarHeight = $('#main_navbar_disabled').outerHeight();
    $('.content-wrapper').css('margin-top',navbarHeight);
})