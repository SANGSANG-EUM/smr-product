<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(EUM_INCLUDE_PATH.'/sub_top.php');

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<div id="press_list" class="sub press">
  <?php sub_top($sb_menus, 'media', 'press'); ?>

  <div class="sub_contents">
    <div class="container">
      <div class="wrapper">

        <section class="board-top">
          <h2 class="sound_only">검색 및 작성버튼<?php echo $sfl;?></h2>
          <div class="sec_ct">
            <div class="board_total">
              <span>Total</span>
              <?php echo number_format($total_count) ?>
            </div>
            <form name="fsearch" id="fm-sch" method="get">
              <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
              <input type="hidden" name="sca" value="<?php echo $sca ?>">
              <input type="hidden" name="sop" value="and">
              <div class="sch_wrap">
                <select name="sfl" id="sfl" class="nc-sel sch-select">
                  <option value="wr_subject||wr_content" <?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>전체</option>
                  <option value="wr_subject" <?php echo get_selected($sfl, 'wr_subject'); ?>>제목</option>
                  <option value="wr_content" <?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
                </select>
                <input type="text" name="stx" id="stx" class="sch-keyword" value="<?php echo stripslashes($stx) ?>" required size="25" maxlength="20" placeholder=" 검색어를 입력하세요.">
                <button type="submit" class="sch-submit" title="검색하기"></button>
              </div>
              <?php if(isset($_REQUEST['stx']) || $_REQUEST['stx'] != ''){ ?>
              <a href="/notice" class="return-btn" title="전체검색"></a>
              <?php } ?>
            </form>
          </div>
        </section>

        <section class="notice-contents">
          <h2 class="sound_only">공지사항 목록</h2>
          <div class="sec_ct">
            <div class="board-list textType-a">
              <form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
                <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
                <input type="hidden" name="stx" value="<?php echo $stx ?>">
                <input type="hidden" name="spt" value="<?php echo $spt ?>">
                <input type="hidden" name="sca" value="<?php echo $sca ?>">
                <input type="hidden" name="sst" value="<?php echo $sst ?>">
                <input type="hidden" name="sod" value="<?php echo $sod ?>">
                <input type="hidden" name="page" value="<?php echo $page ?>">
                <input type="hidden" name="sw" value="">

                <?php if ($is_checkbox) { ?>
                <div id="gall_allchk" class="all_chk chk_box">
                  <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);" class="selec_chk">
                  <label for="chkall">
                    <span></span>
                    <b class="sound_only">현재 페이지 게시물 </b> 전체선택
                  </label>
                </div>
                <?php } ?>

                <div class="board-list_wrap">
                  <?php for ($i=0; $i<count($list); $i++) { ?>
                  <a href="<?php echo $list[$i]['href'] ?>" class="media-card">
                    <div class="media-card-head">
                      <span class="date"><i></i><?php echo date("Y-m-d", strtotime($list[$i]['wr_datetime'])); ?></span>

                      <?php if ($is_checkbox) { ?>
                      <div class="chk_box">
                        <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="selec_chk">
                        <label for="chk_wr_id_<?php echo $i ?>">
                          <span></span>
                          <b class="sound_only"><?php echo $list[$i]['subject'] ?></b>
                        </label>
                      </div>
                      <?php } ?>
                    </div>
                    <div class="media-card-body">
                      <div class="media-card-inner">
                        <p class="text_row2 subject"><?php echo $list[$i]['subject']; //글 제목 ?></p>
                        <p class="text_row2 content"><?php echo $list[$i]['wr_content']; //글 제목 ?></p>
                      </div>
                    </div>
                  </a>
                  <?php 
                  }
                  if (count($list) == 0) {
                    echo '<div class="empty_table">자료가 없습니다.</div>';
                  }
                  ?>
                  
                </div>

                <!-- 페이지 -->
                <?php echo $write_pages; ?>
                <!-- 페이지 -->
                

                <?php if ($list_href || $is_checkbox || $write_href) { ?>
                <div class="bo_fx">
                  <div class="bo_fx_wrap">
                    <?php if ($list_href || $write_href) { ?>
                    <ul class="btn_bo_user">
                      <?php if ($is_checkbox) { ?>
                      <li>
                        <button type="submit" name="btn_submit" class="bo_btn2" value="선택삭제" onclick="document.pressed=this.value">선택삭제</button>
                      </li>
                      <?php } ?>
                      <?php if ($write_href) { ?>
                      <li>
                        <a href="<?php echo $write_href ?>" class="bo_btn1">작성하기</a>
                      </li>
                      <?php } ?>
                    </ul>	
                    <?php } ?>
                  </div>
                </div>
                <?php } ?>

                
              </form>
            </div>
          </div>
        </section>

      </div>
    </div>
  </div>

</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}

// 게시판 리스트 관리자 옵션
jQuery(function($){
    $(".btn_more_opt.is_list_btn").on("click", function(e) {
        e.stopPropagation();
        $(".more_opt.is_list_btn").toggle();
    });
    $(document).on("click", function (e) {
        if(!$(e.target).closest('.is_list_btn').length) {
            $(".more_opt.is_list_btn").hide();
        }
    });
});
</script>
<?php } ?>