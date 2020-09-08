$(document).ready(function(){
  var swiper = new Swiper('.sslider', {
      slidesPerView: 1,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      autoplay: {
         delay: 5000,
       },
    });
  $('.menu a').click(function(){
   
    $('.trigger').toggle();
    $('.menu').toggleClass('round');
    $('.close').toggle();
    $('.drop-down').toggleClass('down');
    
   
  });
});


