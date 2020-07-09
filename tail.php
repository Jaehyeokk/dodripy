<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

//모바일 접속시 모바일전용 tail.php 파일연동 

/* if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
} */

?>

  </section>
</div>

<!--하단영역시작 -->
  <div id="footer_wrap">
    <footer id="footer_inner">
      <section class="footer_logo">
        <h2><span class="hidden">두드립와이로고</span></h2>
      </section>
      <section class="footer_sns">
        <h2 class="hidden">SNS버튼</h2>
        <div>
          <p class="sns_btn"><a href="#;" title="페이스북"><i class="fab fa-facebook-square fa-4x"></i></a></p>
          <p class="sns_btn"><a href="#;" title="인스타그램"><i class="fab fa-instagram-square fa-4x"></i></a></p>
          <p class="sns_btn"><a href="#;" title="유튜브"><i class="fab fa-youtube-square fa-4x"></i></a></p>
          <p class="sns_btn"><a href="#;" title="트위터"><i class="fab fa-twitter-square fa-4x"></i></a></p>
        </div> 
      </section>
      <section class="footer_info">
        <h2 class="hidden">회사정보</h2>
        <p class="adress">
          서울특별시 마포구 노고산동 31-11(신촌 104)  신촌녹색예술빌딩 1층  두드립와이커피ㅣTEL:02-000-0000<br>E-mail : Dodripycoffee@dodripycoffee.co.kr ㅣ사업자등록번호:000-00-00000ㅣ대표:두드립</p>
        <p class="copyright">Copyright 2020 DodripY All Rights Reserved.</p>
      </section>
    </footer>
  </div>
<!--하단영역끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");
?>