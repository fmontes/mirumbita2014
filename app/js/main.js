'use strict';

function toggleNav() {
    $('.js-toggle-menu').on('click', function(e) {
        e.stopPropagation();
        $('html').toggleClass('menu-active');
    });

    $('.js-side-nav').on('click', function(e) {
        e.stopPropagation();
    });

    $(window).on('click', function() {
        if ($('html').hasClass('menu-active')) {
            $('html').removeClass('menu-active');
        }
    });
}

$(document).on('ready', function() {
    toggleNav();
});