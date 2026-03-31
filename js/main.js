$(function () {
  /*=================================================
  ハンバーガ―メニュー
  ===================================================*/
  // // ハンバーガーメニューをクリックした時
  // $(".toggle_btn").on("click", function () {
  //   $("header").toggleClass("open");
  // });
  // // メニューのリンクをクリックした時
  // $('a[href^="#"]').on('click', function () {
  //   $('header').toggleClass('open');
  //   $('.toggle_btn').toggleClass('step-dot');
  // });


  /*=================================================
  menu news タブコンテンツ
  ===================================================*/
  // const tabContainer = document.querySelector(".tab-container");
  // const tabMenuItems = tabContainer.querySelectorAll(".tab-title li");
  // const tabContents = tabContainer.querySelectorAll(".tab-content");

  // tabMenuItems.forEach((tabMenuItem) => {
  //   tabMenuItem.addEventListener("click", () => {
  //     tabMenuItems.forEach((item) => {
  //       item.classList.remove("selected");
  //     });
  //     tabMenuItem.classList.add("selected");

  //     tabContents.forEach((tabContent) => {
  //       tabContent.classList.remove("selected");
  //     });
  //     document.getElementById(tabMenuItem.dataset.id).classList.add("selected");
  //   });
  // });

});

$(function () {
  /*=================================================
  スクロール時のフェード表示
  ===================================================*/
  // スクロール時のイベント
  $(window).scroll(function () {
    // fadeinクラスに対して順に処理を行う
    $(".fadein").each(function () {
      // スクロールした距離
      let scroll = $(window).scrollTop();
      // fadeinクラスの要素までの距離
      let target = $(this).offset().top;
      // 画面の高さ
      let windowHeight = $(window).height();
      // fadeinクラスの要素が画面下にきてから200px通過した
      // したタイミングで要素を表示
      if (scroll > target - windowHeight + 200) {
        $(this).css("opacity", "1");
        $(this).css("transform", "translateY(0)");
      }
    });
  });
});

$(function () {
  /*=================================================
  修正箇所：
  ハンバーガー+ header.open もここで制御
  ===================================================*/
  const DOT_MS = 200;
  const $header = $("header");
  const $btn = $(".toggle_btn");
  let animating = false;

  function openMenu() {
    if (animating) return;
    animating = true;

    // ☰ → ●
    $btn.addClass("step-dot");

    // ● → × + メニューOPEN
    setTimeout(() => {
      $btn.addClass("step-close");
      $header.addClass("open");
      animating = false;
    }, DOT_MS);
  }

  function closeMenu() {
    if (animating) return;
    animating = true;

    // × → ●
    $btn.removeClass("step-close");

    // ● を見せてから閉じる
    setTimeout(() => {
      $header.removeClass("open");

      // ● → ☰
      setTimeout(() => {
        $btn.removeClass("step-dot");
        animating = false;
      }, DOT_MS);
    }, DOT_MS);
  }

  /*=================================================
  クリックイベントの追加
  ===================================================*/
  $btn.on("click", function () {
    // メニュー内のリンクや背景（マスク）をクリックした時も閉じるようにする
    $('a[href^="#"]').on("click", function () {
      if ($header.hasClass("open")) {
        closeMenu();
      }
    });
  });

  // ボタンで開閉(menuのもっと見るボタン)
  $btn.on("click", function (e) {
    e.preventDefault();
    if ($header.hasClass("open")) closeMenu();
    else openMenu();
  });
  const showCount = 4; // 最初に表示する数
  const addCount = 4; // 追加する数

  $(".accordion-list").each(function () {
    const $container = $(this);
    const $list = $container.find(".detail-list li");
    const $moreBtn = $container.find(".more-button");
    const $closeBtn = $container.find(".close-button");

    // 1. 初期表示：showCount番目以降にクラスをつけて隠す
    $list.slice(showCount).addClass("is-hidden");

    // 2. 「もっと見る」クリックイベント
    $moreBtn.on("click", function () {
      // 隠れている要素の中から、次のaddCount分を表示
      $container.find(".is-hidden").slice(0, addCount).removeClass("is-hidden");

      // 全て表示されたらボタンを切り替える
      if ($container.find(".is-hidden").length === 0) {
        $moreBtn.parent().hide(); // 「もっと見る」を隠す
        $closeBtn.parent().show(); // 「閉じる」を表示
      }
    });

    // 3. 「閉じる」クリックイベント
    $closeBtn.on("click", function () {
      // 再び初期状態に戻す
      $list.slice(showCount).addClass("is-hidden");
      $closeBtn.parent().hide();
      $moreBtn.parent().show();

      // リストの先頭へスムーズにスクロール（親切設計）
      $("html, body").animate({ scrollTop: $container.offset().top - 50 }, 500);
    });
  });

  // menuタブ切り替え
  const tabs = document.querySelectorAll(".tab-title li");
  const contents = document.querySelectorAll(".tab-content");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {

      // active切り替え
      tabs.forEach(t => t.classList.remove("selected"));
      tab.classList.add("selected");

      // コンテンツ切り替え
      const id = tab.dataset.id;

      contents.forEach(content => {
        content.classList.remove("selected");
        if(content.id === id){
          content.classList.add("selected");
        }
      });

    });
  });

});

/*=================================================
slick
===================================================*/
jQuery(function($){
  $(".slide-items").slick({
    arrows: false,
    centerMode: true,
    centerPadding: "20%",
    slidesToShow: 3,
    autoplay: true,
    autoplaySpeed: 2500,
    responsive: [
      {
        breakpoint: 900,
        settings: {
          centerPadding: "50px",
          slidesToShow: 1,
        },
      },
    ],
  });
});
