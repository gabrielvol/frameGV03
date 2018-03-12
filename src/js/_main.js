$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.navMain').addClass('topper');
    } else {
        $('.navMain').removeClass('topper');
    }
});

$(document).ready(function () {
    // Hamburger Drawer
    $('.openNav').click(function () {
        $(this).addClass('clicked');
        $(this).closest('#nav').find('.mainMenu').addClass('open');
        $(this).closest('#header').find('.social').addClass('clicked');
        $(this).closest('#nav').find('.modalNav').show( '2000', 'swing', function() {
            $(this).closest('#nav').find('.closeNav').addClass('clicked');
            $(this).closest('#header').find('.logoH').addClass('clicked');
        });
        $(this).attr('aria-pressed', 'true');
    });

    $('.closeNav').click(function () {
        $(this).removeClass('clicked');
        $(this).closest('#header').find('.social').removeClass('clicked');
        $(this).closest('#header').find('.logoH').removeClass('clicked');
        $(this).closest('#nav').find('.modalNav').hide('fast', 'swing');
        $(this).closest('#nav').find('.mainMenu').removeClass('open');
        $(this).closest('#nav').find('.subMenu').removeClass('open');
        $(this).closest('#nav').find('.subMenu').attr('aria-expanded', 'false');
        $(this).closest('#nav').find('.topLevelItem').removeClass('open');
        $(this).closest('#nav').find('.topLevelItem').attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        $(this).closest('#nav').find('.openNav').removeClass('clicked');
        $(this).closest('#nav').find('.openNav').attr('aria-pressed', 'false');
    });

    $('.modalNav').click(function () {
        $(this).closest('#nav').find('.closeNav').removeClass('clicked');
        $(this).closest('#header').find('.social').removeClass('clicked');
        $(this).closest('#header').find('.logoH').removeClass('clicked');
        $(this).hide('fast');
        $(this).closest('#nav').find('.mainMenu').removeClass('open');
        $(this).closest('#nav').find('.subMenu').removeClass('open');
        $(this).closest('#nav').find('.subMenu').attr('aria-expanded', 'false');
        $(this).closest('#nav').find('.topLevelItem').removeClass('open');
        $(this).closest('#nav').find('.topLevelItem').attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        $(this).closest('#nav').find('.openNav').removeClass('clicked');
        $(this).closest('#nav').find('.openNav').attr('aria-pressed', 'false');
    });

    $('.topLevelItem').click(function () {
        $(this).toggleClass('open');
        $(this).closest('.hasSub').find('.subMenu').toggleClass('open');
        $(this).attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        $(this).closest('.hasSub').find('.subMenu').attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });

//    $('.topLevelItem').hover(function () {
//        $(this).closest('.hasSub').find(".subMenu").toggleClass('open');
//    });
//    
//    $('.hasSub').hover(function () {
//        $(this).find(".topLevelItem").attr('aria-expanded', function (i, attr) {
//            return attr === 'true' ? 'false' : 'true';
//        });
//    });
});