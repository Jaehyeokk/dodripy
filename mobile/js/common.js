$(document).ready(function(){
  mobileMenuOpen(); // 모바일메뉴오픈
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
  // menuMotionClose
  var startX;
  var endX;
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
    $(window).on("resize",function(){$menuWrap.css({"width":$(window).innerWidth()*0.9,"height":$(window).innerHeight(),"right":-$menuWrap.innerWidth()})})
    // 터치사용
    $menuWrap.on("touchstart",function(e){
      startX=e.originalEvent.touches[0].pageX;
      // alert(startX);
      $menuWrap.on("touchend",function(e){
        endX=e.originalEvent.changedTouches[0].pageX;
        if(startX-endX<-100){
          closeMenuLayer();
        }
      })
    })
  }
  // 마우스사용 
  //   $menuWrap.on("mousedown",function(e){
  //     startX=e.pageX;
  //     $menuWrap.on("mouseup",function(e){
  //       endX=e.pageX;
  //       if(startX-endX<0){
  //         closeMenuLayer();
  //       }
  //     })
  //   })
  // }
  // openLayer
  function openMenuLayer(){
    $menuBg=$("<div class='menu_bg'></div>");
    $menuBg.show().appendTo($("#header"));
    $("body,html").css({"overflow":"hidden"});
    $menuWrap.show();
    $menuWrap.stop().animate({"right":0},500,"easeOutCubic");
    
  }
  function closeMenuLayer(){
    allMenuClose()
    $menuBg.remove();
    $menuWrap.stop().animate({"right":-$menuWrap.innerWidth()},500,"easeOutCubic",function(){$(this).hide()});
    $("body,html").css({"overflow":"visible"});
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