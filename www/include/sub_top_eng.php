<?php
include_once('./_common.php');
include EUM_INCLUDE_PATH.'/menus_eng.php';

function sub_top($sb_menus, $sb_id, $pg_id){
  foreach ($sb_menus as $menu) {
    if ($menu['id'] === $sb_id) {
?>
<section class="sb_top <?php echo $sb_id.'_top';?>">
  <h2 class="sound_only"><?php echo $menu['name']; ?> 페이지</h2>
  <div class="container">
    <div class="wrapper">
      <div class="sb_top_ct">
        <p class="sb_title"><?php echo $menu['name']; ?></p>
        <?php
        $sb_title2 = "";
        foreach ($menu['sb_2menus'] as $menu2) { 
          if ($menu2['id'] === $pg_id) {
            $sb_title2 = $menu2['name'];
            break;
          }
        }
        ?>
        <p class="sb_title2"><?php echo $sb_title2; ?></p>
      </div>
    </div>
  </div>
</section>

<section class="sb_loca <?php echo $sb_id.'_loca';?>">
  <h2 class="sound_only">서브 로케이션 메뉴</h2>
  <div class="container">
    <div class="wrapper">
      <div class="sb_loca_ct">
        <div class="sb_2menus">
          <ul class="<?php echo 'i-col-'.count($menu['sb_2menus']);?> sb_2menus_wrap">
          <?php 
          foreach ($menu['sb_2menus'] as $menu2) {
          ?>
            <li class="<?php echo $menu2['id'] == $pg_id ? 'act':'';?>">
              <a href="<?php echo $menu2['link']; ?>"><?php echo $menu2['name']; ?></a>
            </li>
          <?php 
          } 
          ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
      break;
    }
  }
} 
?>