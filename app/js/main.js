//@TODO: add uglify to grunt
//@TODO: add fastClick

function svgFallback() {
    if (!Modernizr.svg) {
        $('img[src*="svg"]').attr('src', function() {
            return $(this).attr('src').replace('.svg', '.png');
        });
    }
}

function toggleNav() {
    $('.js-toggle-menu').on('click', function(e) {
        e.stopPropagation();
        $('html').toggleClass('menu-active');
    });

    $('.off-canvas-nav').on('click', function(e) {
        e.stopPropagation();
    });

    $(document).on('click', function() {
        if ($('html').hasClass('menu-active')) {
            $('html').removeClass('menu-active');
        }
    });
}

function toggleSearch() {
    $('.js-toggle-search').on('click', function (e) {
        e.stopPropagation();
        $('html').toggleClass('search-active');
        $('.js-header-search #search_input').focus();
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

function requestServiceForm() {
    var form = $('.js-request-service');

    // Displaying other address if no room is selected
    $('.js-room').on('change', function() {
        var selected = $(this).val();
        if (selected === 'Otra direccion') {
            $('.js-address-group').show();
        }
    });

    $('.js-date').pickadate({
        monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
        today: 'Hoy',
        clear: 'Borrar',
        format: 'd/m/yyyy',
        min: new Date(),
    });

    $('.js-time').pickatime({
        min: [7,0],
        max: [0,0],
        clear: 'Borrar',
    });

    form.isHappy({
        submitButton: '.js-btn-submit',
        fields: {
            // reference the field you're talking about, probably by `id`
            // but you could certainly do $('[name=name]') as well.
            '#name': {
                required: true,
                message: 'Favor ingrese su nombre o razón social'
            },
            '#kidname': {
                required: true,
                message: 'Favor ingrese el nombre del niño'
            },
            //@TODO: make a function to validate VE phone numbers
            '#mobile': {
                required: true,
                message: 'Favor ingrese numero de celular válido'
            },
            '#email': {
                required: true,
                message: 'Favor ingrese un email válido',
                test: happy.email // this can be *any* function that returns true or false
            },
            '#date': {
                required: true,
                message: 'Seleccione una fecha valida'
            },
            '#time': {
                required: true,
                message: 'Seleccione una hora valida'
            },
            '#room': {
                required: true,
                message: 'Seleccione un salon de fiesta u "Otra dirección"'
            },
        }
    });

    form.on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: '/themes/mirumbita/request-service-send.php',
            type: 'POST',
            dataType: 'html',
            data: form.serialize(),
            beforeSend: function() {
                $('.js-btn-submit').after('<div class="alert js-alert"/>');
                $('.js-alert').text('Enviando formulario...');
            },
            success: function(data) {
                $('.js-alert').addClass('alert-success').text('Formulario enviado');
            },
            error: function(e) {
                console.log(e);
            }
        });
    });
}

// Return false if the viewport is >= 640px (40em);
function isMobile() {
    return !Modernizr.mq('only screen and (min-width: 40em)');
}

// Target IE8 (I know it sucks)
function isIE8() {
    return $('html').hasClass('lt-ie9');
}

function packery(imagelist, imageItem) {
    if (!isMobile() || isIE8()) {
        var $imageList = $(imagelist);
        $imageList.find('img').trigger('unveil');
        $imageList.imagesLoaded(function() {
            $imageList.packery({
                itemSelector: imageItem,
                gutter: 20,
            }).addClass('ready');
        });
    }
}

function lazyLoad() {
    $('.lazy').unveil(400, function(){
        $(this).load(function() {
            $(this).parent().addClass('loaded');
        });
    });

    if(isMobile) {
        $('.js-image-listing-item img').unveil(400, function(){
            $(this).load(function() {
                $(this).parent().addClass('loaded');
            });
        });
    }
}

$(document).on('ready', function() {
    lazyLoad();
    svgFallback();
    requestServiceForm();
    packery('.js-subalbum .js-image-listing', '.js-image-listing-item');

    if (isIE8()) {
        $('.js-home-latest-albums li:nth-child(3n), .js-album-listing li:nth-child(3n)').css('margin-right', '0');
    }

    if (!isIE8() && isMobile()) {
        toggleNav();
        toggleSearch();
        $('.js-image-link').on('click', function(e) {
            e.preventDefault();
        });
    }

    $('.js-album-social').mouseover(function (){
        var link = $('.js-facebook-btn').attr('data-href');
        $(this).prepend('<div class="fb-wrapper js-fb-wrapper"><div class="fb-like" data-href="' + link + '" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></div>');
        FB.XFBML.parse($(this).find('.js-fb-wrapper').get(0));
        $(this).find('.js-facebook-btn').remove();
        $(this).off();
    });
});
