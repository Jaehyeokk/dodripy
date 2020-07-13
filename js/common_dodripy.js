$(document).ready(function(){
  mainMenuOverEffect() // 메인메뉴오버시서브메뉴활성화이펙트
})
function mainMenuOverEffect(){
  var $mainMenu=$("#mainmenu_list").children();
  var $subMenu=$(".submenu_list");
  var $subMenuLiA=$subMenu.children().children("a");
  var $subBg=$(".submenu_bg");
  var $menuBar=$("<span id='menu_bar'></span>");
  var overNum;
  var endX;
  event();
  function event(){
    $mainMenu.on("mouseenter",mainMenuOver);
    $("#header_wrap").on("mouseleave",mainMenuOut);
    $mainMenu.children("a").on("focus",mainMenuOver);
    $subMenuLiA.last().on("focusout",mainMenuOut);
    $subMenuLiA.on("mouseenter",subMenuLiOver);
    $subMenuLiA.on("mouseleave",subMenuLiOut);
  }
  function mainMenuOver(){
    overNum=$mainMenu.index($(this));
    showSubMenu();
    subMenuBar(overNum);
    subMenuAreaActive(overNum);
  }
  function showSubMenu(){
    $menuBar.appendTo("#mainmenu");
    $subBg.stop()
    $subBg.slideDown(200,function(){$subMenu.show()});
    $subMenu.stop();
  }
  function mainMenuOut(){
    $subMenu.stop();
    $subMenu.hide();
    $subBg.stop();
    $subBg.slideUp(200);
    $menuBar.css({"display":"none"});
  }
  function subMenuBar(num){
    endX=($mainMenu.eq(num).position().left+($mainMenu.eq(num).innerWidth()/2))-($menuBar.innerWidth()/2);
    $menuBar.css({"display":"block"});
    $menuBar.stop();
    $menuBar.animate({"left":endX},300);
  }
  function subMenuAreaActive(num){
    $subMenuLiA.css({"opacity":0.5});
    $subMenu.eq(num).children().children("a").css({"opacity":1});
    $subMenu.removeClass("activate")
    $subMenu.eq(num).addClass("activate")
  }
  function subMenuLiOver(){
    $subMenuLiA.removeClass("selected");
    $(this).addClass("selected");
  }
  function subMenuLiOut(){
    $subMenuLiA.removeClass("selected");
  }
}