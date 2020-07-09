<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

add_stylesheet('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.2/css/swiper.min.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/mobile/css/common.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/mobile/css/swiper.css">', 0);
add_javascript('<script src="'.G5_JS_URL.'/modernizr.custom.70111.js"></script>', 1); // overflow scroll 감지
add_javascript('<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.2/js/swiper.min.js"></script>', 1); // overflow scroll 감지
add_javascript('<script src="/mobile/js/common.js"></script>', 1);

?>

  <!-- 스킵메뉴시작 -->
  <ul id="skipmenu">
    <li><a href="#mobile_menu">메뉴바로가기</a></li>
    <li><a href="#contents_wrap">본문바로가기</a></li>
    <li><a href="#footer_wrap">하단바로가기</a></li>
  </ul>
  <!-- 헤더영역시작 -->
  <header id="header">
    <h1 id="logo"><a href="/index.php" title="홈바로가기"><span class="hidden">두드립와이</span><img src="/mobile/images/m_header_logo.png" alt="두드립와이로고"></a></h1>
    <div class="mobile_menu"><span class="hidden">모바일메뉴</span><i class="fas fa-bars"></i></div>
    <nav id="mobile_menu_wrap">
      <h2 class="hidden">모바일메뉴</h2>
      <div id="mobile_menu_top">
        <h3 class="hidden">모바일메뉴상단영역</h3>
        <span class="menu_close_btn"><a href="#;"><i class="fas fa-times"></i></a></span>        
        <div class="login_menu">
	  	  	<?php echo outlogin('basic'); // 외부 로그인 ?>
        </div>
      </div>
      <div id="mobile_menu_middle">
        <h3 class="hidden">모바일메뉴간편아이콘</h3>
        <ul class="easy_icon">
          <li><a href="#;"><i class="fas fa-shopping-cart"></i><span class="middle_icons"><br>장바구니</span></a></li>
          <li><a href="#;"><i class="fas fa-barcode"></i><span class="middle_icons"><br>주문내역</span></a></li>
          <li><a href="#;"><i class="fas fa-envelope-open-text"></i><span class="middle_icons"><br>문의내역</span></a></li>
        </ul>
      </div>
      <div id="mobile_main_menu">
        <h3 class="hidden">모바일메인메뉴</h3>
        <ul class="mainmenu_list">
          <li>Home</li>
          <li>Brand
            <span class="arrow_btn"><i class="fas fa-chevron-down"></i></span>
            <ul class="submenu_list">
              <li><a href="/mobile/brand/brand.php">Story</a></li>
              <li><a href="/mobile/brand/brand.php">Identity</a></li>
            </ul>
          </li>
          <li>Guide
            <span class="arrow_btn"><i class="fas fa-chevron-down"></i></span>
            <ul class="submenu_list">
              <li><a href="#;">가이드 소개</a></li>
              <li><a href="#;">입문 가이드</a></li>
              <li><a href="#;">중급 가이드</a></li>
              <li><a href="#;">응용 가이드</a></li>
            </ul>
          </li>
          <li>Store
            <span class="arrow_btn"><i class="fas fa-chevron-down"></i></span>
            <ul class="submenu_list">
              <li><a href="#;">원두/드립백</a></li>
              <li><a href="#;">커피 용품</a></li>
              <li><a href="#;">기타 용품</a></li>
            </ul>
          </li>
          <li>Community
            <span class="arrow_btn"><i class="fas fa-chevron-down"></i></span>
            <ul class="submenu_list">
              <li><a href="#;">공지사항</a></li>
              <li><a href="#;">뉴스/이벤트</a></li>
              <li><a href="#;">이야기방</a></li>
              <li><a href="#;">레시피/꿀팁</a></li>
              <li><a href="#;">질문/답변</a></li>
            </ul>
          </li>
          <li>Menu
            <span class="arrow_btn"><i class="fas fa-chevron-down"></i></span>
            <ul class="submenu_list">
              <li><a href="#;">매장 위치</a></li>
              <li><a href="#;">메뉴 소개</a></li>
              <li><a href="#;">FAQ</a></li>
              <li><a href="#;">1:1 문의</a></li>
              <li><a href="#;">건의하기</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>