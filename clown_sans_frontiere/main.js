import './main.scss'

//import './styles/styles.scss'


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

  //animation 404
  const animation = gsap.timeline({
    defaults: { 
      duration:6,
      ease: 'none',
    }
  })
    .from('.ball__wrapper', {rotate:-360, repeat:-1,})
    .from('.ball', {rotate:360, repeat:-1}, '<') 
    .from('.clown__arms', {rotate:5, duration:1, yoyo: true, repeat: -1}, '<')
    .from('.ball__three', {opacity:0, duration:0.5}, '<')
    .from('.ball__one', {opacity:0, duration:0.5})
    .from('.ball__two', {opacity:0, duration:0.5})
    .from('.ball__four', {opacity:0, duration:0.5})
    
  // const hamburger = document.querySelector('.domino'); //element 

  // const hover = gsap.to('.domino', //animation
  //   { repeat: 2, y:10, yoyo:true, paused:true});
  
  // hamburger.addEventListener('mouseenter', ()=> hover.play());
  // hamburger.addEventListener('mouseleave', ()=> hover.reverse());