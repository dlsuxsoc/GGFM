
jQuery(document).ready(function ($) {
  function toggle() {
    $('.nav-resp').css('top', $('.header-input').prop('checked') ? '-100%' : '0')
    $('body').css('overflowY', $('.header-input').prop('checked') ? 'auto !important' : 'hidden !important')
    $('.header-input').toggle()

  }
  $('.header-burger').on('click', function () {
    toggle()
  })
  $('.close-icon').on('click', function () {
    toggle()
  })

  // Nav Bar

  // Blogs
  $('.carousel').slick({
    infinite: true,
    mobileFirst: true,
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
    fadeSpeed: 1000,
    adaptiveHeight: true,
    slidesPerRow: 3
  });//carousel



  $(".dropdown").hide();

  // Events

  $('.events-carousel').slick({
    infinite: false,
    slidesToScroll: 3,
    slidesPerRow: 3
  });

  var eventslider = $(".events-carousel");

  $(".events-wrapper").on('wheel', (function (e) {
    e.preventDefault();

    if (e.originalEvent.deltaX > 0) {
      eventslider.slick('slickNext');
    } else {
      eventslider.slick('slickPrev');
    }
  }));

  $("body").click((e) => {
    if ($(e.target).hasClass("btndropdown")) {
      if ($(".dropdown").is(":hidden")) {
        $(".dropdown").slideDown("slow");
      } else {
        $(".dropdown").slideUp("slow");
      }
    }
    else {
      if ($(".dropdown").is(":visible")) {
        $(".dropdown").slideUp("slow");
      }
    }
  })

  $(".item").click((e) => {
    var sortby = e.target.innerText;

  })


})

