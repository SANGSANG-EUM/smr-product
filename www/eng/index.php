<?php
include_once $_SERVER["DOCUMENT_ROOT"] . '/common.php';
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head_eng.php'); //header 파일 연결
?>

<div id="main" class="contents_wrap">
  <div id="main-nav">
    <ul class="main-nav-list">
      <li class="main-nav-item">
        <a href="#main-visual" class="main-nav-btn active">Main</a>
      </li>
      <li class="main-nav-item">
        <a href="#main-qkmenu" class="main-nav-btn">Quick</a>
      </li>
      <!-- <li class="main-nav-item">
        <a href="#main-media" class="main-nav-btn">Board</a>
      </li> -->
    </ul>
  </div>
  <div id="main-visual" class="main-section main-navi-section load-style">
    <div class="container">
      <div class="main-visual-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide1">
            <div class="main-visual-ct">
              <p class="main-visual-txt">Innovative Small Modular Reactor <br/>Development Agency</p>
            </div>
          </div>
          <div class="swiper-slide slide2">
            <div class="main-visual-ct">
              <p class="main-visual-txt">Innovative Small Modular Reactor <br/>Development Agency</p>
            </div>
          </div>
          <div class="swiper-slide slide2">
            <div class="main-visual-ct">
              <p class="main-visual-txt">Innovative Small Modular Reactor <br/>Development Agency</p>
            </div>
          </div>
        </div>


        <div class="main-visual-control">
          <div class="main-visual-control_inner">
            <div class="swiper-pagination"></div>
            <div class="main-visual-time">
              <div class="bar">
                <span></span>
              </div>
            </div>
            <button type="button" class="main-visual-arrow main-visual-prev">
              <img src="/source/img/main-arrow-left.png" alt="Previous Icon">
            </button>
            <button type="button" class="main-visual-arrow main-visual-next">
              <img src="/source/img/main-arrow-right.png" alt="Next Icon">
            </button>
            <button type="button" class="main-visual-pause">
              <img src="/source/img/main-pause.png" alt="Pause Icon">
            </button>
            <button type="button" class="main-visual-play">
              <img src="/source/img/main-play.png" alt="Play Icon">
            </button>
          </div>
        </div>

      </div>
    </div>
    <div class="main-scroll">
      <img src="/source/img/main-scroll-icon.png" alt="Mouse Icon">
      <p class="main-scroll-txt">SCROLL</p>
    </div>
  </div>
  <!-- <div id="main-notice" class="main-section">
    <div class="container">
      <div class="wrapper">
        <div class="main-notice-slider">
          <div class="board-card-wrap transparent swiper-wrapper m-height">
            <a href="/notice" class="board-card swiper-slide">
              <div class="board-card-head">
                <span class="category">Notice</span>
                <span class="date"><i>Date</i>2023-08-10</span>
              </div>
              <div class="board-card-body">
                <div class="board-card-inner">
                  <p class="text_row2 subject">Notice subject</p>
                </div>
              </div>
            </a>
            <a href="/notice" class="board-card swiper-slide">
              <div class="board-card-head">
                <span class="category">Notice</span>
                <span class="date"><i>Date</i>2023-08-10</span>
              </div>
              <div class="board-card-body">
                <div class="board-card-inner">
                  <p class="text_row2 subject">Notice subject</p>
                </div>
              </div>
            </a>
            <a href="/notice" class="board-card swiper-slide">
              <div class="board-card-head">
                <span class="category">Notice</span>
                <span class="date"><i>Date</i>2023-08-10</span>
              </div>
              <div class="board-card-body">
                <div class="board-card-inner">
                  <p class="text_row2 subject">Notice subject</p>
                </div>
              </div>
            </a>
            <a href="/notice" class="board-card swiper-slide">
              <div class="board-card-head">
                <span class="category">Notice</span>
                <span class="date"><i>Date</i>2023-08-10</span>
              </div>
              <div class="board-card-body">
                <div class="board-card-inner">
                  <p class="text_row2 subject">Notice subject</p>
                </div>
              </div>
            </a>
            <a href="/notice" class="board-card swiper-slide">
              <div class="board-card-head">
                <span class="category">Notice</span>
                <span class="date"><i>Date</i>2023-08-10</span>
              </div>
              <div class="board-card-body">
                <div class="board-card-inner">
                  <p class="text_row2 subject">Notice subject</p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-navigation">
            <div class="swiper-button-arrow swiper-button-prev">
              <img src="/source/img/half-arrow-left-gray1.png" alt="Previous Icon">
              PREV
            </div>
            <div class="swiper-button-arrow swiper-button-next">
              NEXT
              <img src="/source/img/half-arrow-right-gray1.png" alt="Next Icon">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <div id="main-qkmenu" class="main-section main-navi-section">
    <div class="container">
      <div class="wrapper">
        <div class="main-qkmenu-list">
          <a href="/eng/sub/milestone" class="main-qkmenu-item">
            <div class="main-qkmenu-icon main-qkmenu-icon-1"></div>
            <p class="main-qkmenu-text">Milestone</p>
          </a>
          <!-- <a href="/sub/organization" class="main-qkmenu-item">
            <div class="main-qkmenu-icon main-qkmenu-icon-2"></div>
            <p class="main-qkmenu-text">조직도</p>
          </a> -->
          <a href="/eng/sub/innovation" class="main-qkmenu-item">
            <div class="main-qkmenu-icon main-qkmenu-icon-3"></div>
            <p class="main-qkmenu-text">Innovative <br/>Design</p>
          </a>
          <a href="/eng/sub/technology" class="main-qkmenu-item">
            <div class="main-qkmenu-icon main-qkmenu-icon-4"></div>
            <p class="main-qkmenu-text">Innovative <br/>Technology</p>
          </a>
          <a href="/eng/sub/uniqueness" class="main-qkmenu-item">
            <div class="main-qkmenu-icon main-qkmenu-icon-5"></div>
            <p class="main-qkmenu-text">Uniqueness</p>
          </a>
          <!-- <a href="/library" class="main-qkmenu-item">
            <div class="main-qkmenu-icon main-qkmenu-icon-6"></div>
            <p class="main-qkmenu-text">자료실</p>
          </a>
          <a href="/faq" class="main-qkmenu-item">
            <div class="main-qkmenu-icon main-qkmenu-icon-7"></div>
            <p class="main-qkmenu-text">FAQ</p>
          </a> -->
        </div>
      </div>
    </div>
  </div>
  <!-- <div id="main-media" class="main-section main-navi-section">
    <div class="container">
      <div class="wrapper">
        <div class="main-media-ct">
          <div class="main-media-top">
            <p class="title">Media Room</p>
            <div class="tab">
              <ul class="tab-list">
                <li class="tab-item" rel="">
                  <button type="button" class="tab-btn active">All</button>
                </li>
                <li class="tab-item" rel=".filter-news">
                  <button type="button" class="tab-btn">사업단 소식</button>
                </li>
                <li class="tab-item" rel=".filter-press">
                  <button type="button" class="tab-btn">i-SMR 보도자료</button>
                </li>
                <li class="tab-item" rel=".filter-newsletter">
                  <button type="button" class="tab-btn">SMR 뉴스레터</button>
                </li>
              </ul>
              
            </div>
          </div>
          <div class="main-media-slider-wrap">
            <div class="main-media-slider">
              <div class="board-card-wrap shadow swiper-wrapper m-height">
                <a href="/news" class="board-card swiper-slide filter-news" data-filter="filter-news">
                  <div class="board-card-head">
                    <span class="category">사업단 소식</span>
                    <span class="date"><i>Date</i>2023-08-10</span>
                  </div>
                  <div class="board-card-body">
                    <div class="board-card-inner">
                      <p class="text_row2 subject">게시판 제목이 들어가는 영역입니다. 게시판 제목영역입니다. 게시판 제목이 들어가는 영역입니다. 게시판 제목이 들어가는 영역입니다.</p>
                      <p class="text_row2 content">갤러리게시판 내용영역입니다. 갤러리게시판 내용영역입니다. 갤러리게시판 내용영역입니다. 갤러리게시판 내용영역입니다. </p>
                    </div>
                  </div>
                </a>
                <a href="/press" class="board-card swiper-slide filter-press" data-filter="filter-press">
                  <div class="board-card-head">
                    <span class="category">SMR 뉴스레터</span>
                    <span class="date"><i>Date</i>2023-08-10</span>
                  </div>
                  <div class="board-card-body">
                    <div class="board-card-inner">
                      <p class="text_row2 subject">게시판 제목이 들어가는 영역입니다. 게시판 제목영역입니다.</p>
                      <p class="text_row2 content">갤러리게시판 내용영역입니다. 갤러리게시판 내용영역입니다.</p>
                    </div>
                  </div>
                </a>
                <a href="/press" class="board-card swiper-slide filter-press" data-filter="filter-press">
                  <div class="board-card-head">
                    <span class="category">i-SMR 보도자료</span>
                    <span class="date"><i>Date</i>2023-08-10</span>
                  </div>
                  <div class="board-card-body">
                    <div class="board-card-inner">
                      <p class="text_row2 subject">게시판 제목이 들어가는 영역입니다. 게시판 제목영역입니다.</p>
                      <p class="text_row2 content">갤러리게시판 내용영역입니다. 갤러리게시판 내용영역입니다.</p>
                    </div>
                  </div>
                </a>
                <a href="/press" class="board-card swiper-slide filter-press" data-filter="filter-press">
                  <div class="board-card-head">
                    <span class="category">i-SMR 보도자료</span>
                    <span class="date"><i>Date</i>2023-08-10</span>
                  </div>
                  <div class="board-card-body">
                    <div class="board-card-inner">
                      <p class="text_row2 subject">게시판 제목이 들어가는 영역입니다. 게시판 제목영역입니다.</p>
                      <p class="text_row2 content">갤러리게시판 내용영역입니다. 갤러리게시판 내용영역입니다.</p>
                    </div>
                  </div>
                </a>
                <a href="/press" class="board-card swiper-slide filter-press" data-filter="filter-press">
                  <div class="board-card-head">
                    <span class="category">i-SMR 보도자료</span>
                    <span class="date"><i>Date</i>2023-08-10</span>
                  </div>
                  <div class="board-card-body">
                    <div class="board-card-inner">
                      <p class="text_row2 subject">게시판 제목이 들어가는 영역입니다. 게시판 제목영역입니다.</p>
                      <p class="text_row2 content">갤러리게시판 내용영역입니다. 갤러리게시판 내용영역입니다.</p>
                    </div>
                  </div>
                </a>
                <a href="/press" class="board-card swiper-slide filter-press" data-filter="filter-press">
                  <div class="board-card-head">
                    <span class="category">i-SMR 보도자료</span>
                    <span class="date"><i>Date</i>2023-08-10</span>
                  </div>
                  <div class="board-card-body">
                    <div class="board-card-inner">
                      <p class="text_row2 subject">게시판 제목이 들어가는 영역입니다. 게시판 제목영역입니다.</p>
                      <p class="text_row2 content">갤러리게시판 내용영역입니다. 갤러리게시판 내용영역입니다.</p>
                    </div>
                  </div>
                </a>
                <a href="/press" class="board-card swiper-slide filter-press" data-filter="filter-press">
                  <div class="board-card-head">
                    <span class="category">i-SMR 보도자료</span>
                    <span class="date"><i>Date</i>2023-08-10</span>
                  </div>
                  <div class="board-card-body">
                    <div class="board-card-inner">
                      <p class="text_row2 subject">게시판 제목이 들어가는 영역입니다. 게시판 제목영역입니다.</p>
                      <p class="text_row2 content">갤러리게시판 내용영역입니다. 갤러리게시판 내용영역입니다.</p>
                    </div>
                  </div>
                </a>
                <a href="/newsletter" class="board-card swiper-slide filter-newsletter" data-filter="filter-newsletter">
                  <div class="board-card-head">
                    <span class="category">SMR 뉴스레터</span>
                    <span class="date"><i>Date</i>2023-08-10</span>
                  </div>
                  <div class="board-card-body">
                    <div class="board-card-inner">
                      <p class="text_row2 subject">게시판 제목이 들어가는 영역입니다. 게시판 제목영역입니다. 게시판 제목이 들어가는 영역입니다. 게시판 제목이 들어가는 영역입니다.</p>
                      <p class="text_row2 content">갤러리게시판 내용영역입니다. 갤러리게시판 내용영역입니다. 갤러리게시판 내용영역입니다. 갤러리게시판 내용영역입니다. </p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="main-media-bot">
                <div class="swiper-navigation">
                  <div class="swiper-button-arrow swiper-button-prev">
                    <img src="/source/img/half-arrow-left-gray2.png" alt="이전 화살표">
                    PREV
                  </div>
                  <div class="swiper-button-arrow swiper-button-next">
                    NEXT
                    <img src="/source/img/half-arrow-right-gray2.png" alt="다음 화살표">
                  </div>
                </div>
                <a href="/news" class="main-media-more">LEARN MORE<i>이동</i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</div>

<?php
include_once(G5_THEME_PATH.'/tail_eng.php'); //footer 파일 연결