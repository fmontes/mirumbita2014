//@TODO: add uglify to grunt
//@TODO: add fastClick

'use strict';

function svgFallback() {
    if(!Modernizr.svg) {
        $('img[src*="svg"]').attr('src', function() {
            return $(this).attr('src').replace('.svg', '.png');
        });
    }
}

// @TODO: make it just mobile
function toggleNav() {
    $('.js-toggle-menu').on('click', function(e) {
        e.stopPropagation();
        $('html').toggleClass('menu-active');
    });

    $('.js-side-nav').on('click', function(e) {
        e.stopPropagation();
    });

    $(document).on('click', function() {
        if ($('html').hasClass('menu-active')) {
            $('html').removeClass('menu-active');
        }
    });
}

// @TODO: make it just mobile
function toggleSearch() {
    $('.js-toggle-search').on('click', function (e) {
        e.stopPropagation();
        $('html').toggleClass('search-active');
    });

    $('.js-header-search').on('click', function(e) {
        e.stopPropagation();
    });

    $(document).on('click', function() {
        if ($('html').hasClass('search-active')) {
            $('html').removeClass('search-active');
        }
    });
}

$(document).on('ready', function() {
    svgFallback();
    toggleNav();
    toggleSearch();
});