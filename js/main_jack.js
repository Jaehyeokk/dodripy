$(window).load(function(){
  mobileReplace() // 해상도 480이하일 때 모바일인덱스로 이동
  mainVisualEffect() // 비주얼슬라이드이펙트
  videoResize() // 가이드섹션 비디오 리사이즈
  marketSlide() // 마켓섹션 상품 슬라이드
  recipeScrollShow() // 레시피섹션 스크롤 애니메이션
  commuScaleEffect() // 커뮤니티섹션 오버시 스케일크기
})
function mobileReplace(){
  resizeLocateMobile();
  $(window).on("resize",resizeLocateMobile);
  function resizeLocateMobile(){
    var windowWidth=$(window).innerWidth();
    if(windowWidth<=480){
      document.location.replace("http://dodripy.dothome.co.kr/mobile")
    }
  }

}
function mainVisualEffect(){
  var $visualWrap=$("#visual_wrap");
  var $visualList=$("#visual_list");
  var $visualLi=$visualList.children();
  var $visualImg=$visualLi.children().find("img");
  var $dot=$(".dot_list").children();
  var $playPauseBtn=$(".play_pause_btn").children();
  var $visPrevBtn=$("#vis_left_btn").children("a");
  var $visNextBtn=$("#vis_right_btn").children("a");
  var visualNum=$visualLi.size();
  var overNum=0;
  var isPlay=true; 
  var visualwidth;
  var timer;
  var textTimer1;
  var textTimer2;
  visualReset();
  slideDotActive(0); // 슬라이드도트 초기 활성화
  slideDotOver(0);  // 슬라이드비주얼 초기 활성화
  startAutoSlide();  // 초기값 오토 슬라이드
  event();
  function visualReset(){
    visualWidth=$(window).innerWidth();
    $visualImg.css({"width":visualWidth})
    $visualLi.css({"width":visualWidth})
    $visualList.css({"width":visualWidth*visualNum});
    $visualWrap.css({"height":$visualImg.innerHeight()});
    $visualList.css({"left":visualWidth*overNum});
  }
  function event(){
    $(window).on("resize",windowReSize);
    $dot.on("click",dotOver);
    $playPauseBtn.on("click",PlayPauseBtn);
    $visPrevBtn.on("click",slidePrev);
    $visNextBtn.on("click",slidePlay);
  }
  function windowReSize(){
    visualReset();
  }
  function dotOver(){ //dot 클릭시 이벤트 함수
    overNum=$dot.index($(this));
    slideDotActive(overNum);
    slideDotOver(overNum);
  }
  function slideDotActive(num){
    $dot.removeClass("selected");
    $dot.eq(num).addClass("selected");
  }
  function slideDotOver(num){
    $visualLi.children(".visualtext").removeClass("selected");
    $visualLi.children(".visualtext").children(".visualtext_title").removeClass("selected");
    $visualLi.children(".visualtext").children(".visualtext_text").removeClass("selected");
    $visualList.stop();
    $visualList.animate({"left":-(visualWidth*num)},300,function(){
      $(this).children().children(".visualtext").addClass("selected");
      var textTimer1=setTimeout(textAniA,500);
      var textTimer2=setTimeout(textAniB,1000);
    });
  }
  function textAniA(){
    $visualLi.eq(overNum).children(".visualtext").children(".visualtext_title").addClass("selected");
  }
  function textAniB(){
    $visualLi.eq(overNum).children(".visualtext").children(".visualtext_text").addClass("selected");
  } 
  function PlayPauseBtn(){
    if(isPlay==true){
      $playPauseBtn.css({"top":2});
      slideStop();
      isPlay=false;
    }else if(isPlay==false){
      $playPauseBtn.css({"top":-13});
      startAutoSlide();
      isPlay=true;
    }
  }
  function startAutoSlide(){
    timer=setInterval(slidePlay,4000);
  }
  function slideStop(){
    clearInterval(timer);
  }
  function slidePlay(){
    overNum++
    if(overNum>=visualNum){
      overNum=0;
    }
    slideDotActive(overNum);
    slideDotOver(overNum);
  }
  function slidePrev(){
    overNum--
    if(overNum<0){
      overNum=visualNum-1;
    }
    slideDotActive(overNum);
    slideDotOver(overNum);
  }
}
function videoResize(){
  $(window).on("resize",resizeVideo);
  function resizeVideo(){
    $("#guide_vid_wrap").css({"height":$("#guide_vid embed").innerHeight()})
  }
}
function marketSlide(){
  var $productList=$("#product_list");
  var $productLi=$("#product_list").children();
  var productCount=$productLi.size();
  var $overBg;
  var currentX;
  var endX=306;
  var lastX;
  var showNum=4;
  init();
  productResize();
  event();
  function init(){
    $productList.css({"width":($productLi.innerWidth()*productCount)+(24*(productCount-1))})
  }
  function productResize(){
    var windowWidth=$(window).innerWidth();
    if(windowWidth<=1340 && windowWidth>980){
      showNum=3;
    }else if(windowWidth<=980 && windowWidth>768){
      showNum=2;
    }else if(windowWidth<=768){
      showNum=1;
    }
  }
  function event(){
    $(window).on("resize",productResize);
    $("#market_left_btn").on("click",prevProduct);
    $("#market_right_btn").on("click",nextProduct);
    $productLi.on("mouseenter",productOver);
    $productLi.on("mouseleave",productOut);
  }
  function prevProduct(){
    currentX=$productList.position().left;
    if(currentX<0){
      $("#product_list:not(:animated)").animate({"left":currentX+endX},300);
    }
  }
  function nextProduct(){
    currentX=$productList.position().left;
    lastX=endX*(productCount-showNum);
    if(currentX>(-lastX)){
      $("#product_list:not(:animated)").animate({"left":currentX-endX},300);
    }
  }
  function productOver(){
    $overBg=$("<div class='contents_bg'><span class='bg_more'><a href='#;'><i class='fas fa-search'></i></a></span><span class='bg_cart'><a href='#;'><i class='fas fa-shopping-cart'></i></a></span><span class='bg_comment'><a href='#;'><i class='fas fa-comment-dots'></i></a></span></div>");
    var productIndex=$productLi.index($(this));
    if(productIndex>0){
      $overBg.appendTo($(this));
      $overBg.stop();
      $overBg.animate({"opacity":1},300,"easeOutCubic");
    }
    $(this).stop();
    $(this).animate({"top":0},300,"easeOutCubic");
  }
  function productOut(){
    $productLi.stop().animate({"top":20},300,"easeOutCubic")
    $overBg.remove();
  }
}
function recipeScrollShow(){
  var $recipeList=$("#recipe_list").children();
  $(window).on("scroll",scrollEvent); //이벤트
  function scrollEvent(){
    var scrollHeight=$(document).scrollTop();
    if(scrollHeight>=1600){
      $recipeList.show();
      for(var i=0; i<$recipeList.length; i++){
        $recipeList.eq(i).animate({"opacity":1,"top":0},1000+(i*700),"easeOutCubic");
      }
    }
  }
}
function commuScaleEffect(){
  var $commuImg=$("#community_img_wrap").children().children("img");
  var commuImgIndex;
  $commuImg.on("mouseenter",IncScaleImg);
  $commuImg.on("mouseleave",RedscaleImg);
  function IncScaleImg(){ 
    $(this).css({"-webkit-transform":"scale("+1.25+")"});
  }
  function RedscaleImg(){
    $commuImg.css({"-webkit-transform":"scale("+1+")","left":0,"top":0,"z-index":0});
  }
}