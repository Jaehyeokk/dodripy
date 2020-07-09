<?php
include_once('../../common.php');
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_MOBILE_PATH.'/head.php');
add_stylesheet('<link rel="stylesheet" type="text/css" href="/mobile/brand/css/brand.css">')
?>

 <!-- 비주얼영역시작 -->
 <section id="brand_vis_wrap">
    <h2 class="hidden">서브비주얼영역</h2>
  </section>
  <!-- 컨텐츠영역시작 -->
  <!-- story -->
  <section id="story_wrap">
    <h2 class="page_title">Story</h2>
    <ul class="story_list">
      <li>
        <p class="story_img"><img src="/mobile/brand/images/story_01_space.png" alt="카페공간"></p>
        <p class="story_title">&ldquo; 경험,공간 &rdquo;</p>
        <p class="story_text">'많은 사람들이 간단한 체험으로 부담 없이 커피를 직접 경험하고 느낄 수 있게 하자'는 마음으로 문을 연 카페 'DodripY'는 편안한 분위기에서 커피를 느끼 고, 마시고, 쉴 수 있는 공간을 제공하기 위해 노력합니다.</p>
        <p class="btn_box"><a class="link_btn" href="#">SNS 바로가기</a></p>
      </li>
      <li>
        <p class="story_img"><img src="/mobile/brand/images/story_02_experience.png" alt="드립체험"></p>
        <p class="story_title">&ldquo; 부담없는 체험 &rdquo;</p>
        <p class="story_text">집에서도 쉽게 따라 할 수 있도록 Dripbag 을 이용한 간단한 Hand drip부터 다양한 기구,방법들을 이용한 Hand drip까지 처음 경험하는 사람 정해진 가이드에 맞춰서 쉽게 따라 할 수 있도록 구성하여 누구나 따라 할 수 있는 부담 없는 체험을 제공하기 위해 노력합니다.</p>
        <p class="btn_box"><a class="link_btn" href="#">가이드 바로가기</a></p>
      </li>
      <li>
        <p class="story_img"><img src="/mobile/brand/images/story_03_blending.png" alt="커피블렌딩"></p>
        <p class="story_title">&ldquo; 시그니처 블렌딩 &rdquo;</p>
        <p class="story_text">5가지 아라비카 100% 원두를 DodripY만의 최적의 배합 비율로 블렌딩하여 가장 맛있는 커피 맛을 구현하였습니다. 또한 신선한 원두만을 사용하기 때문에 그 향과 맛을 그대로 살릴 수 있는 태우지 않는 미디엄 로스팅 방식을 고수합니다.</p>
        <p class="btn_box"><a class="link_btn" href="#">마켓 둘러보기</a></p>
      </li>
      <li>
        <p class="story_img"><img src="/mobile/brand/images/story_04_reserve.png" alt="카페예약"></p>
        <p class="story_title">&ldquo; 간편한 예약 시스템 &rdquo;</p>
        <p class="story_text">효율적인 Handdrip 체험 예약을 위해 현재 예약 현황을 바로 알 수 있도록 POS와 연동 시스템을 구축하여 PC, Mobile, 전화예약 통합관리가 가능합니다. 지금 바로 예약해 보세요!</p>
        <p class="btn_box"><a class="link_btn" href="#">예약 바로가기</a></p>
      </li>
    </ul>
  <!-- logo -->
    <section id="logo_wrap">
      <h2 class="page_title">Logo</h2>
      <p class="contents_logo symbol"><img src="/mobile/brand/images/font_symbol.png" alt="두드립와이심볼"></p>
      <p class="contents_logo fontlogo"><img src="/mobile/brand/images/font_fontlogo.png" alt="두드립와이폰트로고"></p>
    </section>
  <!-- color -->
    <section id="color_wrap">
      <h2 class="page_title">Color</h2>
      <ul class="color_list">
        <li>
          <p class="color_name">#7d0022<br>Coffeecherry Red</p>
          <p class="color_title">#Main_Color</p>
          <p class="color_text">잘 익은 커피열매처럼 싱그러운 느낌을 주는 레드계열의 색상을 메인 컬러로 사용합니다.</p>
        </li>
        <li>
          <p class="color_name">#b79e66<br>Cafelatte Gold</p>
          <p class="color_title">#Point_Color</p>
          <p class="color_text">카페라떼의 부드러운 벨벳거품을 연상시키는 골드계열의 색상을 포인트 컬러로 사용합니다.</p>
        </li>
        <li>
          <p class="color_name">#ffffff<br>Simple White</p>
          <p class="color_title">#Background_Color</p>
          <p class="color_text">어느 컬러와도 잘 어울리는 깔끔한 화이트 색상을 백그라운드 컬러로 사용합니다.</p>
        </li>
        <li>
          <p class="color_name">#434343<br>Soft Black</p>
          <p class="color_title">#Basis_Color</p>
          <p class="color_text">깊고 무거운 블랙 컬러가 아닌 부드러운 느낌을 주는 블랙 컬러를 베이시스 컬러로 사용합니다.</p>
        </li>
      </ul>
    </section>
  </section>

<?php
include_once(G5_MOBILE_PATH.'/tail.php');
?>