jQuery(document).ready(function($){
  
  $('.single-item').slick({
       infinite: true,
       mobileFirst:true,
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

$('.events-carousel').slick({
  infinite: true,
  slidesToScroll: 1,
  slidesPerRow: 3
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

var eventslider = $(".events-carousel");
    
$(".events-wrapper").on('wheel', (function(e) {
  e.preventDefault();

  if (e.originalEvent.deltaX > 0) {
    eventslider.slick('slickNext');
  } else {
    eventslider.slick('slickPrev');
  }
}));
    
$("body").click((e)=>{
   if($(e.target).hasClass("btndropdown")){
        if($(".dropdown").is(":hidden")){
            $(".dropdown").slideDown("slow");
        }else{
              $(".dropdown").slideUp("slow");
        }
    }
    else{
        if($(".dropdown").is(":visible")){
            $(".dropdown").slideUp("slow");
        }      
    }
})
    
})

