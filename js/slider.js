$(function() {
    $('.slider').slick({
      autoplay: true, // 自動再生を設定
      autoplaySpeed: 4000, // 自動再生のスピード（ミリ秒単位）
      dots: true // ドットインジケーターの表示
    });

    $('.js-pagetop').click(function(){
        $('html,body').animate({
            'scrollTop':0
        },500);
    });
  });