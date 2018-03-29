
$(document).ready(() => {
    AOS.init({
        duration: 1000
    });

    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 10,
            stretch: 0,
            depth: window.screen.width / 5,
            modifier: window.screen.width < 550 ? 6: 1,
            slideShadows : true,
        },
        slideToClickedSlide:true,
        initialSlide: 1,
        pagination: {
            // el: '.swiper-pagination',
        },
    });
});
