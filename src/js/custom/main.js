$(document).ready(function() {
    //NICE SCROLL A KIÉRTÉKELÉS MEZŐN
    $(".evaluation__scrolling-box, .advantages__scrolling-box, .summary__scrolling-box").niceScroll({
        cursorwidth: 10,
        cursorcolor: "#007DC6",
        cursorborder: 'none',
        cursorborderradius: "0",
        cursordragontouch: true,
        autohidemode: false
    });

    //ÜDVÖZLŐ OLDAL SZÖVEGÉNEK FELTÜNÉSE
    $('.welcome-layer').addClass('active');

    //ÜDVÖZLŐ LAYER ELTŰNÉSE ÉS A KÖVETKEZŐ LÁTHATÓVÁ TÉTELE
    $('.main-button.first-button').click(function() {
        $('.welcome-layer').hide();
        $('.case-history[data-id="first-chase-history"]').addClass('visible');
        $('.gif-image[data-id="first-chase-img"]').addClass('active');
    });

    //OLDALAK EL ILLETVE FELTŰNÉSE ADOTT KLIKK ESEMÉNYRE
    $('.scrollbox-btn, .evaluation__button').each(function() {
        $(this).click(function() {
            var randomNumberForGif = Math.floor(Math.random()*100);
            var gifImage = '<img src="images/quiz-min.gif?'+ randomNumberForGif +'" alt="quiz gif" />';
            $(this).parent().parent().parent().hide();
            $(this).parent().parent().parent().removeClass('visible');
            $(this).parent().parent().parent().next().addClass('visible');
            $(this).parent().parent().parent().next().find('.gif-image').addClass('active');
            $(this).parent().parent().parent().next().find('.quiz__gif-image').append(gifImage);
        });
    });

    $('.advantages__button, .summary__button').each(function() {
        $(this).click(function() {
            $(this).parent().parent().hide();
            $(this).parent().parent().next().addClass('visible');
            $(this).parent().parent().removeClass('visible');
        });
    });

    //FELFELÉ NYÍL SCROLLBOXNÁL ALAPBÓL LEGYEN HIDDEN-ELVE
    $('.all-up-arrow').hide();
    $('.scrolling-box__hide-scroll, .advantages__scrolling-box, .summary__scrolling-box').each(function() {
        $(this).scroll(function () {
            if($(this).scrollTop() + $(this).innerHeight() + 1 >= $(this)[0].scrollHeight) {
                $(this).parent().find('.all-down-arrow').hide();
            } else {
                $(this).parent().find('.all-down-arrow').show();
            }
            if ($(this).scrollTop() >= 10) {
                $(this).parent().find('.all-up-arrow').show();
            } else {
                $(this).parent().find('.all-up-arrow').hide();
            }
        });
    });

    //FELFELE NYÍLRA KATTINTVA FELFELE GÖRDÜLÉS
    $('.all-up-arrow').each(function() {
        $(this).click(function() {
            $(this).next().animate({
                scrollTop: '-=400'
            }, 500);
        });
    });

    //LEFELE NYÍLRA KATTINTVA LEFELE GÖRDÜLÉS
    $('.all-down-arrow').each(function() {
        $(this).click(function() {
            $(this).prev().animate({
                scrollTop: '+=400'
            }, 500);
        });
    });
    
    $('.evaluation__scrolling-box, .advantages__scrolling-box, .summary__scrolling-box').each(function() {
        if ($(this).scrollTop() + $(this).innerHeight() + 1 >= $(this)[0].scrollHeight) {
            $(this).next().hide();
        }
        $(this).scroll(function () {
            if($(this).scrollTop() + $(this).innerHeight() + 1 >= $(this)[0].scrollHeight) {
                $(this).next().hide();
            } else {
                $(this).next().show();
            }
        });
    });

    //FELSŐ ANIMÁCIÓS GÖMB ELTŰNÉSE KÉRDÉSNÉL
    function hideTheBubble() {
        if ($('.quiz').hasClass('visible')) {
            $('.top-animated-circle').hide();
        } else {
            $('.top-animated-circle').show();
        }
    }
    setInterval(function() {
        hideTheBubble();
    }, 500);

    //LOGÓ CSERE ELŐNYÖK OLDALON
    function changeLogo() {
        if ($('.advantages').hasClass('visible') || $('.summary').hasClass('visible') || $('.certificate').hasClass('visible')) {
            $('.aspen-logo img').attr('src', 'images/aspen-logo-white.png');
            $('.bottom-animated-circle').css('z-index', '10000');
        } else {
            $('.aspen-logo img').attr('src', 'images/aspen-logo.png');
            $('.bottom-animated-circle').css('z-index', '1');
        }
    }
    setInterval(function() {
        changeLogo();
    }, 500);


    //KVÍZ VÁLASZ GOMBOKRA FELTÜNŐ KIÉRTÉKELÉS
    var counter = 0;
    $('.quiz__button').each(function() {
        $(this).click(function() {
            $(this).parent().parent().find('.quiz__gif-image img').remove();
            if ($(this).attr('data-id') == 'y' || $(this).attr('data-id') == 'b') {
                $(this).addClass('correct');
                $(this).parent().find('.good').addClass('active');
                $(this).siblings().attr('disabled', true);
                $(this).parent().parent().find('.evaluation').addClass('active');
                counter++;
            } 
            if ($(this).attr('data-id') == 'n') {
                $(this).addClass('incorrect');
                $(this).parent().find('.wrong').addClass('active');
                $(this).siblings().attr('disabled', true);
                $(this).parent().parent().find('.evaluation').addClass('active');
                $(this).parent().find("[data-id='y']").addClass('correct');
            }
            if ($(this).attr('data-id') == 'a') {
                $(this).addClass('incorrect');
                $(this).parent().find('.wrong').addClass('active');
                $(this).siblings().attr('disabled', true);
                $(this).parent().parent().find('.evaluation-first').addClass('active');
                $(this).parent().find("[data-id='b']").addClass('correct');
                $('.quiz__correct-evaluation-paragraph').show();
            }
            if ($(this).attr('data-id') == 'c') {
                $(this).addClass('incorrect');
                $(this).parent().find('.wrong').addClass('active');
                $(this).siblings().attr('disabled', true);
                $(this).parent().parent().find('.evaluation-third').addClass('active');
                $(this).parent().find("[data-id='b']").addClass('correct');
                $('.quiz__correct-evaluation-paragraph').show();
            }
        });
    });

    $('.quiz__correct-evaluation-paragraph').click(function() {
        $('.quiz__wrapper').show();
    });

    $('.popup-close').click(function() {
        $('.quiz__wrapper').hide();
        $('.quiz__correct-evaluation-paragraph').hide();
    });

    $('.summary__button').click(function() {
        var container = $('.certificate');
        if (counter >= $('.quiz').length) {
            container.append('<h2>Gratulálunk!</h2>');
            container.append('<p>Válaszaival Ön 100%-ot ért el!</p>');
            container.append('<a href="correct.pdf" download="correct.pdf" class="main-button certificate__button">Oklevél letöltése</a>');
        } else {
            container.append('<h2>Köszönjük, hogy kitöltötte az esettanulmányt</h2>');
            container.append('<p>Válaszaival Ön '+ Math.round((counter / $('.quiz').length) * 100)+'%-ot ért el!</p>');
            container.append('<button class="main-button certificate__button again">Megpróbálom újra</button>');
            $('.again').click(function() {
                location.reload();
            });
        }
    });

});

//HOVER EFFEKT ELTÜNTETÉSE TABLETEKEN
function hasTouch() {
    return 'ontouchstart' in document.documentElement
           || navigator.maxTouchPoints > 0
           || navigator.msMaxTouchPoints > 0;
}

if (hasTouch()) {
    try {
        for (var si in document.styleSheets) {
            var styleSheet = document.styleSheets[si];
            if (!styleSheet.rules) continue;

            for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
                if (!styleSheet.rules[ri].selectorText) continue;

                if (styleSheet.rules[ri].selectorText.match(':hover')) {
                    styleSheet.deleteRule(ri);
                }
            }
        }
    } catch (ex) {}
}