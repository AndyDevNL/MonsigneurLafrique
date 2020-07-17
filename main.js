// Shorthand for $( document ).ready()
$(function() {
    console.log( "ready!" );
    scrollListenener();
    navToggle();
});

console.log("hello world");


$('.PrimaryMenu li').hover(function() {
  $(this).children('ul').toggleClass('hiddenMenu');
  console.log('hover')
});

function scrollListenener() {
  var $win = $(window),
    scrollTop = 0;

    $win.on('scroll', function () {
      scrollTop = $win.scrollTop();

      if(scrollTop >= 100) {
        $('body').addClass('is-scrolled');
        console.log("is scrolled");
      }
      else {
          $('body').removeClass('is-scrolled');
      }
    })
}

function navToggle() {
  $('.nav-toggle').on('click', function (e) {
    $('body').toggleClass('active-nav');
    e.preventDefault();
  });
}