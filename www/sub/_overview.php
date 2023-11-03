<?php 
include_once(EUM_INCLUDE_PATH.'/sub_top.php');


function getSystemData($select="", $opt, $res="", $order="") {
  $data = [];

  if($select == "") {
    $select = "*";
  }

  if($order != "") {
    $od_opt = " ORDER BY {$order} ";
  } else {
    "";
  }
  $sf_sql = " SELECT {$select} FROM system_file WHERE (1) {$opt} {$od_opt} ";
  
  if($res == "fetch") {
    $sf_res = sql_fetch($sf_sql);
  } else {
    $sf_res = sql_query($sf_sql);
  }
  
  $data = $sf_res;
  
  return $data;
}
?>

<div id="overview" class="contents_wrap sub">
  <?php sub_top($sb_menus, 'business', 'overview'); ?>

  <div class="sub_contents">
    <div class="sub_in overview_in-1">
      <div class="container">
        <div class="wrapper">
          <div class="sub_in_ct">
            <div class="ov_cir_wrap">
              <div class="ov_cir-big act">
                <div class="ov_cir-small">
                  <p class="t1">사업목표</p>
                </div>
              </div>
              <div class="ov_cir-big">
                <div class="ov_cir-small">
                  <p class="t1">2025년</p>
                  <p class="t2">표준설계 <br/>완료</p>
                </div>
              </div>
              <div class="ov_cir-big">
                <div class="ov_cir-small">
                  <p class="t1">2026년</p>
                  <p class="t2">상세 설계 및 <br/>사업 준비</p>
                </div>
              </div>
              <div class="ov_cir-big">
                <div class="ov_cir-small">
                  <p class="t1">2028년</p>
                  <p class="t2">표준설계 <br/>인가 획득</p>
                </div>
              </div>
              <div class="ov_cir-big">
                <div class="ov_cir-small">
                  <p class="t1">2031년</p>
                  <p class="t2">첫번째 원자로 <br/>모듈 완성</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sub_in overview_in-2">
      <div class="container">
        <div class="wrapper">
          <div class="sub_in_ct">
            <div class="sub_title_box">
              <p class="sub_title">정부사업기간</p>
            </div>
            <div class="gray_wrap ov_period_wrap">
              <div class="m-height ov_period_inner">
                <div class="ov_period_year">
                  <p class="t1">2023년</p>
                  <div class="bar c1 w1 row1">
                    <span class="bar-txt">기본설계</span>
                  </div>
                  <div class="bar c2 w6_1 row3">
                    <span class="bar-txt">혁신기술 및 제조</span>
                  </div>
                </div>
                <div class="ov_period_year">
                  <p class="t1">2024년</p>
                  <div class="bar c2 w2 row2">
                    <span class="bar-txt">표준설계</span>
                  </div>
                </div>
                <div class="ov_period_year">
                  <p class="t1">2025년</p>
                </div>
                <div class="ov_period_year">
                  <p class="t1">2026년</p>
                  <div class="bar c2 w3 row2">
                    <span class="bar-txt">인허가</span>
                  </div>
                </div>
                <div class="ov_period_year">
                  <p class="t1">2027년</p>
                </div>
                <div class="ov_period_year">
                  <p class="t1">2028년</p>
                </div>
              </div>
              <ul class="i-col-0 ov_period_center">
                <li class="ov_period_center-txt c1">한수원</li>
                <li class="ov_period_center-txt c2">정부과제</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sub_in overview_in-3">
      <div class="container">
        <div class="wrapper">
          <div class="sub_in_ct">
            <div class="sub_title_box">
              <p class="sub_title">사업예산</p>
            </div>
            <div class="gray_wrap ov_budget_wrap">
              <p class="ov_budget-total"><strong>3,992</strong>억원</p>
              <div class="ov_budget_inner">
                <div class="ov_budget-cir cir1">
                  <p class="t1">과학기술정보통신부</p>
                  <p class="t2">1510.5</p>
                </div>
                <div class="ov_budget-cir cir2">
                  <p class="t1">민간</p>
                  <p class="t2">1245</p>
                </div>
                <div class="ov_budget-cir cir3">
                  <p class="t1">산업부</p>
                  <p class="t2">1236.8</p>
                </div>
                <div class="ov_budget-cir cir4">
                  <p class="t1">현금</p>
                  <p class="t2">776.4</p>
                </div>
                <div class="ov_budget-cir cir5">
                  <p class="t1">현물</p>
                  <p class="t2">486.6</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sub_in overview_in-4">
      <div class="container">
        <div class="wrapper">
          <div class="sub_in_ct">
            <div class="sub_title_box">
              <p class="sub_title">개발 추진 체계</p>
              <p class="sub_expl">혁신형 소형모듈원자로 개발의 全분야를 설계, 혁신기술, 제조기술의 3개 내역사업으로 구분하고, 내역사업별 중점분야 및 세부과제를 구성</p>
            </div>
            <div class="ov_pdf_wrap"></div>
              <?php 
                $title_opt = " GROUP BY sf_title ";
                $title_od = " sf_order ASC ";
                $title_res = getSystemData("sf_title", $title_opt, "",  $title_od);

                for($i=0; $sf_row = sql_fetch_array($title_res); $i++) { ?>
                  <div class="ov_pdf_box">
                    <div class="ov_pdf_head">
                      <p class="ov_pdf_title"><?php echo $sf_row['sf_title']?></p>
                    </div>
                    <div class="ov_pdf_body">
                      
                    <?php 
                      $sub_opt = " AND sf_title = '{$sf_row['sf_title']}' GROUP BY sf_subtitle ";
                      $sub_od = " sf_suborder ASC ";
                      $sf_sub_res = getSystemData("sf_subtitle", $sub_opt, "",  $sub_od);
                      for($j=0; $sf_sub_row = sql_fetch_array($sf_sub_res); $j++) { 
                    ?>
                      <div class="ov_pdf_inner">
                        <p class="ov_pdf_subject"><?php echo $sf_sub_row['sf_subtitle'] ?></p>
                        <div class="ov_pdf_list">

                        <?php 
                          $file_opt = " AND  sf_title = '{$sf_row['sf_title']}' AND sf_subtitle = '{$sf_sub_row['sf_subtitle']}' ";
                          $file_od = " sf_no ASC ";
                          $sf_file_res = getSystemData("", $file_opt, "",  $file_od);
                          
                          for($k=0; $sf_file_row = sql_fetch_array($sf_file_res); $k++) {
                          $parts = explode('.', $sf_file_row['sf_source']); 
                          $extension = array_pop($parts);
                          $file_name = implode('.', $parts);
                        ?>
                          <div class="ov_pdf_item">
                            <a href="<?php echo G5_DATA_URL."/file/pdf/{$sf_file_row['sf_file']}" ?>" class="ov_pdf_link" download="<?php echo $sf_file_row['sf_source']; ?>"><?php echo $file_name; ?></a>
                          </div>
                        <?php } ?>
                        
                        </div>
                      </div>
                    <?php } ?>

                    </div>
                  </div>  
              <?php } ?>

              <!-- 제조기술 -->
              <!-- <div class="ov_pdf_box">
                <div class="ov_pdf_head">
                  <p class="ov_pdf_title">제조기술</p>
                </div>
                <div class="ov_pdf_body">
                  <div class="ov_pdf_inner">
                    <p class="ov_pdf_subject">부품/소재</p>
                    <div class="ov_pdf_list">
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">노심부품소재</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>   -->
              <!-- // 제조기술 -->
              <!-- 설계 -->
              <!-- <div class="ov_pdf_box">
                <div class="ov_pdf_head">
                  <p class="ov_pdf_title">설계</p>
                </div>
                <div class="ov_pdf_body">
                  <div class="ov_pdf_inner">
                    <p class="ov_pdf_subject">노심</p>
                    <div class="ov_pdf_list">
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">노심해석기술</a>
                      </div>
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">노심설계기술</a>
                      </div>
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">노심운영기술</a>
                      </div>
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">기타노심기술</a>
                      </div>
                    </div>
                  </div>
                  <div class="ov_pdf_inner">
                    <p class="ov_pdf_subject">계통</p>
                    <div class="ov_pdf_list">
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">핵심기기</a>
                      </div>
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">유체계통</a>
                      </div>
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">MMIS 계측제어</a>
                      </div>
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">기타 계통설계</a>
                      </div>
                    </div>
                  </div>
                  <div class="ov_pdf_inner">
                    <p class="ov_pdf_subject">종합설계</p>
                    <div class="ov_pdf_list">
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">배치 및 구조 설계</a>
                      </div>
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">BOP 계통 및 방사선 방호</a>
                      </div>
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">시공 및 사업관리</a>
                      </div>
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">PSA/ 중대사고</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>   -->
              <!-- // 설계 -->
              <!-- 혁신기술 -->
              <!-- <div class="ov_pdf_box">
                <div class="ov_pdf_head">
                  <p class="ov_pdf_title">혁신기술</p>
                </div>
                <div class="ov_pdf_body">
                  <div class="ov_pdf_inner">
                    <p class="ov_pdf_subject">검증</p>
                    <div class="ov_pdf_list">
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">노심검증</a>
                      </div>
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">열수력 검증</a>
                      </div>
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">계통기기검증</a>
                      </div>
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">모듈통합검증</a>
                      </div> 
                    </div>
                  </div>
                  <div class="ov_pdf_inner">
                    <p class="ov_pdf_subject">경제성</p>
                    <div class="ov_pdf_list">
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">유지보수 및 운전기기</a>
                      </div>
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">계측제어기술</a>
                      </div>
                    </div>
                  </div>
                  <div class="ov_pdf_inner">
                    <p class="ov_pdf_subject">안전성</p>
                    <div class="ov_pdf_list">
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">원자력전산해석</a>
                      </div>
                      <div class="ov_pdf_item">
                        <a href="" class="ov_pdf_link">계통 및 기기 안전성 </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>   -->
              <!-- // 혁신기술 -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>