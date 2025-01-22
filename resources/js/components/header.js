import $ from 'jquery';


$(window).on('load', function () {
    const menuMobileElement = $('.menu-mobile');

    window.showMenuMobile = () => showMenuMobile(menuMobileElement);
    window.hideMenuMobile = () => hideMenuMobile(menuMobileElement);

    $('body').on('click', function (event) {
        if (event.target instanceof HTMLBodyElement) {
            menuMobileElement.hasClass('visible') && menuMobileElement.removeClass('visible');
        }
    });
})

function showMenuMobile(menuMobileElement) {
    menuMobileElement.addClass('visible');
}

function hideMenuMobile(menuMobileElement) {
    menuMobileElement.removeClass('visible');
}
