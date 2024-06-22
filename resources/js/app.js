$('.menu-btn').on('click', function() {
    $('.menu-btn .menu, .menu-btn .close').toggleClass('hidden');
    $('#mobile-menu').toggleClass('right-0');
    $('#mobile-menu').toggleClass('hidden');
});