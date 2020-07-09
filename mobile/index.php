<?php

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

include_once(G5_MOBILE_PATH.'/head.php');


add_stylesheet('<link rel="stylesheet" href="/mobile/css/main.css">', 0);
add_javascript('<script src="/mobile/js/main.js"></script>', 0);

?>


<!-- 비주얼영역시작 -->
<section id="visual">
    <h2 class="hidden">메인비주얼영역</h2>
    <div class="swiper-container">
      <ul class="swiper-wrapper visuals">
        <li class="swiper-slide vis1">
          <div class="vis_title vis_title1">
            <p class="vis_t vis_t1">여러분은 오늘</p>
            <p class="vis_t vis_t2"><span class="cofred">바리스타</span> 입니다.</p>
          </div>
          <div class="vis_title vis_title2">
            <p class="vis_t vis_t1"><span class="yellow">Do Drip!</span></p>
            <p class="vis_t vis_t2">나만의 커피를 내려보세요!</p>
          </div>
        </li>
        <li class="swiper-slide vis2">
          <div class="vis_title vis_title1">
            <p class="vis_t vis_t1"><span class="cofred">매혹적인 커피향</span>을</p>
            <p class="vis_t vis_t2">직접 경험해보세요.</p>
          </div>
          <div class="vis_title vis_title2">
            <p class="vis_t vis_t1">분쇄부터 추출까지</p>
            <p class="vis_t vis_t2">커피를 직접 느껴 보세요!</p>
          </div>
        </li>
        <li class="swiper-slide vis3">
          <div class="vis_title vis_title1">
            <p class="vis_t vis_t1">디저트는</p>
            <p class="vis_t vis_t2"><span class="cofred">사랑</span> 입니다.</p>
          </div>
          <div class="vis_title vis_title2">
            <p class="vis_t vis_t1">좋은 사람과</p>
            <p class="vis_t vis_t2">편안한 공간에서 함께해요!</p>
          </div>
        </li>
      </ul>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>
  <!-- 컨텐츠영역시작 -->
  <section id="contents_wrap">
    <h2 class="hidden">전체컨텐츠영역</h2>
    <!-- guide -->
    <section id="guide_wrap">
      <h3 class="page_title">Guide</h3>
      <article class="guide_vid">
        <h4 class="hidden">가이드동영상</h4>
        <embed width="1920" height="1080" src="https://www.youtube.com/embed/5lXtnsxrKhM?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen/>
      </article>
      <div class="guide_btn_wrap btn_box">
        <h4 class="hidden">바로가기버튼영역</h4>
        <p class="guide_btn"><a class="link_btn" href="#;">가이드 바로가기</a></p>
        <p class="reserve_btn"><a class="link_btn" href="#;">예약 바로가기</a></p>
      </div>
    </section>
    <!-- market -->
    <section id="market_wrap">
      <h3 class="page_title">Market</h3>
      <ul class="product_list">
        <li>
          <p class="product_img"><a href="#;"><img src="/mobile/images/signatureblend_bean.png" alt="시그니처블렌드원두"></a></p>
          <p class="product_name"><a href="#;">Signature Blend<br>원두(1kg)</a></p>
          <p class="product_price"><a href="#;">25,000원</a></p>
        </li>
        <li>
          <p class="product_img"><a href="#;"><img src="/mobile/images/mochablend_bean.png" alt="모카블렌드원두"></a></p>
          <p class="product_name"><a href="#;">Mocha Blend<br>원두(1kg)</a></p>
          <p class="product_price"><a href="#;">25,000원</a></p>
        </li>
        <li>
          <p class="product_img"><a href="#;"><img src="/mobile/images/signatureblend_dripbag.png" alt="시그니처블렌드드립백"></a></p>
          <p class="product_name"><a href="#;">Signature Blend<br>드립백(25ea)</a></p>
          <p class="product_price"><a href="#;">25,000원</a></p>
        </li>
        <li>
          <p class="product_img"><a href="#;"><img src="/mobile/images/mochablend_dripbag.png" alt="모카블렌드드립백"></a></p>
          <p class="product_name"><a href="#;">Mocha Blend<br>드립백(25ea)</a></p>
          <p class="product_price"><a href="#;">25,000원</a></p>
        </li>
      </ul>
      <div class="market_btn_wrap btn_box">
        <h4 class="hidden">마켓바로가기버튼영역</h4>
        <p class="market_btn"><a class="link_btn" href="#;">마켓 더 보기</a></p>
      </div>
    </section>
    <!-- recipe -->
    <section id="recipe_wrap">
      <h3 class="page_title">Recipe</h3>
      <ul class="recipe_list">
        <li>
          <p class="recipe_img"><a href="#;"><img src="/mobile/images/01_dalgona.png" alt="달고나커피"></a></p>
          <p class="recipe_title"><a href="#;">달고나커피</a></p>
          <p class="recipe_text"><a href="#;">400번을 넘게 저어야만 맛볼 수 있다는 요즘 핫한 커피</a></p>
        </li>
        <li>
          <p class="recipe_img"><a href="#;"><img src="/mobile/images/02_bangtan.png" alt="방탄커피"></a></p>
          <p class="recipe_title"><a href="#;">방탄커피</a></p>
          <p class="recipe_text"><a href="#;">총알도 막아낼 만큼의 강한 에너지를 얻을 수 있다는 커피</a></p>
        </li>
        <li>
          <p class="recipe_img"><a href="#;"><img src="/mobile/images/03_einspanner.png" alt="아인슈패너"></a></p>
          <p class="recipe_title"><a href="#;">아인슈패너</a></p>
          <p class="recipe_text"><a href="#;">한 번 빠지면 계속 찾게 되는 달콤함, 비엔나커피라고 잘 알려진 커피</a></p>
        </li>
      </ul>
      <div class="recipe_btn_wrap btn_box">
        <h4 class="hidden">레시피바로가기버튼영역</h4>
        <p class="recipe_btn"><a class="link_btn" href="#;">레시피 더 보기</a></p>
      </div>
    </section>
    <!-- community -->
    <section id="community_wrap">
      <h3 class="page_title">Community</h3>
      <div class="meaningless">
        <h4 class="hidden">의미없는커뮤니티사진</h4>
        <p class="man_img"></p>
        <p class="woman_img"></p>
      </div>
      <div class="com_textbox">
        <h4 class="hidden">커뮤니티설명링크박스</h4>
        <p class="commu_title">‘나만의 커피향’을 남겨 보세요 !</p>
        <p class="commu_text">사람들의 향기가 남아있는 커뮤니티 입니다.<br>여러분의 커피가 커뮤니티에 닿으면<br>향기가 되어 커피향기가 은은하게 지속됩니다.<br>세상에 하나뿐인 나만의 커피향을 남겨보세요 !</p>
        <p class="commu_btn"><a class="link_btn" href="#;">커뮤니티 바로가기</a></p>
      </div>
    </section>
  </section>

<?php
include_once(G5_MOBILE_PATH.'/tail.php');
?>