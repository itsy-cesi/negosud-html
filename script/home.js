$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  var windowHeight = $(window).height();
  var documentHeight = $(document).height();

  if (scroll > windowHeight && scroll < windowHeight * 2) {
    $("header a").addClass("link-light");
  } else {
    $("header a").removeClass("link-light");
  }
});
$(document).ready(() => {
  $("#loader").addClass("d-none");
  $("body").removeClass("overflow-hidden");
});
