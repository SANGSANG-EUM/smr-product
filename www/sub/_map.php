<?php 
include_once(EUM_INCLUDE_PATH.'/sub_top.php');
?>

<div id="map" class="contents_wrap sub">
  <?php sub_top($sb_menus, 'introduction', 'map'); ?>

  <div class="sub_contents">
    <div class="sub_in map_in-1">
      <div class="container">
        <div class="wrapper">
          <div class="sub_in_ct">
            <div class="map_info">
              <p class="t1">
                <span class="big">Address. </span>
                <span class="sm">대전광역시 유성구 엑스포로 1, 사이언스센터 13층</span>
              </p>
              <p class="t1">
                <span class="big">E-mail. </span>
                <span class="sm">ismr@ismr.kr</span>
              </p>
              <a href="https://kko.to/1gU9PqQUaw" target="_blank" class="map-btn">빠른길 찾기<img src="/source/img/half-arrow-right-white.png" alt=""></a>
            </div>
            <div class="map_ui">
              <div id="daumRoughmapContainer1696988694659" class="root_daum_roughmap root_daum_roughmap_landing"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1696988694659",
		"key" : "2gepz",
		"mapWidth" : "1200",
		"mapHeight" : "520"
	}).render();
</script>