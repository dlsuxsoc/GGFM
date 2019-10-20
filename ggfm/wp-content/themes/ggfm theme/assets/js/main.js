
jQuery(document).ready(function ($) {

  // $('.carousel').slick({
  //   infinite: true,
  //   mobileFirst: true,
  //   dots: true,
  //   arrows: false,
  //   autoplay: true,
  //   autoplaySpeed: 3000,
  //   fade: true,
  //   fadeSpeed: 1000,
  //   adaptiveHeight: true
  // });//carousel

  // $('.single-item').slick({
  //   infinite: true,
  //   dots: true,
  //   arrows: false,
  //   autoplay: true,
  //   autoplaySpeed: 3000,
  //   fade: true,
  //   fadeSpeed: 1000
  // });//carousel

  $(function () {
    $('audio').audioPlayer()
  });


  // $(".dropdown").hide();

  // $('.events-carousel').slick({
  //   infinite: true,
  //   slidesToScroll: 1,
  //   slidesPerRow: 3
  // });

  // var slider = $(".blog-carousel");

  // slider
  //   .slick({
  //     infinite: true,
  //     dots: false,
  //     arrows: false,
  //     slidesToScroll: 1,
  //     slidesPerRow: 1
  //   });

  // $(".blog-overlay").on('wheel', (function (e) {
  //   e.preventDefault();

  //   if (e.originalEvent.deltaX > 0) {
  //     slider.slick('slickNext');
  //   } else {
  //     slider.slick('slickPrev');
  //   }
  // }));

  // var eventslider = $(".events-carousel");

  // $(".events-wrapper").on('wheel', (function (e) {
  //   e.preventDefault();

  //   if (e.originalEvent.deltaX > 0) {
  //     eventslider.slick('slickNext');
  //   } else {
  //     eventslider.slick('slickPrev');
  //   }
  // }));



  // $("body").click((e) => {
  //   if ($(e.target).hasClass("btndropdown")) {
  //     if ($(".dropdown").is(":hidden")) {
  //       $(".dropdown").slideDown("slow");
  //     } else {
  //       $(".dropdown").slideUp("slow");
  //     }
  //   }
  //   else {
  //     if ($(".dropdown").is(":visible")) {
  //       $(".dropdown").slideUp("slow");
  //     }
  //   }
  // })



  //    Radio Talents
  // var dj = ["Bobby", "Charlie", "Ching", "Craig", "Drew", "Floyd", "Franny", "Gabby", "Jamie", "Jules", "Kaps", "Kayla", "Kit",
  //   "Luna", "Micah", "Moka", "Nikki", "Peaches", "Rocky", "Quadro", "Rocky", "RP", "Sundae"]


  // //    Init Carousel

  // // Create div with images
  // for (var i = 0; i < dj.length; i++) {
  //   var img = new Image();
  //   img.src = "assets\\GGFM Photos\\WEB_ DJ Photos\\WEB_DJ-" + dj[i] + ".jpg";
  //   img.className = "slider-image"

  //   var div = document.createElement("div");
  //   div.append(img)
  //   $("#rt-carousel").append(div);
  // }

  // Init slider
  // const slider = $(".rt-slider");
  // slider.slick({
  //   slidesToShow: 7,
  //   slidesToScroll: 1,
  //   cssEase: 'linear',
  //   centerMode: true,
  //   // autoplay: true,
  //   // autoplaySpeed: 2000,

  //   dots: false,
  //   prevArrow: false,
  //   nextArrow: false
  // });



  // slider.click(alert("hello"));

  //  Slick Mouse wheel control
  // slider.on('wheel', (function (e) {
  //   e.preventDefault();

  //   if (e.originalEvent.deltaY < 0) { // || e.originalEvent.deltaX > 0
  //     $(this).slick('slickNext');
  //   } else {
  //     $(this).slick('slickPrev');
  //   }
  // }));

})

