<?	
	include "../common.php"; // 루트 공통파일 연결 
	
	$g5['title'] = "Brand"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once('../head.php'); //루트 공통 상단을 연결합니다.
  include_once('header.php'); //각 메인메뉴 카테고리별 상단을 따로 연결합니다. ( 카테고리별 상단을 다르게 제작가능 )
  add_stylesheet('<link rel="stylesheet" href="/brand/brand_jack.css">', 0);
  add_stylesheet('<link rel="stylesheet" href="/css/mediascreen_jack.css">', 0);
?>
	
	<!-- 서브페이지 컨텐츠 내용 추가 -->
  <div id="contents_wrap">
      <!-- story -->
      <section id="story_wrap">
        <h2 class="page_title">Story</h2>
        <div id="space_wrap">
          <section id="space_inner">
            <h3 class="hidden">공간소개</h3>
            <p class="space_img img_fl"></p>
            <section class="story_text">
              <h4 class="story_title">&ldquo; 경험,공간 &rdquo;</h4>
              <p class="story_text">'많은 사람들이 간단한 체험으로 부담 없이커피를 직접 경험하고 느낄 수 있게 하자'는 마음으로 문을 연 카페 'DodripY'는 편안한 분위기에서 커피를 느끼 고, 마시고,  쉴 수 있는 공간을 제공하기 위해 노력합니다.</p>
              <p class="story_botton"><a href="#">SNS 바로가기</a></p>
            </section>
          </section>
        </div>
        <div id="exper_wrap">
          <section id="exper_inner">
            <h3 class="hidden">체험소개</h3>
            <p class="exper_img img_fr"></p>
            <section class="story_text">
              <h4 class="story_title">&ldquo; 부담없는 체험 &rdquo;</h4>
              <p class="story_text">집에서도 쉽게 따라 할 수 있도록 Dripbag 을 이용한 간단한 Hand drip부터 다양한 기구,방법들을 이용한 Hand drip까지 처음 경험하는 사람도 정해진 가이드에 맞춰서 쉽게 따라 할 수 있도록 구성하여 누구나 따라 할 수 있는 부담 없는 체험을 제공하기 위해 노력합니다.</p>
              <p class="story_botton"><a href="#">가이드 바로가기</a></p>
            </section>
          </section>
        </div>
        <div id="blend_wrap">
          <section id="blend_inner">
            <h3 class="hidden">블렌딩소개</h3>
            <p class="blend_img img_fl"></p>
            <section class="story_text">
              <h4 class="story_title">&ldquo; 시그니처 블렌딩 &rdquo;</h4>
              <p class="story_text">5가지 아라비카 100&#37; 원두를 DodripY만의 최적의 배합 비율로 블렌딩하여 가장 맛있는 커피 맛을 구현하였습니다. 또한 신선한 원두만을 사용하기 때문에 그 향과 맛을 그대로 살릴 수 있는 태우지 않는 미디엄 로스팅 방식을 고수합니다.</p>
              <p class="story_botton"><a href="#">원두 둘러보기</a></p>
            </section>
          </section>
        </div>
        <div id="reserv_wrap">
          <section id="reserv_inner">
            <h3 class="hidden">예약소개</h3>
            <p class="reserv_img img_fr"></p>
            <section class="story_text">
              <h4 class="story_title">&ldquo; 간편한 예약 시스템 &rdquo;</h4>
              <p class="story_text">효율적인 Handdrip 체험 예약을 위해 현재 예약 현황을 바로 알 수 있도록 POS와 연동 시스템을 구축하여 PC, Mobile, 전화예약 통합관리가 가능합니다. 지금 바로 예약해 보세요!</p>
              <p class="story_botton"><a href="#">예약 하기</a></p>
            </section>
          </section>
        </div>
      </section>
      <!-- logo -->
      <section id="brandlogo_wrap">
        <h2 class=page_title>Logo</h2>
        <section id="brandlogo">
          <h3 class=hidden>브랜드로고</h3>
          <p class="fontlogo"><img src="/brand/images/logo_fontlogo.jpg" alt="두드립와이폰트로고"></p>
          <p class="symbol"><img src="/brand/images/logo_symbol.jpg" alt="두드립와이심볼"></p>
        </section>
      </section>
      <!-- color -->
      <section id="color_wrap">
        <h2 class="page_title">Color</h2>
        <ul id="color_list">
          <li>
            <p class="color_box"></p>
            <p class="color_info">#7d0022<br>Coffeecherry Red Color</p>
            <p class="color_title">#Main_Color</p>
            <p class="color_text">잘 익은 커피열매처럼 싱그러운 느낌을 주는 레드계열의 색상을 메인 컬러로 사용합니다.</p>
          </li>
          <li>
            <p class="color_box"></p>
            <p class="color_info">#7d0022<br>Coffeecherry Red Color</p>
            <p class="color_title">#Main_Color</p>
            <p class="color_text">잘 익은 커피열매처럼 싱그러운 느낌을 주는 레드계열의 색상을 메인 컬러로 사용합니다.</p>
          </li>
          <li>
            <p class="color_box"></p>
            <p class="color_info">#7d0022<br>Coffeecherry Red Color</p>
            <p class="color_title">#Main_Color</p>
            <p class="color_text">잘 익은 커피열매처럼 싱그러운 느낌을 주는 레드계열의 색상을 메인 컬러로 사용합니다.</p>
          </li>
          <li>
            <p class="color_box"></p>
            <p class="color_info">#7d0022<br>Coffeecherry Red Color</p>
            <p class="color_title">#Main_Color</p>
            <p class="color_text">잘 익은 커피열매처럼 싱그러운 느낌을 주는 레드계열의 색상을 메인 컬러로 사용합니다.</p>
          </li>
        </ul>
      </section>
    </div>
	
<?
	include_once('tail.php'); //각 메인메뉴 카테고리별 하단을 따로 연결합니다. ( 카테고리별 하단을 다르게 제작가능 )
	include_once('../tail.php'); //루트 공통 하단을 연결합니다.
?>