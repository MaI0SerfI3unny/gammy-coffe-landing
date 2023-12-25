// ANCHOR VARIABLES
// ==============================================
let isDesk = $('body').hasClass('desktop'),
  isIE = $('body').hasClass('isIe'),
  menuOpen = false;

let st = $(window).scrollTop(),
  prevSt = st;

window.st = st;

// ANCHOR HEADER SCROLL LISTENER
// ==============================================
var mobile = window.matchMedia('(min-width: 0px) and (max-width: 768px)');
var tablet = window.matchMedia('(min-width: 769px) and (max-width: 1023px)');
var desktop = window.matchMedia('(min-width: 1023px) and (max-width: 1279px)'); // Enable (for mobile)
var desktop_pc = window.matchMedia('(min-width: 1280px)');


//

$(document).ready(function() {
  var $menuToggle = $('#menu__toggle');

  $('#menu__toggle').on('click', function() {
    $('header').css('background-color', '#00B78A');
  })

  $('.menu__box').on('click', function() {
    $menuToggle.prop('checked', !$menuToggle.prop('checked'));
  });

  updateHeaderColor();

  $(window).scroll(function() {
  updateHeaderColor();
  });

  function updateHeaderColor() {
  var scrollTop = $(window).scrollTop();
  var threshold = 100;

  if (scrollTop > threshold) {
    $('header').css('background-color', '#00B78A');
  } else {
    $('header').css('background-color', 'transparent');
  }

  if($menuToggle.prop('checked'))
  {
    $('header').css('background-color', '#00B78A');
  }
  }
});