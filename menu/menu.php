<?	
	include "../common.php"; // 루트 공통파일 연결 
	
	$g5['title'] = "Brand"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once('../head.php'); //루트 공통 상단을 연결합니다.
  include_once('header.php'); //각 메인메뉴 카테고리별 상단을 따로 연결합니다. ( 카테고리별 상단을 다르게 제작가능 )
  add_stylesheet('<link rel="stylesheet" href="/menu/menu_dodripy.css">', 0);
  add_stylesheet('<link rel="stylesheet" href="/css/mediascreen_dodripy.css">', 0);
?>
	
  <!-- 컨텐츠영역시작 -->
  <div id="contents_wrap">
    <h2 class="page_title">Map</h2>
    <div id="dodripy_map_wrap">
      <div id="dodripy_map"></div>
      <div class="map_text_wrap">
        <p class="map_title">찾아오시는 길</p>
        <p class="map_text">서울특별시 마포구 노고산동 31-11(신촌 104) 신촌녹색예술빌딩 1층 두드립와이커피<br>지하철 2호선 신촌역 6번출구 앞 위치</p>
      </div>
    </div>
  </div>













<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=25563d49ea9932e40045432080aecfdf"></script>
<script>
var mapContainer = document.getElementById('dodripy_map'), // 지도를 표시할 div 
    mapOption = { 
        center: new kakao.maps.LatLng(37.55473850288712,126.93753173010744), // 지도의 중심좌표
        level: 1 // 지도의 확대 레벨
    };

// 지도를 표시할 div와  지도 옵션으로  지도를 생성합니다
var map = new kakao.maps.Map(mapContainer, mapOption);

// 일반 지도와 스카이뷰로 지도 타입을 전환할 수 있는 지도타입 컨트롤을 생성합니다
var mapTypeControl = new kakao.maps.MapTypeControl();
// 지도에 컨트롤을 추가해야 지도위에 표시됩니다
// kakao.maps.ControlPosition은 컨트롤이 표시될 위치를 정의하는데 TOPRIGHT는 오른쪽 위를 의미합니다
map.addControl(mapTypeControl, kakao.maps.ControlPosition.TOPRIGHT);
// 지도 확대 축소를 제어할 수 있는  줌 컨트롤을 생성합니다
var zoomControl = new kakao.maps.ZoomControl();
map.addControl(zoomControl, kakao.maps.ControlPosition.RIGHT);

// 마커가 표시될 위치입니다 
var markerPosition  = new kakao.maps.LatLng(37.55473850288712,126.93753173010744); 
// 마커를 생성합니다
var marker = new kakao.maps.Marker({
    position: markerPosition
});
// 마커가 지도 위에 표시되도록 설정합니다
marker.setMap(map);
// 아래 코드는 지도 위의 마커를 제거하는 코드입니다
// marker.setMap(null);   
</script>


<?
	include_once('tail.php'); //각 메인메뉴 카테고리별 하단을 따로 연결합니다. ( 카테고리별 하단을 다르게 제작가능 )
	include_once('../tail.php'); //루트 공통 하단을 연결합니다.
?>