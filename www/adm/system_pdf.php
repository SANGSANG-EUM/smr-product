<?php
$sub_menu = "300900";
require_once './_common.php';

auth_check_menu($auth, $sub_menu, 'r');

$sql_common = " from system_file a ";
$sql_search = " where (1) ";

if ($is_admin != "super") {
    $sql_common .= " , {$g5['group_table']} b ";
    $sql_search .= " ";
}

if ($stx) {
    $sql_search .= " and ( ";
    switch ($sfl) {
        case "bo_table":
            $sql_search .= " ($sfl like '$stx%') ";
            break;
        case "":
            $sql_search .= " ($sfl = '$stx') ";
            break;
        default:
            $sql_search .= " ($sfl like '%$stx%') ";
            break;
    }
    $sql_search .= " ) ";
}

if (!$sst) {
    $sst  = "sf_title";
    $sod = "";
}

$sql_group = " GROUP BY sf_subtitle ";
$sql_order = " order by $sst $sod ";

$sql = " select count(*) as cnt {$sql_common} {$sql_search} {$sql_group} {$sql_order} ";
$row = sql_fetch($sql);
$total_count = $row['cnt'];

$rows = $config['cf_page_rows'];
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) {
    $page = 1; // 페이지가 없으면 첫 페이지 (1 페이지)
}
$from_record = ($page - 1) * $rows; // 시작 열을 구함

$sql = " select * {$sql_common} {$sql_search} {$sql_group} {$sql_order} limit {$from_record}, {$rows} ";
$result = sql_query($sql);

$listall = '<a href="' . $_SERVER['SCRIPT_NAME'] . '" class="ov_listall">전체목록</a>';

$g5['title'] = '사업안내 파일관리';
require_once './admin.head.php';

$colspan = 15;
?>

<div class="local_ov01 local_ov">
    <?php echo $listall ?>
    <!-- <span class="btn_ov01"><span class="ov_txt">생성된 게시판수</span><span class="ov_num"> <?php echo number_format($total_count) ?>개</span></span> -->
</div>

<form name="fsearch" id="fsearch" class="local_sch01 local_sch" method="get">
    <label for="sfl" class="sound_only">검색대상</label>
    <select name="sfl" id="sfl">
        <option value="bo_table" <?php echo get_selected($sfl, "sf_title", true); ?>>내역사업</option>
        <option value="bo_subject" <?php echo get_selected($sfl, "sf_subtitle"); ?>>중점분야</option>
        <!-- <option value="a.gr_id" <?php echo get_selected($sfl, "a.gr_id"); ?>>그룹ID</option> -->
    </select>
    <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
    <input type="text" name="stx" value="<?php echo $stx ?>" id="stx" required class="required frm_input">
    <input type="submit" value="검색" class="btn_submit">
</form>

<form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="token" value="<?php echo isset($token) ? $token : ''; ?>">

    <div class="tbl_head01 tbl_wrap">
        <table id="forRowspan">
            <caption><?php echo $g5['title']; ?> 목록</caption>
            <thead>
                <tr>
                    <th scope="col">
                        <!-- <label for="chkall" class="sound_only">게시판 전체</label>
                        <input type="checkbox" name="chkall" value="1" id="chkall" onclick="check_all(this.form)"> -->
                    </th>
                    <th scope="col"><?php echo subject_sort_link('a.gr_id') ?>내역사업</a></th>
                    <th scope="col"><?php echo subject_sort_link('bo_table') ?>중점분야</a></th>
                    <th scope="col">관리</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $row = sql_fetch_array($result); $i++) {
                    $one_update = '<a href="./system_pdf_form.php?w=u&amp;sf_title=' . $row['sf_title'] . '&amp;' . $qstr . '" class="btn btn_03">수정</a>';
                    $one_delte  = '<a href="./system_pdf_update.php?w=d&amp;sf_title=' . $row['sf_title'] . '&amp;' . $qstr . '" class="btn btn_02">삭제</a>';
                    $bg = 'bg' . ($i % 2);
                ?>

                    <tr class="<?php echo $bg; ?>">
                        <td class="td_chk">
                            <!-- <label for="chk_<?php echo $i; ?>" class="sound_only"><?php echo get_text($row['bo_subject']) ?></label>
                            <input type="checkbox" name="chk[]" value="<?php echo $i ?>" id="chk_<?php echo $i ?>"> -->
                        </td>
                        <td>
                          <?php echo $row['sf_title']; ?>
                        </td>
                        <td>
                          <?php echo $row['sf_subtitle']; ?>
                        </td>
                        <td class="td_mng td_mng_m">
                            <?php echo $one_update ?>
                            <?php echo $one_delte ?>
                        </td>
                    </tr>
                <?php
                }
                if ($i == 0) {
                    echo '<tr><td colspan="' . $colspan . '" class="empty_table">자료가 없습니다.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="btn_fixed_top">
        <!-- <input type="submit" name="act_button" value="선택수정" onclick="document.pressed=this.value" class="btn_02 btn"> -->
        <?php if ($is_admin == 'super') { ?>
            <!-- <input type="submit" name="act_button" value="선택삭제" onclick="document.pressed=this.value" class="btn_02 btn"> -->
            <a href="./system_pdf_form.php" id="bo_add" class="btn_01 btn">내역사업 추가</a>
        <?php } ?>
    </div>

</form>

<?php echo get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, $_SERVER['SCRIPT_NAME'] . '?' . $qstr . '&amp;page='); ?>

<script>
    function fboardlist_submit(f) {
        if (!is_checked("chk[]")) {
            alert(document.pressed + " 하실 항목을 하나 이상 선택하세요.");
            return false;
        }

        if (document.pressed == "선택삭제") {
            if (!confirm("선택한 자료를 정말 삭제하시겠습니까?")) {
                return false;
            }
        }

        return true;
    }

    $(function() {
        $(".board_copy").click(function() {
            window.open(this.href, "win_board_copy", "left=100,top=100,width=550,height=450");
            return false;
        });
    });

  $(function(){
    $('#forRowspan').each(function() {
        var table = this;
        $.each([2,3,4] /* 합칠 칸 번호 */, function(c, v) {
            var tds = $('>tbody>tr>td:nth-child(' + v + ')', table).toArray();
            var i = 0, j = 0;
            for(j = 1; j < tds.length; j ++) {
                if(tds[i].innerHTML != tds[j].innerHTML) {
                    $(tds[i]).attr('rowspan', j - i);
                    i = j;
                    continue;
                }
                $(tds[j]).hide();
            }
            j --;
            if(tds[i].innerHTML == tds[j].innerHTML) {
                $(tds[i]).attr('rowspan', j - i + 1);
            }
        });
        // 1번 열을 2번 열의 결과를 따라 병합
        $.each(colspanMap, function(j, rows) {
            if (rows.length > 0) {
                var minRow = Math.min.apply(null, rows);
                $('>tbody>tr>td:nth-child(1):eq(' + minRow + ')', table).attr('rowspan', rows.length);
            }
        });
    });
  });
</script>

<?php
require_once './admin.tail.php';
