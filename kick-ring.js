$(function(){
  $('a[href^=#]').click(function(){
    var speed = 700;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });

  $('.menu-trigger').on('click',function(){
    if($(this).hasClass('active')){
      $(this).removeClass('active');
      $('main').removeClass('open');
      $('nav').removeClass('open');
      $('.overlay').removeClass('open');
    } else {
      $(this).addClass('active');
      $('main').addClass('open');
      $('nav').addClass('open');
      $('.overlay').addClass('open');
    }
  });
  $('.overlay').on('click',function(){
    if($(this).hasClass('open')){
      $(this).removeClass('open');
      $('.menu-trigger').removeClass('active');
      $('main').removeClass('open');
      $('nav').removeClass('open');
    }
  });
  $('.sp-nav-item').on('click',function(){
    if($('.overlay').hasClass('open')){
      $('.overlay').removeClass('open');
      $('.menu-trigger').removeClass('active');
      $('main').removeClass('open');
      $('nav').removeClass('open');
    }
  });
});
