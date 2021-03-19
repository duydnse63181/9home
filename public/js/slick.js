// ----- Open header-blog--left_bottom--slick ----- //
$('.blog_slick--content').slick({
    prevArrow: '<svg id="i-chevron-left" class="arrow-item arrow-item_prev" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M20 30 L8 16 20 2" /></svg>',
    nextArrow: '<svg id="i-chevron-right" class="arrow-item arrow-item_next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M12 30 L24 16 12 2" /></svg>',
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 3,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
            }
        }
    ]
});
// ----- End header-blog--left_bottom--slick ----- //

