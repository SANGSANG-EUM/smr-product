<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(EUM_INCLUDE_PATH.'/sub_top.php');
include_once(G5_PLUGIN_PATH.'/jquery-ui/datepicker.php');

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<div id="notice_list" class="sub notice contents_wrap">
  <?php sub_top($sb_menus, 'resources', 'news'); ?>

  <div class="sub_contents">
    <div class="container">
      <div class="wrapper">
        <section class="board-top">
          <fieldset class="bo_sch">
            <h3 class="sound_only">검색</h3>
            <form name="fsearch" method="get">
              <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
              <input type="hidden" name="sca" value="<?php echo $sca ?>">
              <input type="hidden" name="sop" value="and">
              <label for="sfl" class="sound_only">검색대상</label>
              <div class="bo_sch_wrap">
                <div class="bo_sch_row">
                  <div class="bo_sch_tit">Period</div>
                  <div class="bo_sch_ct">
                    <div class="sch_bar">
                      <label for="" class="sound_only">Start<strong class="sound_only"> 필수</strong></label>
                      <input type="text" name="fr_date" value="<?php echo $fr_date ?>" id="fr_date" class="sch_date" size="11" maxlength="10">
                      <span class="sch_bar_txt">~</span>
                      <label for="" class="sound_only">End<strong class="sound_only"> 필수</strong></label>
                      <input type="text" name="to_date" value="<?php echo $to_date ?>" id="to_date" class="sch_date" size="11" maxlength="10">
                    </div>
                    <div class="sch_bar_btn">
                      <button type="button" class="sch_period" onclick="getDate('7')">7 days</button>
                      <button type="button" class="sch_period" onclick="getDate('30')">1 month</button>
                      <button type="button" class="sch_period" onclick="getDate('90')">3 months</button>
                    </div>
                  </div>
                </div>
                <div class="bo_sch_row">
                  <div class="bo_sch_tit">Keywords</div>
                  <div class="bo_sch_ct">
                    <select name="sfl" id="sfl">
                      <option value="wr_subject||wr_content" selected="selected">Total</option>
                      <option value="wr_subject">Subject</option>
                      <option value="wr_content">Content</option>
                    </select>
                    <div class="sch_bar">
                      <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
                      <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder="Please enter your search term.">
                    </div>
                  </div>
                </div>
              </div>
              <div class="bo_sch_ctrl">
                <button type="button" class="sch-reset"><img src="/source/img/icon-reset.png" alt=""><span>Reset</span></button>
                <div class="bo_sch_submit">
                  <?php if(isset($_REQUEST['stx']) || $_REQUEST['stx'] != ''){ ?>
                  <a href="/<?php echo $bo_table;?>" class="sch_back">
                    <i class="fa fa-undo" aria-hidden="true"></i>
                  </a>
                  <?php } ?>
                  <button type="submit" value="검색" class="sch_btn">
                    <i class="sch_icon"></i>
                    <span class="">Search</span>
                  </button>
                </div>
              </div>
            </form>
          </fieldset>
        </section>

        <section class="notice-contents">
          <h2 class="sound_only">공지사항 목록</h2>
          <div class="sec_ct">

            <!-- 게시판 페이지 정보 { -->
            <div class="bo_top_info">
              <div id="bo_list_total">
                Total
                <span> <?php echo number_format($total_count) ?></span>
                <!-- <?php //echo $page ?> 페이지 -->
              </div>
              <div class="bo_list_order">
                <img src="/source/img/icon-order.png" alt="">
                <select name="" id="" class="pageSelector" onchange="if (this.value) window.location.href='?newP=' + this.value">
                  <option value="" selected disabled hidden>
                  <?php
                  if ($newP == 10) {
                    echo 'View 10 posts';
                  } else if ($newP == 20) {
                    echo 'View 20 posts';
                  } else if ($newP == 30) {
                    echo 'View 30 posts';
                  } else {
                    echo 'View 10 posts';
                  }
                  ?>
                  </option>
                  <option value='10'<?php echo $newP ==10?'selected':'' ?>>View 10 posts</option>
                  <option value='20'<?php echo $newP ==20?'selected':'' ?>>View 20 posts</option>
                  <option value='30'<?php echo $newP ==30?'selected':'' ?>>View 30 posts</option>
                </select>
              </div>
            </div>
            <!-- } 게시판 페이지 정보 -->

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

                <div class="tbl_head01 tbl_wrap">
                  <table>
                    <caption><?php echo $board['bo_subject'] ?> 목록</caption>
                    <thead>
                    <tr>
                      <?php if ($is_checkbox) { ?>
                      <th scope="col" class="all_chk chk_box">
                        <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);" class="selec_chk">
                        <label for="chkall">
                          <span></span>
                          <b class="sound_only">현재 페이지 게시물  전체선택</b>
                        </label>
                      </th>
                      <?php } ?>
                      <th scope="col">No</th>
                      <th scope="col">Subject</th>
                      <!-- <th scope="col">글쓴이</th> -->
                      <!-- <th scope="col"><?php echo subject_sort_link('wr_hit', $qstr2, 1) ?>조회 </a></th> -->
                      <?php if ($is_good) { ?><th scope="col"><?php echo subject_sort_link('wr_good', $qstr2, 1) ?>추천 </a></th><?php } ?>
                      <?php if ($is_nogood) { ?><th scope="col"><?php echo subject_sort_link('wr_nogood', $qstr2, 1) ?>비추천 </a></th><?php } ?>
                      <th scope="col"><?php echo subject_sort_link('wr_datetime', $qstr2, 1) ?>Date </a></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    for ($i=0; $i<count($list); $i++) {
                      if ($i%2==0) $lt_class = "even";
                      else $lt_class = ""; ?>
                      <tr class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?> <?php echo $lt_class ?>">
                        <?php if ($is_checkbox) { ?>
                        <td class="td_chk chk_box">
                          <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="selec_chk">
                          <label for="chk_wr_id_<?php echo $i ?>">
                            <span></span>
                            <b class="sound_only"><?php echo $list[$i]['subject'] ?></b>
                          </label>
                        </td>
                        <?php } ?>
                        <td class="td_num2">
                        <?php
                        if ($list[$i]['is_notice']) // 공지사항
                            echo '<strong class="notice_icon">공지</strong>';
                        else if ($wr_id == $list[$i]['wr_id'])
                            echo "<span class=\"bo_current\">열람중</span>";
                        else
                            echo $list[$i]['num'];
                        ?>
                        </td>

                        <td class="td_subject" style="padding-left:<?php echo $list[$i]['reply'] ? (strlen($list[$i]['wr_reply'])*10) : '0'; ?>px">
                          <?php
                          if ($is_category && $list[$i]['ca_name']) {
                          ?>
                            <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>
                            <?php } ?>
                            <div class="bo_tit">
                                <a href="<?php echo $list[$i]['href'] ?>">
                                    <?php echo $list[$i]['icon_reply'] ?>
                                    <?php
                                        if (isset($list[$i]['icon_secret'])) echo rtrim($list[$i]['icon_secret']);
                                    ?>
                                    <?php echo $list[$i]['subject'] ?>
                                </a>
                                <?php
                                // if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
                                // if ($list[$i]['file']['count']) { echo '<'.$list[$i]['file']['count'].'>'; }
                                // if (isset($list[$i]['icon_hot'])) echo rtrim($list[$i]['icon_hot']);
                                // if (isset($list[$i]['icon_file'])) echo rtrim($list[$i]['icon_file']);
                                // if (isset($list[$i]['icon_link'])) echo rtrim($list[$i]['icon_link']);
                                ?>
                                <?php if ($list[$i]['comment_cnt']) { ?><span class="sound_only">댓글</span><span class="cnt_cmt"><?php echo $list[$i]['wr_comment']; ?></span><span class="sound_only">개</span><?php } ?>
                            </div>
                        </td>
                        <!-- <td class="td_name sv_use"><?php echo $list[$i]['name'] ?></td> -->
                        <!-- <td class="td_num"><?php echo $list[$i]['wr_hit'] ?></td> -->
                        <?php if ($is_good) { ?><td class="td_num"><?php echo $list[$i]['wr_good'] ?></td><?php } ?>
                        <?php if ($is_nogood) { ?><td class="td_num"><?php echo $list[$i]['wr_nogood'] ?></td><?php } ?>
                        <td class="td_datetime"><i class="gall_date_icon"></i><?php echo date("Y.m.d", strtotime($list[$i]['wr_datetime'])) ?></td>
                      </tr>
                      <?php } ?>
                      <?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table">There is no post.</td></tr>'; } ?>
                    </tbody>
                  </table>
                </div>
                  
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

<script>  
$(function(){
  $(".sch_date").datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: "yy.mm.dd",
    showButtonPanel: true,
    yearRange: "c-99:c+99",
    maxDate: "+0d",
    prevText: 'Prev',
    nextText: 'Next',
    closeText: "Close",
    currentText: "Today",
    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
    dayNamesShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    showMonthAfterYear: true
  });

  $(".sch_date.ko").datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: "yy.mm.dd",
    showButtonPanel: true,
    yearRange: "c-99:c+99",
    maxDate: "+0d",
  });

});

// table hover
$('.tbl_head01 tbody tr').on('mouseleave', function(){
  $('.tbl_head01 tbody tr').css('border-bottom', '1px solid #ddd')
});
$('.tbl_head01 tbody tr').on('mouseenter', function(){
  $(this).css('border-bottom', '1px solid transparent');
  $(this).prev('.tbl_head01 tbody tr').css('border-bottom', '1px solid transparent');
});

// form reset
$('.sch-reset').on('click', function(){
  $('form[name=fsearch]').each(function() {
    this.reset();
  });
});

// 버튼이 클릭되면 'active' 클래스를 추가
$(".sch_period").click(function () {
  $(".sch_period").removeClass("active");
  $(this).addClass("active");
});

// 날짜 검색
function getDate(days) {

  var date1 = $("#fr_date");
  var date2 = $("#to_date");
  
  // 오늘 날짜를 가져오는 함수
  function getToday() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; // January is 0!
    var yyyy = today.getFullYear();

    if (dd < 10) {
      dd = '0' + dd;
    }

    if (mm < 10) {
      mm = '0' + mm;
    }

    return yyyy + '.' + mm + '.' + dd;
  }

  // 지정된 일수 전 날짜를 계산하는 함수
  function getDaysAgo(days) {
    var today = new Date();
    var targetDate = new Date(today);
    targetDate.setDate(today.getDate() - days);
    var dd = targetDate.getDate();
    var mm = targetDate.getMonth() + 1; // January is 0!
    var yyyy = targetDate.getFullYear();

    if (dd < 10) {
      dd = '0' + dd;
    }

    if (mm < 10) {
      mm = '0' + mm;
    }

    return yyyy + '.' + mm + '.' + dd;
  }

  date1.val(getDaysAgo(days));
  date2.val(getToday());
}
</script>