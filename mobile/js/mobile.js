$(window).load(function(){
  mobileMenuOpen(); // 모바일메뉴오픈
  visualHeight(); // 비주얼높이
  videoHeight(); // 비디오높이
})
$(document).ready(function(){
  visualSwipe();
})
function mobileMenuOpen(){
  // layerOpen
  var $menuBtn=$(".mobile_menu");
  var $closeBtn=$(".menu_close_btn");
  var $menuWrap=$("#mobile_menu_wrap");
  var $menuBg;
  var isWrapOpen=false;
  // menuOpen
  var $mainMenu=$(".mainmenu_list").children();
  var $subMenu=$(".submenu_list").children();
  var menuIndex=0;
  var closeHeight=55;
  var openHeight=$subMenu.innerHeight()*$subMenu.size();
  init();
  event();
  function init(){
    $menuWrap.hide();
    $menuWrap.css({"width":$(window).innerWidth()*0.9,"height":$(window).innerHeight(),"right":-$menuWrap.innerWidth()});
    $mainMenu.each(function(isMenuOpen,data){$(this).data("isMenuOpen",false)})
  }
  function event(){
    $menuBtn.on("click",openMenuLayer);
    $closeBtn.on("click",closeMenuLayer);
    $mainMenu.on("click",openMainMenu);
    $(window).on("scroll",function(){$menuWrap.css({"width":$(window).innerWidth()*0.9,"height":$(window).innerHeight(),"right":-$menuWrap.innerWidth()})})
  }
  // openLayer
  function openMenuLayer(){
    $menuBg=$("<div class='menu_bg'></div>");
    $menuBg.show().insertAfter($("#header"));
    $("body").css({"overflow":"hidden"});
    $menuWrap.show();
    $menuWrap.stop().animate({"right":0},500,"easeOutCubic");
  }
  function closeMenuLayer(){
    allMenuClose()
    $menuBg.remove();
    $menuWrap.stop().animate({"right":-$menuWrap.innerWidth()},500,"easeOutCubic",function(){$(this).hide()});
    $("body").css({"overflow":"visible"});
  }
  // openMenu
  function openMainMenu(){ 
    menuIndex=$mainMenu.index($(this));
    mainMenuActive(menuIndex);
    mainMenuArrow(menuIndex);
    mainMenuHeight(menuIndex);
  }
  function mainMenuActive(num){ // 메인메뉴 백그라운드 활성화
    if($mainMenu.eq(num).data("isMenuOpen")==false){
      $mainMenu.eq(num).addClass("selected");
    }else{
      $mainMenu.eq(num).removeClass("selected");
    }
  }
  function mainMenuArrow(num){ // 메인메뉴 화살표시 로테이트
    if($mainMenu.eq(num).data("isMenuOpen")==false){
      $mainMenu.eq(num).children(".arrow_btn").addClass("selected");
    }else{
      $mainMenu.eq(num).children(".arrow_btn").removeClass("selected");
    }
  }
  function mainMenuHeight(num){ // 메인메뉴 높이값 조절 서브메뉴 보이기
    if($mainMenu.eq(num).data("isMenuOpen")==false){
      openHeight=$subMenu.innerHeight()*$mainMenu.eq(num).children(".submenu_list").children().size()
      $mainMenu.eq(num).stop().animate({"height":closeHeight+openHeight},300,"easeOutCubic");
      $mainMenu.eq(num).data("isMenuOpen",true);
    }else{
      $mainMenu.eq(num).stop().animate({"height":closeHeight},300,"easeOutCubic");
      $mainMenu.eq(num).data("isMenuOpen",false);
    }
  }
  function allMenuClose(){
    $mainMenu.removeClass("selected");
    $mainMenu.children(".arrow_btn").removeClass("selected");
    $mainMenu.animate({"height":closeHeight},300,"easeOutCubic");
    $mainMenu.data("isMenuOpen",false);
  }
}
function visualSwipe(){
  var swiper = new Swiper('.swiper-container', {
    loop:true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
}
function visualHeight(){
  $(window).on("resize",visualResize);
  function visualResize(){
    $("#visual").css({"height":$("#visual img").innerHeight()})
  }
}
function videoHeight(){
  $(window).on("resize",videoResize);
  function videoResize(){
    $("#guide_vid").css({"height":$("#guide_vid embed").innerHeight()});
  }
}