<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>
</div><!-- header.php : #contents_dom -->
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 푸터 시작 { -->
<div id="footer" class="cf footer_eng">
  <div class="ft-top-container container">
    <div class="wrapper">
      <div class="rel-site">
        <div class="rel-site-navigation">
          <div class="swiper-button-arrow swiper-button-prev">
            <img src="/source/img/footer-left.png" alt="Previous Icon">
          </div>
          <div class="swiper-button-arrow swiper-button-next">
            <img src="/source/img/footer-right.png" alt="Next Icon">
          </div>
          <div class="swiper-button-arrow swiper-button-pause">
            <img src="/source/img/footer-pause.png" alt="Pause Icon">
          </div>
          <div class="swiper-button-arrow swiper-button-play">
            <img src="/source/img/footer-play.png" alt="Play Icon">
          </div>
        </div>
        <div class="rel-site-slider-wrapper">
          <div class="rel-site-slider swiper-wrapper">
            <a href="https://www.msit.go.kr" target="_blank" class="rel-site-slide swiper-slide" title="Opens in new window">
              <img src="/source/img/rel-site1.png" alt="과학기술정보통신부 Logo">
            </a>
            <a href="https://www.motie.go.kr/" target="_blank" class="rel-site-slide swiper-slide" title="Opens in new window">
              <img src="/source/img/rel-site2.png" alt="산업통상자원부 Logo">
            </a>
            <a href="https://www.nrf.re.kr/" target="_blank" class="rel-site-slide swiper-slide" title="Opens in new window">
              <img src="/source/img/rel-site3.png" alt="한국연구재단 Logo">
            </a>
            <a href="https://www.ketep.re.kr/" target="_blank" class="rel-site-slide swiper-slide" title="Opens in new window">
              <img src="/source/img/rel-site4.png" alt="한국에너지기술평가원 Logo">
            </a>
            <a href="https://www.iris.go.kr/main.do" target="_blank" class="rel-site-slide swiper-slide" title="Opens in new window">
              <img src="/source/img/rel-site5.png" alt="범부처통합연구지원시스템 Logo">
            </a>
            <a href="https://www.khnp.co.kr/main/index.do" target="_blank" class="rel-site-slide swiper-slide" title="Opens in new window">
              <img src="/source/img/rel-site6.png" alt="한국수력원자력(주) Logo">
            </a>
            <a href="https://www.kaeri.re.kr/" target="_blank" class="rel-site-slide swiper-slide" title="Opens in new window">
              <img src="/source/img/rel-site7.png" alt="한국원자력연구원 Logo">
            </a>
            <a href="https://www.kepco-enc.com/portal/index.do" target="_blank" class="rel-site-slide swiper-slide" title="Opens in new window">
              <img src="/source/img/rel-site8.png" alt="한국전력기술(주) Logo">
            </a>
            <a href="https://www.knfc.co.kr/" target="_blank" class="rel-site-slide swiper-slide" title="Opens in new window">
              <img src="/source/img/rel-site9.png" alt="한전원자력연료 Logo">
            </a>
            <a href="https://www.kns.org/" target="_blank" class="rel-site-slide swiper-slide" title="Opens in new window">
              <img src="/source/img/rel-site10.png" alt="사단법인한국원자력학회 Logo">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ft-bt-container container">
    <div class="wrapper m-height">
      <div class="ft-lt">
        <a href="/eng" class="ft-logo" title="Go Main page">
          <img src="/source/img/logo-gray.png" alt="혁신형소형모듈원자로기술개발사업단 Innovative Small Modular Reactor Development Agency">
        </a>
        <p class="ft-addr">(34126) 13F of Science Center, Expo-ro 1, Yuseong-gu, Daejeon</p>
        <p class="ft-copy">Copyrightⓒ 2023 Innovative Small Modular Reactor Development Agency. All Rights Reserved.</p>
      </div>
      <div class="ft-rt">
        <div class="fnb">
          <a href="javascript:alert('The page is being prepared.')" class="fnb-btn">Privacy Policy</a>
          <a href="javascript:alert('The page is being prepared.')" class="fnb-btn">Terms of Service</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- } 푸터 끝 -->

<?php
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");