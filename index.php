<?php
include_once('./_common.php');
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}
// 모바일접속시 모바일전용 index.php 파일 연동 

 if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
} 
include_once(G5_PATH.'/head.php');

add_stylesheet('<link rel="stylesheet" type="text/css" href="/css/main_dodripy.css">', 0);
add_stylesheet('<link rel="stylesheet" type="text/css" href="/css/mediascreen_dodripy.css">', 0);
add_javascript('<script src="/js/main_dodripy.js"></script>', 0);
?>

<!-- 메인비주얼영역시작 -->
  <div id="visual_wrap">
    <h2 class="hidden">비주얼영역</h2>
    <ul id="visual_list">
      <li>
        <a href="#"><img src="/images/visual_01.jpg" alt="두드립유어셀프"></a>
        <div id="vis_textarea1" class="visualtext">
          <p id="vis_title1" class="visualtext_title">Do <span class="yellow">drip</span> yourself !</p>
          <p id="vis_text1" class="visualtext_text">내가 직접 내린 커피를 느껴보세요 !<br> 경험하지 못했던 다양한 향기를 느낄 수 있습니다.</p>
        </div>
      </li>
      <li><a href="#"><img src="/images/visual_02.jpg" alt="두드립유어셀프"></a>
        <div id="vis_textarea2" class="visualtext">
          <p id="vis_title2" class="visualtext_title">텍스트를 준비중입니다.</p>
          <p id="vis_text2" class="visualtext_text">빠른 시일 내에 준비하겠습니다.</p>
        </div>
      </li>
      <li><a href="#"><img src="/images/visual_03.jpg" alt="두드립유어셀프"></a>
        <div id="vis_textarea3" class="visualtext">
          <p id="vis_title3" class="visualtext_title">텍스트를 준비중입니다.</p>
          <p id="vis_text3" class="visualtext_text">빠른 시일 내에 준비하겠습니다.</p>
        </div>
      </li>
    </ul>
    <ul class="dot_list">
      <li><a href="#;"></a></li>
      <li><a href="#;"></a></li>
      <li><a href="#;"></a></li>
    </ul>
    <div class="play_pause_btn"><a href="#;"><img src="/images/playpause.png" alt="정지시작버튼"></a></div>
    <div id="vis_left_btn" class="visual_lr_btn"><a href="#;"><i class="fas fa-chevron-left fa-5x"></i></a></div>
    <div id="vis_right_btn" class="visual_lr_btn"><a href="#;"><i class="fas fa-chevron-right fa-5x"></i></a></div>
  </div>
<!-- 메인컨텐츠영역시작 -->
 <div id="contents_wrap">
 <!-- 컨텐츠_가이드 -->
    <div id="guide_wrap">
      <section id="guide_inner">
        <h2 class="page_title">Guide</h2>
        <div id="guide_vid_wrap">
          <section id="guide_vid">
            <h3 class="hidden">가이드동영상</h3>
            <!-- ?autoplay=1&mute=1 -->
            <embed width="1920" height="1080" src="https://www.youtube.com/embed/5lXtnsxrKhM?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen/>
          </section>
        </div>
        <section id="guide_box">
          <h3 class="hidden">가이드바로가기박스</h3>
          <p class="box_title">&ldquo; 쉽게 따라하는 체험 가이드 &rdquo;</p>
          <p class="box_text">간단한 설명과 5분 내외의 짧은 동영상으로<br>누구나 부담 없이 쉽게 핸드 드립을 즐길 수 있습니다.</p>
          <p class="guide_box_btn box_btn"><a href="#;">가이드 바로가기</a></p>
        </section>
        <section id="reserve_box">
          <h3 class="hidden">예약바로가기박스</h3>
          <p class="box_title">&ldquo; 간편한 예약 시스템 &rdquo;</p>
          <p class="box_text">지금의 예약현황을 확인할 수 있습니다.</p>
          <p class="guide_box_btn box_btn"><a href="#;">예약하기</a></p>
        </section>
      </section>
    </div>
  <!-- 컨텐츠_마켓 -->
    <div id="market_wrap">
      <section id="market_inner">
        <h2 class="page_title">Market</h2>
        <section id="product">
          <h3 class="hidden">판매상품리스트</h3>
          <ul id="product_list">
            <li>
              <div class="market_container">
                <p class="market_box_title">Signature Blending</p>
                <p class="market_box_text">5가지 100%아라비카 원두를<br>최적의 배합 비율로 블랜딩하여<br>가장 맛있는 커피 맛을 구현하였습니다.</p>
                <p class="market_box_btn box_btn"><a href="#;">더보기</a></p>
              </div>
            </li>
            <li>
              <p class="product_img"><a href="#;"><img src="/images/bean01.gif" alt="모카블렌드원두사진"></a></p>
              <p class="product_name"><a href="#;">Mocha Blend 100% 아라비카 원두 1kg</a></p>
              <p class="product_price"><a href="#;">25&comma;000</a></p>
            </li>
            <li>
              <p class="product_img"><a href="#;"><img src="/images/dripbag01.gif" alt="케냐AA드립백사진"></a></p>
              <p class="product_name"><a href="#;">케냐 AA Dripbag(25ea)</a></p>
              <p class="product_price"><a href="#;">25&comma;000</a></p>
            </li>
            <li>
              <p class="product_img"><a href="#;"><img src="/images/dripbag02.gif" alt="에티오피아예가체프G1드립백사진"></a></p>
              <p class="product_name"><a href="#;">에티오피아 예가체프 G1 Dripbag(25ea)</a></p>
              <p class="product_price"><a href="#;">25&comma;000</a></p>
            </li>
            <li>
              <p class="product_img"><a href="#;"><img src="/images/bean01.gif" alt="모카블렌드원두사진"></a></p>
              <p class="product_name"><a href="#;">Mocha Blend 100% 아라비카 원두 1kg</a></p>
              <p class="product_price"><a href="#;">25&comma;000</a></p>
            </li>
            <li>
              <p class="product_img"><a href="#;"><img src="/images/dripbag01.gif" alt="케냐AA드립백사진"></a></p>
              <p class="product_name"><a href="#;">케냐 AA Dripbag(25ea)</a></p>
              <p class="product_price"><a href="#;">25&comma;000</a></p>
            </li>
            <li>
              <p class="product_img"><a href="#;"><img src="/images/dripbag02.gif" alt="에티오피아예가체프G1드립백사진"></a></p>
              <p class="product_name"><a href="#;">에티오피아 예가체프 G1 Dripbag(25ea)</a></p>
              <p class="product_price"><a href="#;">25&comma;000</a></p>
            </li>
          </ul>
        </section>
      </section>
      <div id="market_left_btn" class="market_lr_btn"><a href="#;"><i class="fas fa-chevron-left fa-5x"></i></a></div>
      <div id="market_right_btn" class="market_lr_btn"><a href="#;"><i class="fas fa-chevron-right fa-5x"></i></a></div>
    </div>
  <!-- 컨텐츠_레시피 -->
    <div id="recipe_wrap">
      <section id="recipe_inner">
        <h2 class="page_title">Recipe</h2>
        <section id="recipe">
          <h3 class="hidden">레시피목록</h3>
          <ul id="recipe_list">
            <li>
              <p class="recipe_img"><a href="#;"><img src="/images/dalgona.gif" alt="달고나커피사진"></a></p>
              <p class="recipe_text"><a href="#;">400번을 넘게 저어야만 맛볼 수 있다는 요즘 핫한 커피</a></p>
              <p class="recipe_title"><a href="#;">달고나커피</a></p>
            </li>
            <li>
              <p class="recipe_img"><a href="#;"><img src="/images/bangtan.gif" alt="방탄커피사진"></a></p>
              <p class="recipe_text"><a href="#;">총알도 막아낼 만큼의 강한 에너지를 얻을 수 있다는 커피</a></p>
              <p class="recipe_title"><a href="#;">방탄커피</a></p>
            </li>
            <li>
              <p class="recipe_img"><a href="#;"><img src="/images/eins.gif" alt="아인슈페너사진"></a></p>
              <p class="recipe_text"><a href="#;">한 번 빠지면 계속 찾게 되는 달콤함, 비엔나커피라고 잘 알려진 커피</a></p>
              <p class="recipe_title"><a href="#;">아인슈페너</a></p>
            </li>
          </ul>
        </section>
      </section>
    </div>
  <!-- 컨텐츠_커뮤니티 -->
  <div id="community_wrap">
    <section id="community_inner">
      <h2 class="page_title">Community</h2>
      <section id="community_img_wrap">
        <h3 class="hidden">커뮤니티이미지및바로가기박스</h3>
        <p id="couple_img"><img src="/images/comu_couple.gif" alt="커피마시는커플사진"></p>
        <p id="man_img"><img src="/images/commu_man.gif" alt="커피마시는남자사진"></p>
        <p id="woman_img"><img src="/images/commu_woman.gif" alt="커피마시는여자사진"></p>
      </section>
      <section id="text_img">
        <h3 class="hidden">커뮤니티설명및바로가기박스</h3>
        <p class="com_box_title">‘커피향’ 가득한 커뮤니티에 ‘나만의 커피향’을 남겨 보세요</p>
        <p class="com_box_text">최신소식부터, 이벤트, 레시피, 꿀팁, 이야기, 질문,답변까지<br>많은 사람들의 향기가 남아있는 커뮤니티<br>여러분의 활동들이 하나, 둘 모여<br>커뮤니티에 자국을 남기고 향기를 남기면<br>우리의 커피향기가 은은하게  지속됩니다.<br>세상에 하나뿐인 자신만의 커피자국을, 커피향을 남겨보세요!</p>
        <p class="com_box_btn box_btn"><a href="#;">커뮤니티 바로가기</a></p>
      </section>
    </section>
  </div>

<?/* 이 함수가 바로 최신글을 추출하는 역할을 합니다.
  사용방법 : latest(스킨이름, 게시판아이디, 출력라인, 글자수);
  주의: 스킨이름은 게시판 스킨이 아닌 최근게시물 스킨이름 ( skin/latest폴더안 ) 지정 
  테마의 스킨을 사용하려면 theme/basic 과 같이 지정 */ ?>
  <div id="latest_wrap">
    <div class="latest_inner">
      <div class="latest_notice">
        <? echo latest("basic", "communityA", 5, 25); ?>
      </div>
      <div class="latest_news">
        <? echo latest("basic", "communityB", 5, 25); ?>
      </div>
      <div class="latest_recipe">
        <? echo latest("basic", "communityC", 5, 25); ?>
      </div>
    </div>
  </div>


<?php
include_once(G5_PATH.'/tail.php');
?>