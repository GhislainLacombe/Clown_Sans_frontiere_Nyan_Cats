import './main.scss'

//import './styles/styles.scss'


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

  // const hamburger = document.querySelector('.domino'); //element 

  // const hover = gsap.to('.domino', //animation
  //   { repeat: 2, y:10, yoyo:true, paused:true});
  
  // hamburger.addEventListener('mouseenter', ()=> hover.play());
  // hamburger.addEventListener('mouseleave', ()=> hover.reverse());