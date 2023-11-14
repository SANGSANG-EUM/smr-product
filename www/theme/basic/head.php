<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

include EUM_INCLUDE_PATH.'/menus.php';
?>

<?php
if(defined('_INDEX_')) { // index에서만 실행
  include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>

<div class="hd-wr">

  <!-- 사이드바 시작 { -->
  <aside id="hd-aside" class="hd-aside">
    <div class="aside-in">
      <ul class="aside-ul">
        <li class="aside-li">
          <a href="javascript:alert('Coming soon.');" class="aside-btn aside-exp">
            <div class="aside-icon">
              <img src="/source/img/icon-aside_exp.png" alt="">
            </div>
            <p class="aside-txt">
              Explorer
            </p>
          </a>
        </li>
        <li class="aside-li">
          <a href="https://ismr.or.kr/eng/" target="_blank" class="aside-btn aside-site">
            <div class="aside-icon">
              <img src="/source/img/icon-aside_site.png" alt="">
            </div>
            <p class="aside-txt">
              SMR Site
            </p>
          </a>
        </li>
        <li class="aside-li">
          <a href="javascript:alert('Coming soon.');" class="aside-btn aside-lang">
            <div class="aside-icon">
              <img src="/source/img/icon-aside_lang.png" alt="">
            </div>
            <p class="aside-txt">
              KOR
            </p>
          </a>
        </li>
        <li class="aside-li">
          <a href="javascript:void(0);" class="aside-btn aside-top">
            <div class="aside-icon">
              <img src="/source/img/icon-aside_top.png" alt="">
            </div>
            <p class="aside-txt">
              TOP
            </p>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <!-- } 사이드바 끝 -->

  <!-- 헤더 시작 { -->
  <div id="header" class="header">
    <div class="inner">
      <div class="hd-left hd-in">
        <div class="hd-sitemap-btnwr">
          <button type="button" class="hd-sitemap-btn"></button>
        </div>
        <div class="hd-logo">
          <a href="/">
            <img src="/source/img/logo_w.png" alt="i-SMR">
          </a>
        </div>
      </div>
      <div class="hd-right hd-in">
        <ul class="gnb-ul">
          <li class="gnb-li child">
            <a href="/sub/overview">i-SMR</a>
            <div class="gnb-dep2">
              <ul class="gnb-dep2-ul">
                <li class="gnb-dep2-li">
                  <a href="/sub/overview">Overview</a>
                </li>
                <li class="gnb-dep2-li">
                  <a href="javascript:alert('Coming soon.');">SMR explorer</a>
                </li>
                <li class="gnb-dep2-li">
                  <a href="/sub/vision">SMR vision</a>
                </li>
                <li class="gnb-dep2-li">
                  <a href="/sub/features">Features</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="gnb-li child">
            <a href="/sub/partners">About us</a>
            <div class="gnb-dep2">
              <ul class="gnb-dep2-ul">
                <li class="gnb-dep2-li">
                  <a href="/sub/partners">Partners</a>
                </li>
                <li class="gnb-dep2-li">
                  <a href="/sub/energy">K-energy</a>
                </li>
                <li class="gnb-dep2-li">
                  <a href="/sub/history">History</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="gnb-li child">
            <a href="/video">Resources</a>
            <div class="gnb-dep2">
              <ul class="gnb-dep2-ul">
                <li class="gnb-dep2-li">
                  <a href="/video">Videos</a>
                </li>
                <li class="gnb-dep2-li">
                  <a href="javascript:alert('Coming soon.');">Factsheets</a>
                </li>
                <li class="gnb-dep2-li">
                  <a href="javascript:alert('Coming soon.');">Research</a>
                </li>
                <li class="gnb-dep2-li">
                  <a href="/news">News</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="gnb-li">
            <a href="javascript:alert('Coming soon.');">Contact</a>
          </li>
          <li class="gnb-li gnb-smr-li">
            <a href="https://ismr.or.kr/eng/" target="_blank" class="gnb-smr"><img src="/source/img/icon-aside_site.png"
                alt=""><span>SMR Website</span></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- } 헤더 끝 -->

</div>

<!-- 사이트맵 시작 { -->
<div class="sitemap-wr">
  <div class="contents_wrap">
    <div class="sitemap">
      <ul class="sitemap-ul">
        <li class="sitemap-li">
          <div class="sitemap-box">
            <div class="sitemap-link">
              <div class="sitemap-tit"><a href="/sub/overview">i-SMR</a></div>
              <ul class="sitemap-link-ul">
                <li class="sitemap-link-li">
                  <a href="/sub/overview">Overview</a>
                </li>
                <li class="sitemap-link-li">
                  <a href="javascript:alert('Coming soon.');">SMR explorer</a>
                </li>
                <li class="sitemap-link-li">
                  <a href="/sub/vision">SMR vision</a>
                </li>
                <li class="sitemap-link-li">
                  <a href="/sub/features">Features</a>
                </li>
              </ul>
            </div>
            <div class="sitemap-img">
              <img src="/source/img/img-sitemap_box1.png" alt="">
            </div>
          </div>
        </li>
        <li class="sitemap-li">
          <div class="sitemap-box">
            <div class="sitemap-link">
              <div class="sitemap-tit"><a href="/sub/partners">About us</a></div>
              <ul class="sitemap-link-ul">
                <li class="sitemap-link-li">
                  <a href="/sub/partners">Partners</a>
                </li>
                <li class="sitemap-link-li">
                  <a href="/sub/energy">K-energy</a>
                </li>
                <li class="sitemap-link-li">
                  <a href="/sub/history">History</a>
                </li>
              </ul>
            </div>
            <div class="sitemap-img">
              <img src="/source/img/img-sitemap_box1.png" alt="">
            </div>
          </div>
        </li>
        <li class="sitemap-li">
          <div class="sitemap-box">
            <div class="sitemap-link">
              <div class="sitemap-tit"><a href="/video">Resources</a></div>
              <ul class="sitemap-link-ul">
                <li class="sitemap-link-li">
                  <a href="/video">Videos</a>
                </li>
                <li class="sitemap-link-li">
                  <a href="javascript:alert('Coming soon.');">Factsheets</a>
                </li>
                <li class="sitemap-link-li">
                  <a href="javascript:alert('Coming soon.');">Research</a>
                </li>
                <li class="sitemap-link-li">
                  <a href="/news">News</a>
                </li>
              </ul>
            </div>
            <div class="sitemap-img">
              <img src="/source/img/img-sitemap_box1.png" alt="">
            </div>
          </div>
        </li>
        <li class="sitemap-li">
          <div class="sitemap-box">
            <div class="sitemap-link">
              <div class="sitemap-tit"><a href="javascript:alert('Coming soon.');">Contact</a></div>
            </div>
            <div class="sitemap-img">
              <img src="/source/img/img-sitemap_box1.png" alt="">
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- } 사이트맵 끝 -->

<!-- 콘텐츠 시작 { -->
<div id="contents_dom">