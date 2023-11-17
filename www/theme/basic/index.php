<?php
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

include_once(G5_THEME_PATH.'/head.php');
?>

<div class="contents_wrap">
  <div id="main">
    <section id="" class="background section mainsec mainsec1">
      <div class="bg"><img src="/source/img/img-mainbg1.png" alt=""></div>
      <div class="main-scroll">
        <div class="main-scroll-in">
          <p class="main-scroll-txt">SCROLL</p>
          <p class="main-scroll-img"><img src="/source/img/icon-scroll.png" alt=""></p>
        </div>
      </div>
      <div class="content-wrapper bgpaper">
        <div class="wrapper">
          <div class="main-in mainsec1-in">
            <div class="mainsec1-txt-wr">
              <h2 class="mainsec1-txt mainsec1-txt-1">
                A <b>Net-Zero</b> Future. <br> Powered by <b>K-Energy.</b>
              </h2>
              <p class="mainsec1-txt mainsec1-txt2">i-SMR leads future energy business and contributes to carbon
                neutrality with eco-friendly energy.</p>
            </div>
            <div class="mainsec1-btn-wr">
              <a href="/video" class="mainsec1-btn">
                <div class="mainsec1-btn-img"><img src="/source/img/icon-playbtn.png" alt=""></div>
                <div class="mainsec1-btn-txt">SMR Video</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="" class="background section mainsec mainsec2">
      <div class="bg"><img src="/source/img/img-mainbg2.png" alt=""></div>
      <div class="content-wrapper">
        <div class="main-in mainsec2-in">
          <div class="wrapper">
          <div class="main-top">
            <div class="main-tit-wr">
              <h2 class="main-tit">About SMR</h2>
              <p class="main-subtit">i-SMR provides safe and eco-friendly energy with abundant human resources and
                technology through various experiences.</p>
              <ul class="category-ul category-ul--main2">
                <li rel="vision" class="category-li active">
                  <button type="button" class="category-btn">Vision</button>
                </li>
                <li rel="energy" class="category-li">
                  <button type="button" class="category-btn">K-Energy</button>
                </li>
                <li rel="history" class="category-li">
                  <button type="button" class="category-btn">History</button>
                </li>
              </ul>
            </div>
            </div>
          </div>
          <div class="mainsec2-sl-container">
            <div id="vision" class="mainsec2-sl-box active">
              <div class="mainsec2-slider swiper swiper-container">
                <div class="swiper-wrapper">
                  <div class="mainsec2-sl swiper-slide">
                    <img src="/source/img/img-mainsec2_sl_vision_1.jpg" alt="" class="mainsec2-sl-bg">
                    <div class="mainsec2-sl-in">
                      <p class="mainsec2-sl-tit">Experienced Energy Solutions Provider</p>
                      <div class="mainsec2-sl-txt-wr">
                        <p class="mainsec2-sl-txt">Carbon-free energy is attracting attention to achieve carbon
                          neutrality
                          and respond to the global climate crisis. As Korea accelerates the transition to clean energy
                          under the policy of reducing greenhouse gas emissions by 40% by 2030, KHNP has been preparing
                          for the future as Korea's representative K-energy company and partner. <br> Korea’s proven
                          zero-carbon energy technology and operational
                          capabilities are It is now providing new strength to countries around the world considering
                          carbon-free energy. Based on the technology and capabilities we have accumulated over
                          decades, we are introducing safer, more economical, and more flexible nuclear energy.</p>
                      </div>
                    </div>
                  </div>
                  <div class="mainsec2-sl swiper-slide">
                    <img src="/source/img/img-mainsec2_sl_vision_2.jpg" alt="" class="mainsec2-sl-bg">
                    <div class="mainsec2-sl-in">
                      <p class="mainsec2-sl-tit">Energy Transition Game-Changer</p>
                      <div class="mainsec2-sl-txt-wr">
                        <p class="mainsec2-sl-txt">Nuclear power is attracting attention as a clean energy source that
                          can
                          replace aging coal-fired power plants, which is one of the issues that must be urgently
                          addressed for carbon neutrality. i-SMR is the optimal alternative to lead the transition to
                          eco-friendly
                          energy by applying the capacity of coal-fired power plants into consideration from the concept
                          design stage, aiming for world-class safety, economic efficiency at the level of large nuclear
                          power plants, and flexibility for flexible operation. As evidenced by the case of K-Nuclear
                          Power Plant successfully
                          supporting the use of clean energy in the UAE, KHNP and Team Korea's technological and
                          business
                          management capabilities will be the driving force behind the successful development of i-SMR,
                          a
                          game changer in eco-friendly energy conversion.</p>
                      </div>
                    </div>
                  </div>
                  <div class="mainsec2-sl swiper-slide">
                    <img src="/source/img/img-mainsec2_sl_vision_3.jpg" alt="" class="mainsec2-sl-bg">
                    <div class="mainsec2-sl-in">
                      <p class="mainsec2-sl-tit">Net-Zero Future Builder</p>
                      <div class="mainsec2-sl-txt-wr">
                        <p class="mainsec2-sl-txt">Due to the global crisis caused by climate change, sustainable urban
                          development is emerging as a key task. KHNP dreams of a city where carbon neutrality and
                          sustainable growth are achieved simultaneously through i-SMR-based net zero city. SSNC is an
                          energy innovation platform that measures sustainable growth of cities through I-SMR-based
                          net-zero energy and industrial competitiveness innovation,
                          It is the CF100 energy mix model that will accelerate the realization of carbon neutrality
                          through efficient urban energy production and utilization. The use of stable distributed power
                          sources centered on highly
                          economical i-SMR reduces energy consumption costs by 30% compared to regular cities, while
                          solving the climate crisis caused by excessive resource consumption and environmental
                          destruction by harmonizing with renewable energy. SSNC, drawing the future of the global net
                          zero era through the
                          present.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mainsec2-sl-arrow-wr mainsec-sl-arrow-wr">
                  <button type="button" class="mainsec-sl-arrow mainsec2-sl-arrow prev"></button>
                  <button type="button" class="mainsec-sl-arrow mainsec2-sl-arrow next"></button>
                </div>
                <div class="mainsec2-sl-dot-wr mainsec-sl-dot-wr"></div>
              </div>
            </div>
            <div id="energy" class="mainsec2-sl-box">
              <div class="mainsec2-slider energy-slider swiper swiper-container">
                <div class="swiper-wrapper">
                  <div class="mainsec2-sl swiper-slide">
                    <img src="/source/img/img-mainsec2_sl_vision_1.jpg" alt="" class="mainsec2-sl-bg">
                    <div class="mainsec2-sl-in">
                      <p class="mainsec2-sl-tit">Capabilities to Complete on Time, within Budget</p>
                      <div class="mainsec2-sl-txt-wr">
                        <p class="mainsec2-sl-txt">The majority of the new-build nuclear projects currently being
                          constructed around the world are being delayed in completion due to a myriad of problems,
                          including first-of-a-kind design issues, faulty materials and equipment, construction quality
                          defects, insufficient early stage design, failure to meet license requirement and weak project
                          management capability. As a result, in some cases, delay has prolonged up to 9 years comparing
                          to the initial plan that incurred huge amount of additional construct costs.</p>
                        <p class="mainsec2-sl-txt">Korea has continuously conducted multiple types of NPP project in a
                          repeated manner mostly without delay and cost overrun. In addition, current projects in UAE
                          are successfully underway in accordance with initially contracted process in contrast to
                          overseas NPP construction project executed by other suppliers in struggle. The prominent
                          performance of Korea is attributable to its vast experience, sophisticatedly fabricated system
                          as well as high -quality management skill.
                        </p>
                        <p class="mainsec2-sl-txt">In particular, Korea could achieve on-time NPP constructions through
                          effective interface management and developments of risk minimization plan based on its
                          long-time model experiences.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="mainsec2-sl swiper-slide">
                    <img src="/source/img/img-mainsec2_sl_vision_2.jpg" alt="" class="mainsec2-sl-bg">
                    <div class="mainsec2-sl-in">
                      <p class="mainsec2-sl-tit">Excellent and Abundant NPP Experience and Capability</p>
                      <div class="mainsec2-sl-txt-wr">
                        <p class="mainsec2-sl-txt">Over the long period of 40 years, Korea has robustly implemented both
                          domestic (30units) and UAE (4 units) NPP projects. So far, it has seamlessly operated the
                          top-notch NPPS in the world by securing diverse technology organizations and reflecting the
                          improvements learned from its previous project operations.
                        </p>
                        <p class="mainsec2-sl-txt">In Korea, KHNP has executed NPP projects under its overall control
                          ranged from planning, selection of applicable technology, engineering, to quality control.
                          This is possible with continuous and intertwined coordination between KHNP and its partner
                          companies which have ample experience and in-depth expertise
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="mainsec2-sl swiper-slide">
                    <img src="/source/img/img-mainsec2_sl_vision_1.jpg" alt="" class="mainsec2-sl-bg">
                    <div class="mainsec2-sl-in">
                      <p class="mainsec2-sl-tit">Abundance of Skilled Manpower
                      </p>
                      <div class="mainsec2-sl-txt-wr">
                        <p class="mainsec2-sl-txt">
                          One of the key to succeed in a project is maintaining sufficient manpower experienced in
                          nuclear power project. In every field of nuclear power project, Korea has secured plenty of
                          skilled experts who can readily put into a new project. The number of engineers is enough to
                          construct as many as 14 units at the same time.
                        </p>
                        <p class="mainsec2-sl-txt">
                          In particular, thanks to repeated NPP construction works, Korea holds a broad labor pool
                          ranged from machinery, electricity, instrumentation/control, tube, civil to quality test that
                          played as a great advantage for the successful i-SMR project.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mainsec2-sl-arrow-wr mainsec-sl-arrow-wr">
                  <button type="button" class="mainsec-sl-arrow mainsec2-sl-arrow prev"></button>
                  <button type="button" class="mainsec-sl-arrow mainsec2-sl-arrow next"></button>
                </div>
                <div class="mainsec2-sl-dot-wr mainsec-sl-dot-wr"></div>
              </div>
            </div>
            <div id="history" class="mainsec2-sl-box">
              <div class="mainsec2-slider swiper swiper-container">
                <div class="swiper-wrapper">
                  <div class="mainsec2-sl swiper-slide">
                    <img src="/source/img/img-mainsec2_sl_vision_1.jpg" alt="" class="mainsec2-sl-bg">
                    <div class="mainsec2-sl-in">
                      <p class="mainsec2-sl-tit">1. Design and construction of HANARO, a research reactor</p>
                      <div class="mainsec2-sl-txt-wr">
                        <p class="mainsec2-sl-txt">Development period: 1985 ~ 1995 (KRW 93.4 billion)</p>
                        <p class="mainsec2-sl-txt">characteristic : <br>
                          - Designing and constructing a research reactor ranked 10th in the world based on neutron flux
                          using our own technology. <br>
                          - World-class multipurpose research, including neutron utilization research, isotope
                          production,
                          and semiconductor production
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="mainsec2-sl swiper-slide">
                    <img src="/source/img/img-mainsec2_sl_vision_2.jpg" alt="" class="mainsec2-sl-bg">
                    <div class="mainsec2-sl-in">
                      <p class="mainsec2-sl-tit">2. Development of Korean standard nuclear reactor (OPR1000)</p>
                      <div class="mainsec2-sl-txt-wr">
                        <p class="mainsec2-sl-txt">Development period: 1986 ~ 1996 (KRW 330 billion)</p>
                        <p class="mainsec2-sl-txt">characteristic : <br>
                          - The first independent large-scale light water reactor model developed through nuclear
                          power
                          technology independence <br> - Twelve OPR1000 series nuclear power plants are currently in
                          operation.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="mainsec2-sl swiper-slide">
                    <img src="/source/img/img-mainsec2_sl_vision_3.jpg" alt="" class="mainsec2-sl-bg">
                    <div class="mainsec2-sl-in">
                      <p class="mainsec2-sl-tit">3. Development of APR1400</p>
                      <div class="mainsec2-sl-txt-wr">
                        <p class="mainsec2-sl-txt">Development period: 1992 ~ 2001 (KRW 235 billion)</p>
                        <p class="mainsec2-sl-txt">characteristic : <br>
                          - A total of 6 nuclear power plants, including Shin-Kori Unit 34, are currently in
                          operation/construction as a 3.5 generation nuclear power plant with enhanced seismic design
                          and increased design life.
                          <br> - Obtained design certification from the US NRC following successful export to UAE
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="mainsec2-sl swiper-slide">
                    <img src="/source/img/img-mainsec2_sl_vision_1.jpg" alt="" class="mainsec2-sl-bg">
                    <div class="mainsec2-sl-in">
                      <p class="mainsec2-sl-tit">4. Development of SMART</p>
                      <div class="mainsec2-sl-txt-wr">
                        <p class="mainsec2-sl-txt">Development period: 1997 ~ Present (KRW 380 billion)</p>
                        <p class="mainsec2-sl-txt">characteristic : <br>
                          - Significant improvement in safety through introduction of integrated nuclear reactor and
                          complete passive safety system
                          <br>- Applicable not only to power generation but also to non-power fields such as seawater
                          desalination and district heating.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="mainsec2-sl swiper-slide">
                    <img src="/source/img/img-mainsec2_sl_vision_2.jpg" alt="" class="mainsec2-sl-bg">
                    <div class="mainsec2-sl-in">
                      <p class="mainsec2-sl-tit">5. Development of very high temperature gas reactor (VHTR)</p>
                      <div class="mainsec2-sl-txt-wr">
                        <p class="mainsec2-sl-txt">Development period: 2004 ~ Present (KRW 135.4 billion)</p>
                        <p class="mainsec2-sl-txt">characteristic : <br>
                          - Hydrogen production • Capable of utilizing process heat, nuclear fuel • 4th generation
                          nuclear
                          power plant with greatly improved core safety
                          <br> - Overseas business technology export (USD 5.56 million)
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="mainsec2-sl swiper-slide">
                    <img src="/source/img/img-mainsec2_sl_vision_3.jpg" alt="" class="mainsec2-sl-bg">
                    <div class="mainsec2-sl-in">
                      <p class="mainsec2-sl-tit">6. Development of Sodium Cooled Fast Reactor (SFR)</p>
                      <div class="mainsec2-sl-txt-wr">
                        <p class="mainsec2-sl-txt">Development period: 1997 ~ Present (KRW 375.7 billion)</p>
                        <p class="mainsec2-sl-txt">characteristic : <br> - Highly toxic and long-lived nuclides in spent nuclear fuel can be converted to short-lived or stable nuclides. <br> - 4th generation nuclear power plant with greatly improved safety in the event of a serious accident
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mainsec2-sl-arrow-wr mainsec-sl-arrow-wr">
                  <button type="button" class="mainsec-sl-arrow mainsec2-sl-arrow prev"></button>
                  <button type="button" class="mainsec-sl-arrow mainsec2-sl-arrow next"></button>
                </div>
                <div class="mainsec2-sl-dot-wr mainsec-sl-dot-wr"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="" class="background section mainsec mainsec3">
      <div class="bg"><img src="/source/img/img-mainbg3.png" alt=""></div>
      <div class="content-wrapper">
        <div class="main-in mainsec3-in">
          <div class="wrapper">
            <div class="main-top">
              <div class="main-tit-wr">
                <h2 class="main-tit">SMR Resources</h2>
                <p class="main-subtit">Check out the various news from i-SMR, which provides eco-friendly energy with safe technology.</p>
              </div>
              <!-- research 페이지 오픈 후 주석 해제 -->
              <!-- <ul class="category-ul category-ul--main3">
                  <li rel="all" class="category-li active">
                    <button type="button" class="category-btn">ALL</button>
                  </li>
                  <li rel="news" class="category-li">
                    <button type="button" class="category-btn">News</button>
                  </li>
                  <li rel="research" class="category-li">
                    <button type="button" class="category-btn">Research</button>
                  </li>
              </ul> -->
            </div>  
            <div class="mainsec3-sl-container">
              <div id="all" class="mainsec3-sl-box active">
                <?php echo latest_all("basic", "news,research", 5, 40);?>
              </div>
              <div id="news" class="mainsec3-sl-box">
                <div class="mainsec3-slider swiper swiper-container">
                  <div class="swiper-wrapper">
                  <?php 
                    $tg_bo_table = 'news';
                    $tg_bo_orderby = ' ORDER BY wr_datetime desc '; //게시글 순서(작성일 최신순)
                    $tg_bo_limit = ' LIMIT 5 '; //게시글 개수 제한(9개)

                    $tg_bo_sql = " SELECT * FROM iu_write_{$tg_bo_table} WHERE wr_id<>'' {$tg_bo_orderby} {$tg_bo_limit} ";
                    $tg_bo_res = sql_query($tg_bo_sql);
                    for($i=0; $tg_bo=sql_fetch_array($tg_bo_res); $i++){
                    ?>
                    <div class="mainsec3-sl swiper-slide">
                      <a href="<?php echo '/'.$tg_bo_table.'/'.$tg_bo['wr_id'].'' ?>" class="mainsec3-sl-in">
                        <div class="mainsec3-sl-cate">News</div>
                        <div class="mainsec3-sl-txtwr">
                          <p class="mainsec3-sl-tit"><?php echo $tg_bo['wr_subject']?></p>
                          <p class="mainsec3-sl-txt"><?php echo strip_tags($tg_bo['wr_content']);?></p>
                        </div>
                        <div class="mainsec3-sl-btm">
                          <p class="mainsec3-sl-date"><?php echo date("Y.m.d", strtotime($tg_bo['wr_datetime'])) ?></p>
                          <p class="mainsec3-sl-more mainsec-more"><span class="mainsec3-sl-more__txt mainsec-more__txt">Learn more</span><span
                              class="mainsec3-sl-more__icon mainsec-more__icon"><img src="/source/img/icon-arrow_more.png" alt=""></span></p>
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
              </div>
              <div id="research" class="mainsec3-sl-box">
                <div class="mainsec3-slider swiper swiper-container">
                  <div class="swiper-wrapper">
                  <?php 
                    $tg_bo_table = 'research';
                    $tg_bo_orderby = ' ORDER BY wr_datetime desc '; //게시글 순서(작성일 최신순)
                    $tg_bo_limit = ' LIMIT 5 '; //게시글 개수 제한(9개)

                    $tg_bo_sql = " SELECT * FROM iu_write_{$tg_bo_table} WHERE wr_id<>'' {$tg_bo_orderby} {$tg_bo_limit} ";
                    $tg_bo_res = sql_query($tg_bo_sql);
                    for($i=0; $tg_bo=sql_fetch_array($tg_bo_res); $i++){
                    ?>
                    <div class="mainsec3-sl swiper-slide">
                      <a href="<?php echo '/'.$tg_bo_table.'/'.$tg_bo['wr_id'].'' ?>" class="mainsec3-sl-in">
                        <div class="mainsec3-sl-cate">Research</div>
                        <div class="mainsec3-sl-txtwr">
                          <p class="mainsec3-sl-tit"><?php echo $tg_bo['wr_subject']?></p>
                          <p class="mainsec3-sl-txt"><?php echo strip_tags($tg_bo['wr_content']);?></p>
                        </div>
                        <div class="mainsec3-sl-btm">
                          <p class="mainsec3-sl-date"><?php echo date("Y.m.d", strtotime($tg_bo['wr_datetime'])) ?></p>
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="" class="background section mainsec mainsec4">
      <div class="bg"><img src="/source/img/img-mainbg4.png" alt=""></div>
      <div class="content-wrapper">
        <div class="main-in mainsec4-in">
          <div class="wrapper">
            <div class="mainsec4-subject">Leading the <b>future energy business</b> and contributing to <b>carbon neutrality with eco-friendly energy.</b></div>
            <ul class="mainsec4-ul">
              <li class="mainsec4-li">
                <a href="javascript:alert('Coming soon.');" class="mainsec4-link">
                  <div class="mainsec4-txtwr">
                    <p class="mainsec4-tit">Information</p>
                    <p class="mainsec4-txt">Do you want to check a lot of information on i-SMR?  Check out the brochure for i-SMR.</p>
                  </div>
                  <p class="mainsec4-more mainsec-more">
                    <span class="mainsec4-more__txt  mainsec-more__txt">Learn more</span>
                    <span class="mainsec4-more__icon  mainsec-more__icon">
                      <img src="/source/img/icon-arrow_more.png" alt=""><img src="/source/img/icon-arrow_more_blue.png" alt="">
                    </span>
                  </p>
                </a>
              </li>
              <li class="mainsec4-li">
                <a href="javascript:alert('Coming soon.');" class="mainsec4-link">
                  <div class="mainsec4-txtwr">
                    <p class="mainsec4-tit">Social Media</p>
                    <p class="mainsec4-txt">Want to check out the various stories of i-SMR? Check out the energy and experience of i-SMR in the video.</p>
                  </div>
                  <p class="mainsec4-more mainsec-more">
                    <span class="mainsec4-more__txt  mainsec-more__txt">Learn more</span>
                    <span class="mainsec4-more__icon  mainsec-more__icon">
                      <img src="/source/img/icon-arrow_more.png" alt=""><img src="/source/img/icon-arrow_more_blue.png" alt="">
                    </span>
                  </p>
                </a>
              </li>
              <li class="mainsec4-li">
                <a href="javascript:alert('Coming soon.');" class="mainsec4-link">
                  <div class="mainsec4-txtwr">
                    <p class="mainsec4-tit">Explorer</p>
                    <p class="mainsec4-txt">Do you want to check the high technology of i-SMR? Check out the competitiveness and technology implemented in 3D.</p>
                  </div>
                  <p class="mainsec4-more mainsec-more">
                    <span class="mainsec4-more__txt  mainsec-more__txt">Learn more</span>
                    <span class="mainsec4-more__icon  mainsec-more__icon">
                      <img src="/source/img/icon-arrow_more.png" alt=""><img src="/source/img/icon-arrow_more_blue.png" alt="">
                    </span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="" class="background section mainsec mainsec5"> <!-- fp-auto-height -->
      <div class="main-foot">
        <?php include_once(G5_THEME_PATH."/tail_content.php"); ?>
      </div>
    </section>

  </div>
  <!-- <div class="main-foot" data-count="0">
    <?php //include_once(G5_THEME_PATH."/tail_content.php"); ?>
  </div> -->
</div>

<script>
  $(document).ready(function () {
    $('.aside-top').attr('href', '#visual')
  });
</script>


<?php
include_once(G5_THEME_PATH.'/tail.php');