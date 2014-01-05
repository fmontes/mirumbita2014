'use strict';

function toggleNav() {
    $('.js-toggle-menu').on('click', function() {
        $('html').toggleClass('menu-active');
    });
}

$(document).on('ready', function() {
    toggleNav();
});