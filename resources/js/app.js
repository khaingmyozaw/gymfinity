$('.menu-btn').on('click', function() {
    $('.menu-btn .menu, .menu-btn .close').toggleClass('hidden');
    $('#mobile-menu').toggleClass('right-0');
    $('#mobile-menu').toggleClass('hidden');
});

// Best Seller Animation
let bs_index = 0;
setInterval(() => {

    bs_index = bs_index < 2 ? bs_index + 1 : 0;

    $('.bs-item').addClass('hidden');
    $('.bs-item').removeClass('sm:flex');
    $('.bs-item').removeClass('active');

    $('.bs-item').eq(bs_index).addClass('active')
    $('.bs-item').eq(bs_index).addClass('sm:flex')
    $('.bs-item').eq(bs_index).removeClass('hidden')

}, 4000);
