$(document).ready(function(){
  visualSwipe(); // 비주얼 스와이프
  reSizeHeight(); // 비디오 높이 , 비주얼높이
})
function visualSwipe(){
  var swiper = new Swiper('.swiper-container', {
    loop:true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
}
function reSizeHeight(){
  heightResize();
  $(window).on("resize",heightResize);
  function heightResize(){
    $("#guide_vid").css({"height":$("#guide_vid embed").innerHeight()});
    $(".swiper-container .swiper-wrapper").css({"height":$(window).innerHeight()});
  }

}