<?php
$sub_menu = "300900";
require_once './_common.php';

auth_check_menu($auth, $sub_menu, 'w');

if ($is_admin != 'super' && $w == '') {
  alert('최고관리자만 접근 가능합니다.');
}

$html_title = '사업안내 파일관리';
$gr_id_attr = '';
$sound_only = '';


function getData($opt, $res="", $order="") {
  $data = [];

  if($order != "") {
    $od_opt = " ORDER BY {$order} ";
  } else {
    "";
  }
  $sf_sql = " SELECT * FROM system_file WHERE sf_title = '{$_GET['sf_title']}' {$opt} {$od_opt} ";
  
  if($res == "fetch") {
    $sf_res = sql_fetch($sf_sql);
  } else {
    $sf_res = sql_query($sf_sql);
  }
  
  $data = $sf_res;
  
  return $data;
}


$g5['title'] = $html_title;
require_once './admin.head.php';

?>

<style>
.del_btn {
  height: 18px;
  border: 0;
  border-radius: 5px;
  padding: 0 8px;
  font-weight: bold;
  font-size: 0.6rem;
  vertical-align: middle;
}
</style>

<form name="fboardgroup" id="fboardgroup" action="./system_pdf_update.php" onsubmit="return fboardgroup_check(this);" method="post" autocomplete="off" enctype="multipart/form-data">
  <input type="hidden" name="w" value="<?php echo $w ?>">
  <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
  <input type="hidden" name="stx" value="<?php echo $stx ?>">
  <input type="hidden" name="sst" value="<?php echo $sst ?>">
  <input type="hidden" name="sod" value="<?php echo $sod ?>">
  <input type="hidden" name="page" value="<?php echo $page ?>">
  <input type="hidden" name="token" value="">

  <div class="tbl_frm01 tbl_wrap">
      <h2 class="h2_frm">내역사업</h2>
      <?php if($popup != 'yes') echo $pg_anchor; ?>
      <div class="local_desc">
          <input type="text" name="sf_title" class="frm_input" value="<?php echo ($w == 'u') ? $_GET['sf_title'] : '' ?>" size="100">
      </div>
      <h2 class="h2_frm">노출 순서</h2>
      <?php 
        $num_opt = " GROUP BY sf_title = '{$_GET['sf_title']}'"; 
        $num_res = getData($num_opt, "fetch");
      ?>
      <div class="local_desc">
        <?php echo help("* 숫자가 작을 수록 상단에 노출됩니다"); ?>
        <input type="text" name="sf_order" class="frm_input" value="<?php echo ($w == 'u') ? $num_res['sf_order'] : "" ?>" size="20">
      </div>
      <?php echo help("※ 파일명이 제목으로 사용됩니다.")?>

    <?php if($w=='u') {
      $sub_opt = " GROUP BY sf_subtitle ";
      $sub_od = " sf_suborder ";
      $sub_res = getData($sub_opt, "", $sub_od);
      for($sub=0; $sub_row = sql_fetch_array($sub_res); $sub++) { 
        if($sub > 0) {
          // $sub_btn = "<button type='button' class='btn btn02 file_minus' onclick='removeTable(this)'>분야 삭제</button>";
          $sub_btn = "<a href='./system_pdf_update.php?w=d&sf_title={$sub_row['sf_title']}&sf_subtitle={$sub_row['sf_subtitle']}'>
                        <button type='button'  class='btn btn02 file_minus'>분야 삭제</button>
                      </a>";
        } else {
          $sub_btn = "<button type='button' class='btn btn02' id='file_plus_{$sub}' onclick='addTable()'>분야추가</button>";
        }
      ?>
      <table class="">
        <tr>
          <th>
            <label for="sf_subtitle">중점분야</label>
          </th>
          <td>
            <input type="text" name="sf_subtitle_<?php echo $sub?>" id="sf_subtitle_<?php echo $sub?>" value="<?php echo $sub_row['sf_subtitle']; ?>" class="frm_input" size="60"/>
            <input type="hidden" name="sf_suborder_<?php echo $sub?>" id="sf_suborder_<?php echo $sub?>" value="<?php echo $sub_row['sf_suborder']; ?>">
          </td>
          <td>
            <?php echo $sub_btn;?>
          </td>
        </tr>
        <?php 
          for($file=1; $file <= 4; $file++) { 
            $file_opt = " AND sf_subtitle = '{$sub_row['sf_subtitle']}' AND sf_no = {$file}-1";
            $file_od = " sf_no ";
            $file_res = getData($file_opt, "fetch", $file_od);
          ?>
          <tr class="div_tb_tr fileb">
            <th>
              파일 #<?php echo $file ?>
            </th>
            <td class="" colspan="2">
              <?php if(!$file_res['sf_idx'] ) { ?>
                <label for="upload_btn_<?php echo $sub ."_". $file?>" class="btn_file">파일선택</label>
                <input type="file" name="file_<?php echo $sub ."_". $file?>" id="upload_btn_<?php echo $sub ."_". $file?>" class="" />
              <?php } else { ?>
                <span class="file_del">
                  <label for="sf_file_del<?php echo $sub ."_". $file?>"><?php echo $file_res['sf_source'];  ?>
                  <a href="./system_pdf_update.php?w=d&sf_idx=<?php echo $file_res['sf_idx']."&sf_title=".$sub_row['sf_title']; ?>" id="sf_file_del<?php echo $sub ."_". $file?>" value="1">  <button type="button" class="del_btn">삭제</button></label>
                </span>
              <?php } ?>
            </td>
          </tr>
        <?php } ?>
      </table>
    <?php }} else { ?>
    <table>
      <tr>
        <th>
          <label for="sf_subtitle">중점분야</label>
        </th>
        <td>
          <input type="text" name="sf_subtitle_0" id="sf_subtitle_0" class="frm_input" size="60"/>
        </td>
        <td>
          <button type="button" class="btn btn02" id="file_plus" onclick="addTable()">분야추가</button>
        </td>
      </tr>
      <?php for($i=1; $i <= 4; $i++) {?>
        <tr class="div_tb_tr fileb">
          <th>
            파일 #<?php echo $i ?>
          </th>
          <td class="" colspan="2">
            <label for="upload_btn_0_<?php echo $i?>" class="btn_file">파일선택</label>
            <input type="file" name="file_0_<?php echo $i?>" id="upload_btn_0_<?php echo $i?>" class="" />
          </td>
        </tr>
      <?php } ?>
    </table>
    <?php } ?>
    
  </div>

  <section id="anc_spp_info">
  </section>

  <div class="btn_fixed_top">
    <a href="./system_pdf.php?<?php echo $qstr ?>" class="btn btn_02">목록</a>
    <input type="submit" class="btn_submit btn" accesskey="s" value="확인">
  </div>

</form>

<script>
  function fboardgroup_check(f) {
    f.action = './system_pdf_update.php';
    return true;
    // return false;
  }


var tableCounter = 1; // 테이블 번호를 초기화

function addTable() {
  var tblWrap = document.querySelector('.tbl_frm01.tbl_wrap'); // tbl_frm01 tbl_wrap 요소 선택
  var newTable = document.createElement('table'); // 새로운 테이블 요소 생성

  // 테이블 내용 작성
  newTable.innerHTML = `
    <tr>
      <th>
        <label for="sf_subtitle_${tableCounter}">중점분야</label>
      </th>
      <td>
        <input type="text" name="sf_subtitle_${tableCounter}" class="frm_input" size="60"/>
        <input type="hidden" name="sf_suborder_${tableCounter}" value="${tableCounter}"/>
      </td>
      <td>
        <button type="button" class="btn btn02 file_minus" onclick="removeTable(this)">분야 삭제</button>
      </td>
    </tr>
    ${generateFileRows(4, tableCounter)} 
  `;

  // 테이블을 추가한 후 분야 추가 버튼 텍스트를 "분야 삭제"로 변경
  tblWrap.appendChild(newTable);
  var addButton = newTable.querySelector('.btn.file_minus'); // 해당 테이블 내 버튼 선택
  addButton.textContent = "분야 삭제";
  
  tableCounter++; // 테이블 번호를 증가
}

// 파일 input 행을 생성하는 함수
function generateFileRows(numFiles, tableNumber) {
  var fileRows = '';
  for (var i = 1; i <= numFiles; i++) {
    fileRows += `
      <tr class="div_tb_tr fileb">
        <th>
          파일 #${i}
        </th>
        <td class="" colspan="2">
          <label for="upload_btn_${tableNumber}_${i}" class="btn_file">파일선택</label>
          <input type="text" id="file_${tableNumber}_${i}" class="cf_cert_hide" readonly="readonly" placeholder="선택된 파일 없음"/>
          <input type="file" name="file_${tableNumber}_${i}" id="upload_btn_${tableNumber}_${i}" class="" />
        </td>
      </tr>
    `;
  }
  return fileRows;
}

function removeTable(button) {
  var table = button.closest('table'); // 버튼의 가장 가까운 부모 테이블 요소 찾기
  if (table) {
    // 테이블이 존재하면 삭제
    var tblWrap = document.querySelector('.tbl_frm01.tbl_wrap');
    if (table.parentNode == tblWrap) {
      // 부모 노드가 tblWrap인 경우에만 삭제
      tblWrap.removeChild(table);
      tableCounter--; // 테이블이 삭제될 때 테이블 번호 감소
    } else {
      console.log("부모 노드가 일치하지 않습니다.");
    }
  } else {
    console.log("테이블을 찾을 수 없습니다.");
  }
}
</script>

<?php
require_once './admin.tail.php';
