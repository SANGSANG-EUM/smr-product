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

include EUM_INCLUDE_PATH.'/menus_eng.php';
?>

<?php
if(defined('_INDEX_')) { // index에서만 실행
  include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>

<!-- 헤더 시작 { -->
<div id="header" class="header_eng">
  <div class="container">
    <div class="cf inner">
      <h1 class="hd-logo">
        <a href="/eng" title="Go Main page">
          <img src="/source/img/logo.png" alt="혁신형소형모듈원자로기술개발사업단 Innovative Small Modular Reactor Development Agency">
        </a>
      </h1>

      <nav class="hd-gnb">
        <ul class="hd-gnb-list">
          <?php foreach ($sb_menus as $menu) { ?>
          <li class="hd-gnb-item">
            <a href="<?php echo $menu['link'];?>"><?php echo $menu['name'];?></a>
          </li>
          <?php } ?>
        </ul>
      </nav>

      <div class="hd-util">
        <a href="javascript:alert('The page is being prepared.')" class="hd-util-smr" title="i-SMR Opens in new window"> <!-- target="_blank" -->
          <img src="/source/img/home-icon.png" alt="Home Icon">
          i-SMR
        </a>
        <div class="hd-util-box">
          <a href="/" class="hd-util-lang">KOR</a>
          <a href="/eng" class="hd-util-lang active">ENG</a>
        </div>
      </div>

      <button type="button" class="mobile_menu-btn">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>

  <div class="sub-nav-bg"></div>

  <div class="sub-nav">
    <div class="inner">
      <?php foreach ($sb_menus as $menu) { ?>
      <div class="sub-nav-depth1">
        <p class="depth1-name"><?php echo $menu['name'];?></p>
        <?php if ( isset($menu['sb_2menus']) ) { ?>
        <ul class="sub-nav-depth2">
          <?php foreach ($menu['sb_2menus'] as $menu2) { ?>
          <li>
            <a href="<?php echo $menu2['link'];?>" class="depth2-name">
              <span class="text"><?php echo $menu2['name'];?></span>
            </a>
          </li>
          <?php } ?>
        </ul>
        <?php } ?>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<!-- } 헤더 끝 -->

<!-- Mobile Menu { -->
<div id="mobile_menu">
  <div class="container">
    <div class="wrapper">
      <div id="mobile_menu_ct" class="mobile_menu_ct">
        <div class="hd-util">
          <a href="javascript:alert('The page is being prepared.')" class="hd-util-smr" title="i-SMR Opens in new window"> <!-- target="_blank" -->
            <img src="/source/img/home-icon.png" alt="Home Icon">
            i-SMR
          </a>
          <div class="hd-util-box">
            <a href="/" class="hd-util-lang">KOR</a>
            <a href="/eng" class="hd-util-lang active">ENG</a>
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
</div>
<!-- } Mobilell Menu -->



<!-- 콘텐츠 시작 { -->
<div id="contents_dom" class="contents_dom_eng">