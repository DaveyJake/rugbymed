jQuery(document).ready(function($){
  // fix sidebar on scroll
  $(window).bind('scroll', function() {
      if ($(window).scrollTop() > 178) {
          $('#site-navigation').addClass('fixed');
      }
      else {
          $('#site-navigation').removeClass('fixed');
      }
  });

  $(".sidebar-menu").css({'height':($("#content").height()+'px')});
  $(".home-sidebar-menu").css({'height':($("#content").height()+'px')});

  $("#mobile-site-navigation").mmenu({}, {
    selectedClass: "current-menu-item"
  })
    .on( "opening.mm", function() {
      $('#mobile-menu-button').addClass('active');
    })
    .on( "closing.mm", function() {
      $('#mobile-menu-button').removeClass('active');
    });

  $("#mobile-menu-button").click(function() {
    $("#mobile-site-navigation").trigger("open.mm");
    $("i.fa").removeClass("fa-bars").addClass('fa-times');
  });
  $(".fa-times").click(function() {
    $(this).addClass('fa-bars').removeClass("fa-times");
  });

  //  Compose email link, stop spam...
  setTimeout(function() {
    var b = 'usarugby' + '.' + 'org',
      o = 'mkeating',
      t = 'mail' + 'to';

    $('#emaillink').attr( 'href', t + ':' + o + '@' + b );
  }, 1000);

  // This will fire when document is ready:
  $(window).resize(function() {
      // This will fire each time the window is resized:
      if($(window).width() >= 960) {
          // if larger or equal
          $('.mobile-menu').css('display','none');
          $('#main-wrapper').removeClass('mm-page');
          $('#site-navigation').addClass('columns medium-3 large-3');
          $('.content-wrapper').addClass('medium-9 large-9').removeClass('medium-12 large-12');
      } else {
          // if smaller
          $('.mobile-menu').css('display','block');
          $('#main-wrapper').addClass('mm-page');
          $('#site-navigation').css('display','none');
          $('.content-wrapper').addClass('medium-12 large-12').removeClass('medium-9 large-9');
      }
  }).resize(); // This will simulate a resize to trigger the initial run.

});