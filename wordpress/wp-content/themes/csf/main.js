import './styles.scss'
  // core version + navigation, pagination modules:
  import Swiper, { Navigation, Pagination } from 'swiper';
  // import Swiper and modules styles
  import 'swiper/css';
  import 'swiper/css/navigation';
  import 'swiper/css/pagination';




  // init Swiper:
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 'auto',
    spaceBetween: 40,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: '.swiper-pagination',
    },
  });

  var swiperOrgnisme = new Swiper(".swiper-organisme", {
    slidesPerView: 'auto',
    spaceBetween: 40,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: '.swiper-pagination',
    },
  });