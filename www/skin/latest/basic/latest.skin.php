<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="mainsec3-slider swiper swiper-container">
  <div class="swiper-wrapper">
  <?php for ($i=0; $i<$list_count; $i++) {  ?>
    <div class="mainsec3-sl swiper-slide">
      <a href="<?php echo '/'.$list[$i]['bo_table'].'/'.$list[$i]['wr_id']?>" class="mainsec3-sl-in">
        <div class="mainsec3-sl-cate"><?php if ($list[$i]['bo_table'] == 'news') {echo 'News';} else if ($list[$i]['bo_table'] == 'research') {echo 'Research';} ?></div>
        <div class="mainsec3-sl-txtwr">
          <p class="mainsec3-sl-tit"><?php echo $list[$i]['wr_subject']?></p>
          <p class="mainsec3-sl-txt"><?php echo strip_tags($list[$i]['wr_content']);?></p>
        </div>
        <div class="mainsec3-sl-btm">
          <p class="mainsec3-sl-date"><?php echo date("Y.m.d", strtotime($list[$i]['wr_datetime'])) ?></p>
          <p class="mainsec3-sl-more mainsec-more"><span class="mainsec3-sl-more__txt mainsec-more__txt">Learn more</span><span class="mainsec3-sl-more__icon mainsec-more__icon"><img src="/source/img/icon-arrow_more.png" alt=""></span></p>
        </div>
      </a>
    </div>
    <?php } ?>
  </div>
  <div class="mainsec3-sl-dot-wr mainsec-sl-dot-wr"></div>
</div>
<div class="mainsec3-sl-arrow-wr mainsec-sl-arrow-wr">
  <button type="button" class="mainsec-sl-arrow mainsec3-sl-arrow prev"></button>
  <button type="button" class="mainsec-sl-arrow mainsec3-sl-arrow next"></button>
</div>