(function($){
  // fix sidebar on scroll
  $(window).bind('scroll', function() {
      if ($(window).scrollTop() > 393) {
          $('.sidebar-menu').addClass('fixed');
      }
      else {
          $('.sidebar-menu').removeClass('fixed');
      }
  });

  $(".sidebar-menu").css({'height':($("#content").height()+'px')});
  $(".home-sidebar-menu").css({'height':($("#content").height()+'px')});

  if('.home'){
    $('#header-bar').remove();
  }

  $('div[itemprop="articleBody"] > img[class*="size-full"]').remove();
  $('div[itemprop="articleBody"] > p').attr('style','');
  $('div[itemprop="articleBody"] > p > span').attr('style','');


})(jQuery);