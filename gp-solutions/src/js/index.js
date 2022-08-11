const bannerSlider = (it) => {
    const swiper = new Swiper(it, {
        spaceBetween: 30,
        effect: "fade",
        pagination: {
            el: ".banner__pagination",
            clickable: true,
        },
    });
}

const feedbackSlider = (it) => {
    const swiper = new Swiper(it, {
        pagination: {
            el: ".feedback-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
}

window.addEventListener("load", function() {
    const banner = this.document.querySelector('.banner__slider');
    if (banner) bannerSlider(banner);
    const feedback = this.document.querySelector('.feedback__list');
    if (feedback) feedbackSlider(feedback);
})