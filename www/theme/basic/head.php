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
          <button type="button" class="aside-btn aside-exp">
            <div class="aside-icon">
              <img src="/source/img/icon-aside_exp.png" alt="">
            </div>
            <p class="aside-txt">
              Explorer
            </p>
          </button>
        </li>
        <li class="aside-li">
          <a href="" target="_blank" class="aside-btn aside-site">
            <div class="aside-icon">
              <img src="/source/img/icon-aside_site.png" alt="">
            </div>
            <p class="aside-txt">
              SMR Site
            </p>
          </a>
        </li>
        <li class="aside-li">
          <a href="/ko" class="aside-btn aside-lang">
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
            <!-- <img src="" alt=""> -->
            <span style="font-size: clamp(20px, 10vw, 24px); font-weight: 700; color: #fff;">i-SMR</span>
          </a>
        </div>
      </div>
      <div class="hd-right hd-in">
        <ul class="gnb-ul">
          <li class="gnb-li">
            <a href="">i-SMR</a>
          </li>
          <li class="gnb-li">
            <a href="">About us</a>
          </li>
          <li class="gnb-li">
            <a href="">Resources</a>
          </li>
          <li class="gnb-li">
            <a href="">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- } 헤더 끝 -->

</div>

<!-- Mobile Menu { -->
<!-- <div id="mobile_menu">
  <div class="container">
    <div class="wrapper">
      <div id="mobile_menu_ct" class="mobile_menu_ct">
        <div class="hd-util">
          <a href="javascript:alert('준비중입니다.')" class="hd-util-smr" title="i-SMR 홈페이지 새창으로 열림">
            <img src="/source/img/home-icon.png" alt="홈 아이콘">
            i-SMR
          </a>
          <div class="hd-util-box">
            <a href="/" class="hd-util-lang">KOR</a>
            <a href="javascript:alert('준비중입니다.')" class="hd-util-lang active">ENG</a>
          </div>
        </div>
        
        <?php foreach ($sb_menus as $menu) { ?>
        <nav class="mobile_menu-nav">
          <ul class="mobile_menu-dep1">
            <li>
              <a href="javascript:void(0);"><?php echo $menu['name'];?></a>
              <ul class="mobile_menu-dep2">
                <?php foreach ($menu['sb_2menus'] as $menu2) { ?>
                <li>
                  <a href="<?php echo $menu2['link'];?>"><?php echo $menu2['name'];?></a>
                  <ul class="mobile_menu-dep3">
                    <?php foreach ($menu2['sb_3menus'] as $menu3) { ?>
                    <li>
                      <a href="<?php echo $menu3['link'];?>"><?php echo $menu3['name'];?></a>
                    </li>
                    <?php } ?>
                  </ul>
                </li>
                <?php } ?>
              </ul>
            </li>
          </ul>
        </nav>
        <?php } ?>
      </div>
    </div>
  </div>
</div> -->
<!-- } Mobilell Menu -->

<!-- 콘텐츠 시작 { -->
<div id="contents_dom">