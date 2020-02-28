$(document).ready(function () {
    $('.navOpen').click(function () {
        $(this).addClass('js_clicked');
        $(this).attr('aria-pressed', 'true');
        
        $(this).closest('#nav').find('.mainMenu').addClass('open');
        $(this).closest('#nav').find('.navClose').addClass('js_clicked');
    });

    $('.liNoLink').click(function () {
        $(this).closest('#nav').find('.navClose').removeClass('js_clicked');
        $(this).closest('#nav').find('.mainMenu').removeClass('open');
        $(this).closest('#nav').find('.topLevelItem').removeClass('open');
        $(this).closest('#nav').find('.topLevelItem').attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        $(this).closest('#nav').find('.navOpen').removeClass('js_clicked');
        $(this).closest('#nav').find('.navOpen').attr('aria-pressed', 'false');
    });

    $('.navClose').click(function () {
        $(this).removeClass('js_clicked');
        $(this).closest('#nav').find('.mainMenu').removeClass('open');
        $(this).closest('#nav').find('.topLevelItem').removeClass('open');
        $(this).closest('#nav').find('.topLevelItem').attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        $(this).closest('#nav').find('.navOpen').removeClass('js_clicked');
        $(this).closest('#nav').find('.navOpen').attr('aria-pressed', 'false');
    });

    $('.topLevelItem').click(function () {
        $(this).toggleClass('open');
        $(this).attr('aria-pressed', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
        $(this).closest('.hasSub').find('.subMenu').attr('aria-expanded', function (i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });
       
    $('.mainNav > li').click(function () {
        $(this).toggleClass('.navItemClicked');
    });
});