<?	
	include "../common.php"; // 루트 공통파일 연결 
	
	$g5['title'] = "Brand"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once('../head.php'); //루트 공통 상단을 연결합니다.
  include_once('header.php'); //각 메인메뉴 카테고리별 상단을 따로 연결합니다. ( 카테고리별 상단을 다르게 제작가능 )
  add_stylesheet('<link rel="stylesheet" href="/guide/guide_dodripy.css">', 0);
  add_stylesheet('<link rel="stylesheet" href="/css/mediascreen_dodripy.css">', 0);
?>
	
  <!-- 컨텐츠영역시작 -->
  <div id="contents_wrap">
  <!-- About guide -->
      <section id="about_wrap">
        <h2 class="page_title">About Guide</h2>
        <div class="about_inner">
          <ul class="about_list">
            <li>
              <div class="about_img img_fl"></div>
              <div class="about_text">
                <p class="about_text_title">가이드 소개</p>
                <ul class="about_text_list">
                  <li><i class="fas fa-oil-can"></i> 누구나 부담없이 즐길 수 있는 핸드드립 체험</li>
                  <li><i class="fas fa-tablet-alt"></i> 눈으로 보고 바로 따라할 수 있는 동영상 가이드</li>
                  <li><i class="fas fa-magic"></i> 누구나 쉽게 이해할 수 있는 간단하고 쉬운 설명</li>
                  <li><i class="fas fa-user-check"></i> 가이드 세분화로 나에게 맞는 맞춤형 가이드 제공</li>
                </ul>
              </div>
            </li>
            <li>
              <div class="about_img img_fr"></div>
              <div class="about_text">
                <p class="about_text_title red_line">안전한 체험을 위한 안전수칙</p>
                <ul class="about_text_list">
                  <li>ㅇ  뜨거운 물 사용시에는 항상 주위를 살피고 주의하여 행동합니다.</li>
                  <li>ㅇ  주전자의 몸통을 직접적으로 접촉하면 화상을 입을 수 있습니다.</li>
                  <li>ㅇ  화상을 입은 경우 신속히 도움을 요청하여 치료를 받습니다.</li>
                </ul>
            </li>
            <li>
              <div class="about_img img_fl"></div>
              <div class="about_text">
                <p class="about_text_title">가이드 순서</p>
                <ul class="about_text_list">
                  <li><i class="fas fa-oil-can"></i> 부담없이 즐길 수 있는 핸드드립 체험</li>
                  <li><i class="fas fa-tablet-alt"></i> 눈으로 보고 바로 따라할 수 있는 동영상 가이드</li>
                  <li><i class="fas fa-magic"></i> 누구나 쉽게 이해할 수 있는 간단하고 쉬운 설명</li>
                  <li><i class="fas fa-user-check"></i> 가이드 세분화로 나에게 맞는 맞춤형 가이드 제공</li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </div>
	
<?
	include_once('tail.php'); //각 메인메뉴 카테고리별 하단을 따로 연결합니다. ( 카테고리별 하단을 다르게 제작가능 )
	include_once('../tail.php'); //루트 공통 하단을 연결합니다.
?>