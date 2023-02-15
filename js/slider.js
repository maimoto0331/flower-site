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
  //   $('.jump_news').click(function(){
  //     var pos = $(this).attr('href');
  //     var position = $(pos).offset().top;
  //     $('html,body').animate({
  //         'scrollTop':position
  //     },500);
  // });
  });

  $(window).on('load',function() {
 
    $('.jump_btn').click(function(){
      var pos = $(this).attr('href');
      var position = $(pos).offset().top - 120;
      console.log(position);
      $('html,body').animate({
          'scrollTop':position
      },500);
  });
});