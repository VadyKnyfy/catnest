var new_books = new Swiper('.new-books-slider', {
  slidesPerView: 10,
  spaceBetween: 30,
  navigation: {
    nextEl: '#new-book-right-btn',
    prevEl: '#new-book-left-btn',
  },
  breakpoints: {
    100: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    540: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    810: {
      slidesPerView: 5,
      spaceBetween: 30,
    },
    1173: {
      slidesPerView: 8,
      spaceBetween: 30,
    },
    1350: {
      slidesPerView: 10,
      spaceBetween: 30,
    },
  },
})

var events = new Swiper('.event-slider', {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  autoplay: {
    delay: 9000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
})
