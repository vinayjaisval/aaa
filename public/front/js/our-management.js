$(function () {
  $('.team_list a').on('click', function (e) {
    e.preventDefault();

    var PopupId = $(this).attr('data-tab');
    $('#' + PopupId).fadeIn();
  });

  $('.close-btn').on('click', function () {
    $(this).parents('.popup_wrap').fadeOut();
  });
});


var owl = $('#staff');
  owl.owlCarousel({
    margin:20,
    dots:true,
    nav: true,
    navText: [
      "<i class='fa fa-chevron-left'></i>",
      "<i class='fa fa-chevron-right'></i>"
    ],
    autoplay: true,
    autoplayHoverPause: true,
    loop:true,
    merge:true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items:3
      },
      1200: {
        items:3
      }
    }
  });