$(document).ready(function(){
  $('.single-item').slick({
       infinite: true,
	dots: true,
	arrows: false,
	autoplay: true,
	autoplaySpeed: 3000,
	fade: true,
	fadeSpeed: 1000,
  });//carousel
 
 $(function() {
     $('audio').audioPlayer()
 });
    
    
$(".dropdown").hide();

$('.demo').slick({
  infinite: true,
  slidesToScroll: 1,
  slidesPerRow: 3,
    arrows: true
});

var slider = $(".blog-carousel");
    
slider
  .slick({
    infinite: true,
    dots: false,
    arrows: false,
      slidesToScroll: 1,
      slidesPerRow:1
  });
    
$(".blog-overlay").on('wheel', (function(e) {
  e.preventDefault();

  if (e.originalEvent.deltaX > 0) {
    slider.slick('slickNext');
  } else {
    slider.slick('slickPrev');
  }
}));

    
//$("body").click((e)=>{
//   if($(e.target).hasClass("btndropdown")){
//        if($(".dropdown").is(":hidden")){
//            $(".dropdown").slideDown("slow");
//        }else{
//              $(".dropdown").slideUp("slow");
//        }
//    }
//    else{
//        if($(".dropdown").is(":visible")){
//            $(".dropdown").slideUp("slow");
//        }      
//    }
//})
    
})



