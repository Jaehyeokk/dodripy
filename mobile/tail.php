<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}
?>


  <!-- 풋터영역시작 -->
  <footer id="footer_wrap">
    <h2 class="hidden">푸터영역</h2>
    <div class="footer_top">
      <h3 class="hidden">푸터상단메뉴영역</h3>
      <nav class="footer_top_nav">
        <h4 class="hidden">푸터메뉴</h4>
        <a href="#;">FAQ</a>
        <a href="#;">매장 위치</a>
        <a href="#;">PC버전 보기</a>
      </nav>
    </div>
    <div class="footer_bottom">
      <h3 class="hidden">푸터하단정보영역</h3>
      <div>
        <p class="footer_logo"></p>
      </div>
      <div class="footer_snsbtn">
        <h4 class="hidden">SNS바로가기영역</h4>
        <ul class="footer_sns_list">
          <li><a href="#;"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#;"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#;"><i class="fab fa-youtube"></i></a></li>
          <li><a href="#;"><i class="fas fa-map-marker-alt"></i></a></li>
        </ul>
      </div>
      <address>서울특별시 마포구 노고산동 31-11(신촌 104)<br>신촌녹색예술빌딩 1층 두드립와이커피<br>E-mail : Dodripycoffee@dodripycoffee.co.kr<br>사업자등록번호 : 000-00-00000 대표:두드립</address>
      <p class="copyright">Copyright 2020 DodripY All Rights Reserved.</p>
    </div>
  </footer>

<? /*
<div id="ft">
    <div id="ft_copy">
        <div id="ft_company">
            <a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a>
            <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
            <a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a>
        </div>
        Copyright &copy; <b>소유하신 도메인.</b> All rights reserved.<br>
    </div>
    <div class="ft_cnt">
    	<h2>사이트 정보</h2>
        <p class="ft_info">
        	회사명 : 회사명 / 대표 : 대표자명<br>
			주소  : OO도 OO시 OO구 OO동 123-45<br>
			사업자 등록번호  : 123-45-67890<br>
			전화 :  02-123-4567  팩스  : 02-123-4568<br>
			통신판매업신고번호 :  제 OO구 - 123호<br>
			개인정보관리책임자 :  정보책임자명<br>
		</p>
    </div>
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
    <?php
    if(G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) { ?>
    <a href="<?php echo get_device_change_url(); ?>" id="device_change">PC 버전으로 보기</a>
    <?php
    }

    if ($config['cf_analytics']) {
        echo $config['cf_analytics'];
    }
    ?>
</div>
<script>
jQuery(function($) {

    $( document ).ready( function() {

        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
        
        //상단고정
        if( $(".top").length ){
            var jbOffset = $(".top").offset();
            $( window ).scroll( function() {
                if ( $( document ).scrollTop() > jbOffset.top ) {
                    $( '.top' ).addClass( 'fixed' );
                }
                else {
                    $( '.top' ).removeClass( 'fixed' );
                }
            });
        }

        //상단으로
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });

    });
});
</script>
*/?>

<?php
include_once(G5_PATH."/tail.sub.php");
?>