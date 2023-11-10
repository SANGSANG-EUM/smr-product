
$(document).ready(function () {

  //header scroll
  $(window).scroll(function(){    
    var scroll_act = $(window).scrollTop();      
    if ( scroll_act > 0 ){  
      $(".header").addClass("scroll");
    } else {
      $(".header").removeClass("scroll");
    }  
  });


  //footer overlab up
  $('.mainsec4').on("mousewheel", function (e) {
    if ($('.mainsec4').hasClass('active')) {
      if (e.originalEvent.wheelDelta < 0) {
        $(".main-foot").addClass("on");
      }
    }
  });


  // footer top button
  $('.aside-top').click(function(){
    $('html, body').animate({
      scrollTop : 0
  }, 400);
  })

  // plugin - Fullpage : 메인 풀페이지
  $('#main').fullpage({
    scrollingSpeed: 1000,
    autoScrolling: true,
    fitToSection: true,
    fitToSectionDelay: 2000,
    anchors: ['visual', 'about', 'resources', 'links'],
    // sectionsColor: ['#f2f2f2', '#1BBC9B', '#7E8F7C', '#C63D0F'],
    verticalCentered: false,
    navigation: true,
    navigationPosition: 'right',
    // navigationTooltips: ['Eureka Mediatech', 'About Us', 'What we do', 'Our Work'],
    responsiveWidth: 900,
    onLeave: function (index, nextIndex, direction) {
      if (!$(".main-foot").hasClass("on")) {
        // .main-foot에 on 클래스가 없을 때만 아래 코드 실행
        if (direction == "up") {
          $(".section").removeClass("down");
          $(".section").removeClass("next");
          $(".section").removeClass("prev");
          $("#main .section:nth-child(" + nextIndex + ")").addClass("up");
          $("#main .section:nth-child(" + nextIndex + ")").next().addClass("next up");
          $("#main .section:nth-child(" + nextIndex + ")").prev().addClass("prev up");
        } else {
          $(".section").removeClass("up");
          $(".section").removeClass("next");
          $(".section").removeClass("prev");
          $("#main .section:nth-child(" + nextIndex + ")").addClass("down");
          $("#main .section:nth-child(" + nextIndex + ")").next().addClass("next down");
          $("#main .section:nth-child(" + nextIndex + ")").prev().addClass("prev down");
        }
        console.log('direction :' + direction + ', nextIndex : ' +  nextIndex + ', Index : ' +  index);
      } else {
        console.log('aaa');
        $("#main .section").removeClass("down");
        $("#main .section").removeClass("up");
        $("#main .section").removeClass("next");
        $("#main .section").removeClass("prev");
        // $("#main .mainsec").addClass("none");
      }
    }
    ,
    'afterLoad': function (anchorLink, index) {
      if (index == 4) {

      }
    }
  });



  // 메인 섹션 2 : 스와이퍼 슬라이드
  $('.category-ul--main2 .category-btn').on('click', function () {

    let main2Cate = $(this).closest('.category-li');
    let main2Box = main2Cate.attr('rel');

    $('.category-ul--main2 .category-li').removeClass('active');
    main2Cate.addClass('active');

    $('.mainsec2-sl-box').removeClass('active');
    $('#' + main2Box).addClass('active');


    swiperConfigurations2.init();
    swiperConfigurations2.update();

  });

  function createSwiper2(selector, delay) {
    return new Swiper(selector, {
      draggable: true,
      slidesPerView: "auto",
      spaceBetween: 120,
      centeredSlides: true,
      loop: true,
      speed: 1000,
      observer: true,
      observeParents: true,
      observeSlideChildren: true,
      autoplay: {
        delay: delay,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: `${selector} .mainsec2-sl-arrow.next`,
        prevEl: `${selector} .mainsec2-sl-arrow.prev`,
      },
      pagination: {
        el: `${selector} .mainsec2-sl-dot-wr`,
        clickable: true,
      },
    });
  }

  const swiperConfigurations2 = [{
      selector: '#vision .mainsec2-slider',
      delay: 15000
    },
    {
      selector: '#energy .mainsec2-slider',
      delay: 15000
    },
    {
      selector: '#history .mainsec2-slider',
      delay: 15000
    },
  ];

  swiperConfigurations2.forEach((config) => {
    createSwiper2(config.selector, config.delay);
  });


  // 메인 섹션 3 : 스와이퍼 슬라이드
  $('.category-ul--main3 .category-btn').on('click', function () {

    let main3Cate = $(this).closest('.category-li');
    let main3Box = main3Cate.attr('rel');

    $('.category-ul--main3 .category-li').removeClass('active');
    main3Cate.addClass('active');

    $('.mainsec3-sl-box').removeClass('active');
    $('#' + main3Box).addClass('active');


    swiperConfigurations3.init();
    swiperConfigurations3.update();

  });

  function createSwiper3(id, delay) {
    const selector = `${id} .mainsec3-slider`;
    return new Swiper(selector, {
      draggable: true,
      slidesPerView: 3,
      spaceBetween: 45,
      // centeredSlides: true,
      loop: true,
      speed: 1000,
      observer: true,
      observeParents: true,
      observeSlideChildren: true,
      autoplay: {
        delay: delay,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: `${id} .mainsec3-sl-arrow.next`,
        prevEl: `${id} .mainsec3-sl-arrow.prev`,
      },
      pagination: {
        el: `${id} .mainsec3-sl-dot-wr`,
        clickable: true,
      },
    });
  }

  const swiperConfigurations3 = [{
      id: '#all',
      delay: 15000
    },
    {
      id: '#news',
      delay: 15000
    },
    {
      id: '#research',
      delay: 15000
    },
  ];

  swiperConfigurations3.forEach((config) => {
    createSwiper3(config.id, config.delay);
  });



  // plugin - Match Height
  if ($('.m-height').length > 0) {
    $('.m-height > *').matchHeight();
  }

}); //End Document