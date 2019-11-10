//Slide Swiper    
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 4,
    spaceBetween: 80,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,

    autoplay: {
      delay: 50000,
      disableOnInteraction: false,
    },

    navigation: {
      nextEl: '.swiper-button-next1',
      prevEl: '.swiper-button-prev1',
    },
  });