<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

// 모바일 접속시 모바일전용 head.php 파일연동 

/* if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
} */

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');


add_stylesheet('<link rel="stylesheet" type="text/css" href="/css/common_jack.css">', 0);
add_stylesheet('<link rel="stylesheet" type="text/css" href="/css/mediascreen_jack.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/store/store_dodripy.css">', 0);
add_javascript('<script src="/js/common_jack.js"></script>', 0);

?>

<!-- 상단영역시작 -->
      <?/*
      <!-- 검색영역시작 -->
        <div class="hd_sch_wr">
            <fieldset id="hd_sch">
                <legend>사이트 내 전체검색</legend>
                <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
                <input type="hidden" name="sfl" value="wr_subject||wr_content">
                <input type="hidden" name="sop" value="and">
                <label for="sch_stx" class="sound_only">검색어 필수</label>
                <input type="text" name="stx" id="sch_stx" maxlength="20" placeholder="검색어를 입력해주세요">
                <button type="submit" id="sch_submit" value="검색"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
                </form>
                <script>
                function fsearchbox_submit(f)
                {
                    if (f.stx.value.length < 2) {
                        alert("검색어는 두글자 이상 입력하십시오.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }
                    // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
                    var cnt = 0;
                    for (var i=0; i<f.stx.value.length; i++) {
                        if (f.stx.value.charAt(i) == ' ')
                            cnt++;
                    }
                    if (cnt > 1) {
                        alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }
                    return true;
                }
                </script>
            </fieldset> 
            <?php echo popular(); // 인기검색어, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정  ?>
        </div>
    */?>
    <!-- 스킵메뉴시작 -->
    <ul id="skipmenu">
      <li><a href="#mainmenu" title="메뉴바로가기">메뉴바로가기</a></li>
      <li><a href="#guide_inner" title="본문바로가기">본문바로가기</a></li>
      <li><a href="#footer_wrap" title="하단바로가기">하단바로가기</a></li>
    </ul>
    <!-- 헤더영역시작 -->
    <div id="header_wrap">
      <header id="header_inner">
        <h1 id="logo"><a href="/index.php" title="홈화면바로가기"><img src="/images/logo.gif" alt="두드립와이로고"></a><span class="hidden">두드립와이</span></h1>
        <nav id="loginmenu">
          <h2 class="hidden">로그인메뉴</h2>
          <ul id="loginmenu_list">        
            <?php if ($is_member) {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php" title="정보수정페이지로이동">Edit</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php" title="로그아웃">Log out</a></li>
            <?php if ($is_admin) {  ?>
            <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>" title="관리자설정페이지바로가기">Admin</a></li>
            <?php }  ?>
            <?php } else {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/register.php" title="회원가입페이지바로가기">Sign up</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php" title="로그인페이지바로가기">Log in</a></li>
            <?php }  ?>
        </ul>
        </nav>
        <nav id="mainmenu">
          <h2 class="hidden">메인메뉴</h2>
          <ul id="mainmenu_list">
            <li><a href="/brand/brand.php" title="브랜드페이지바로가기">Brand</a>
              <ul class="submenu_list">
                <li><a href="/brand/brand.php">Story</a></li>
                <li><a href="/brand/brand.php#brandlogo_wrap">Identity</a></li>
              </ul>
            </li>
            <li><a href="/guide/guide.php" title="가이드페이지바로가기">Guide</a>
              <ul class="submenu_list">
                <li><a href="/guide/guide.php">가이드 소개</a></li>
                <li><a href="/bbs/board.php?bo_table=guideA">입문 가이드</a></li>
                <li><a href="/bbs/board.php?bo_table=guideB">중급 가이드</a></li>
                <li><a href="/bbs/board.php?bo_table=guideC">응용 가이드</a></li>
              </ul>
            </li>
            <li><a href="/bbs/board.php?bo_table=storeA">Store</a>
            <ul class="submenu_list">
                <li><a href="/bbs/board.php?bo_table=storeA">원두&#47;드립백</a></li>
                <li><a href="/bbs/board.php?bo_table=storeB">드립 용품</a></li>
                <li><a href="/bbs/board.php?bo_table=storeC">기타 재료</a></li>
              </ul>
            </li>
            <li><a href="#">Community</a>
              <ul class="submenu_list">
                <li><a href="/empty/empty.html">공지사항</a></li>
                <li><a href="/empty/empty.html">뉴스&#47;이벤트</a></li>
                <li><a href="/empty/empty.html">이야기방</a></li>
                <li><a href="/empty/empty.html">레시피/꿀팁</a></li>
                <li><a href="/empty/empty.html">질문&#47;답변</a></li>
              </ul>
            </li>
            <li><a href="#">Menu</a>
              <ul class="submenu_list">
                <li><a href="/empty/empty.html">매장 위치</a></li>
                <li><a href="/empty/empty.html">메뉴 소개</a></li>
                <li><a href="/empty/empty.html">FAQ</a></li>
                <li><a href="/empty/empty.html">1&#58;1 문의</a></li>
                <li><a href="/empty/empty.html">건의하기</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <nav id="burgermenu">
          <h2 id="burgermenu_icon"><a href="#;"><i class="fas fa-bars fa-2x"></i><span class="hidden">모바일메뉴아이콘</span></a></h2>
        </nav>
      </header>
      <div class="submenu_bg"></div>
    </div>
    <?/*
    <!--로그인영역시작-->
        <ul id="topmenu_list">        
            <?php if ($is_member) {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
            <?php if ($is_admin) {  ?>
            <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
            <?php }  ?>
            <?php } else {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
            <?php }  ?>
        </ul>
    <!--로그인영역끝-->
    */?>       
<?

		/*
			서브 컨텐츠 페이지를 제외한  게시판, faq, 회원관련 등 그누보드 내부 프로그램 페이지 상단연결
		    ( 각 서브 컨텐츠 페이지 상단은 각 메인메뉴별 카테고리폴더 (해당테마폴더 > html폴더 > sub폴더 복사해서 생성 ) 안에 header.php 에서 각각 설정 수정가능 )			

		*/

		if(!defined('_INDEX_') && $title_view != "no"){ // if문을 수정하지 마십시오.			

			// 게시판 타이틀 정비
			if($bo_table){
				$g5['title'] = $board['bo_subject'];
			}
			
			//faq 타이틀 정비
			if($fm_id){
				$g5['title'] = "자주하시는 질문";
			}
			
			
	?>


    <!-- 비주얼영역시작 -->
	  <section id="board_visual">
	    <div id="store_vis_wrap"></div>
	    <div id="store_menu_wrap">
	      <nav class="store_menu">
	        <h2 class="hidden">브랜드메뉴</h2>
	        <ul class="store_menu_list">
	          <li><a href="/bbs/board.php?bo_table=storeA">원두/드립백</a></li>
	          <li><a href="/bbs/board.php?bo_table=storeB">드립 용품</a></li>
	          <li><a href="/bbs/board.php?bo_table=storeC">기타 재료</a></li>
	        </ul>
	      </nav>
	    </div>
	  </section>
    <?
    if ($bo_table=='storeA') echo ('<style type="text/css"> .store_menu_list li:nth-child(1) a{font-weight:bold} </style>') ;
    if ($bo_table=='storeB') echo ('<style type="text/css"> .store_menu_list li:nth-child(2) a{font-weight:bold} </style>') ;
    if ($bo_table=='storeC') echo ('<style type="text/css"> .store_menu_list li:nth-child(3) a{font-weight:bold} </style>') ;
		?>

		<div id="board_wrapper">
			<section id="board_contents">
      <?
        if ($bo_table=='storeA') echo ('<p class="page_title">Whole Bean & Drip Bag</p>') ;
        if ($bo_table=='storeB') echo ('<p class="page_title">Drip product</p>') ;
        if ($bo_table=='storeC') echo ('<p class="page_title">etc</p>') ; 
      ?>  
			<!-- 회원가입및게시판 컨텐츠 레이아웃시작 -->




	<?}?>
