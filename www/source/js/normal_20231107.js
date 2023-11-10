$(document).ready(function () {

  //header scroll
  $(window).scroll(function () {
    var scroll_act = $(window).scrollTop();
    if (scroll_act > 0) {
      $(".header").addClass("scroll");
    } else {
      $(".header").removeClass("scroll");
    }
  });

  // footer top button
  $('.aside-top').click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 400);
  })

  // plugin - Fullpage : 메인 풀페이지
  $('#main').fullpage({
    scrollingSpeed: 1000,
    autoScrolling: true,
    fitToSection: true,
    fitToSectionDelay: 2000,
    anchors: ['visual', 'about', 'resources', 'links', 'footer'],
    // sectionsColor: ['#f2f2f2', '#1BBC9B', '#7E8F7C', '#C63D0F'],
    verticalCentered: false,
    navigation: true,
    navigationPosition: 'right',
    // navigationTooltips: ['Eureka Mediatech', 'About Us', 'What we do', 'Our Work'],
    responsiveWidth: 900,
    onLeave: function (index, nextIndex, direction) {
      if (!$(".main-foot").hasClass("on")) { // .main-foot에 on 클래스가 없을 때
        if (direction == "up") {
          // console.log('up');
          $(".section").removeClass("up");
          $(".section").removeClass("down");
          $(".section").removeClass("next");
          $(".section").removeClass("prev");
          $("#main .section:nth-child(" + nextIndex + ")").addClass("up");
          $("#main .section:nth-child(" + nextIndex + ")").next().addClass("next up");
          // $("#main .section:nth-child(" + nextIndex + ")").prev().addClass("prev up");
        } else {
          // console.log('down');
          $(".section").removeClass("up");
          $(".section").removeClass("down");
          $(".section").removeClass("next");
          $(".section").removeClass("prev");
          $("#main .section:nth-child(" + nextIndex + ")").addClass("down");
          // $("#main .section:nth-child(" + nextIndex + ")").next().addClass("next down");
          $("#main .section:nth-child(" + nextIndex + ")").prev().addClass("prev down");
        }
      }
      if (direction == "down" && index == 4) {
        let ftHeight = $(".main-foot").outerHeight();
        $(".mainsec4").css("animation-name", "toup2");
        // $("#main .section").removeClass("down");
        // $("#main .section").removeClass("up");
        // $("#main .section").removeClass("next");
        // $("#main .section").removeClass("prev");
      }

      console.log('direction :' + direction + ', nextIndex : ' + nextIndex + ', Index : ' + index);
    },
    'afterLoad': function (anchorLink, index) {
      if (index == 4) {
        // $('.mainsec4').on("mousewheel", function (e) {
        //   if (e.originalEvent.wheelDelta < 0) {
        //     $(".main-foot").addClass("on");
        //     $("#main .section").removeClass("down");
        //     $("#main .section").removeClass("up");
        //     $("#main .section").removeClass("next");
        //     $("#main .section").removeClass("prev");
        //   }
        // });
      }
    }
  });

  //footer overlab up
  // $('.mainsec4').on("mousewheel", function (e) {
  //   if ($('.mainsec4').hasClass('active')) {
  //     if (e.originalEvent.wheelDelta < 0) {
  //       $(".main-foot").addClass("on");
  //     }
  //   }
  // });


  // 메인 섹션 2 : 스와이퍼 슬라이드

  function initSwiper2(selector, delay) {

    const mySwiper = createSwiper2(selector, delay);

    mySwiper.init();
    mySwiper.update();

    return mySwiper;
  }

  $('.category-ul--main2 .category-btn').on('click', function () {

    let main2Cate = $(this).closest('.category-li');
    let main2Box = main2Cate.attr('rel');

    $('.category-ul--main2 .category-li').removeClass('active');
    main2Cate.addClass('active');

    $('.mainsec2-sl-box').removeClass('active');
    $('#' + main2Box).addClass('active');

    createSwiper2('#' + main2Box + ' .mainsec2-slider', 15000);


    // initSwiper2('#' + main2Box + ' .mainsec2-slider', 15000);

    // swiperConfigurations2.init();
    // swiperConfigurations2.update();

  });

  function createSwiper2(selector, delay) {

    // 이전 Swiper 인스턴스 파괴
    const container = document.querySelector(selector);
    if (container) {
      const swiperInstance = container.swiper;
      if (swiperInstance) {
        swiperInstance.destroy(true, true);
      }
    }

    return new Swiper(selector, {
      draggable: true,
      slidesPerView: "auto",
      spaceBetween: 120,
      centeredSlides: true,
      loop: true,
      loopedSlides: 6,
      speed: 1000,
      observer: true,
      observeParents: true,
      observeSlideChildren: true,
      // autoplay: {
      //   delay: delay,
      //   disableOnInteraction: false,
      // },
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

    createSwiper3('#' + main3Box, 15000)

    // swiperConfigurations3.init();
    // swiperConfigurations3.update();

  });

  function createSwiper3(id, delay) {

    const selector = `${id} .mainsec3-slider`;

    // 이전 Swiper 인스턴스 파괴
    const container = document.querySelector(selector);
    if (container) {
      const swiperInstance = container.swiper;
      if (swiperInstance) {
        swiperInstance.destroy(true, true);
      }
    }

    return new Swiper(selector, {
      draggable: true,
      slidesPerView: 3,
      spaceBetween: 45,
      // centeredSlides: true,
      loop: true,
      loopedSlides: 10,
      speed: 1000,
      observer: true,
      observeParents: true,
      observeSlideChildren: true,
      // autoplay: {
      //   delay: delay,
      //   disableOnInteraction: false,
      // },
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