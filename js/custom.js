jQuery(document).ready(function($){
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

/*
  $(".mobile-menu").mmenu({}, {
          selectedClass: "current-menu-item"
      })
      .on( "opening.mm", function() {
          $('#hamburger-icon').addClass('active');
      })
      .on( "closing.mm", function() {
          $('#hamburger-icon').removeClass('active');
      });


  $("#hamburger-icon").click(function() {
       $(".mobile-menu").trigger("open.mm");
  });

  $( ".mm-current .menu-item a").click(function() {
      if (!$(this).hasClass("mm-subopen")) { 
          $(".mobile-menu").trigger("close.mm");
      }
  });



  $(".mobile-menu").find( ".mm-subopen" ).addClass( "mm-fullsubopen" );
*/

  // This will fire when document is ready:
  $(window).resize(function() {
      // This will fire each time the window is resized:
      if($(window).width() >= 960) {
          // if larger or equal
          $('.mobile-menu').css('display','none');
      } else {
          // if smaller
          $('.mobile-menu').css('display','block');
      }
  }).resize(); // This will simulate a resize to trigger the initial run.

});