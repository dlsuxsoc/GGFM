$(document).ready(function(){
  $('.single-item').slick({
       infinite: true,
	dots: true,
	arrows: false,
	autoplay: true,
	autoplaySpeed: 3000,
	fade: true,
	fadeSpeed: 1000

  });//carousel
 
 $(function() {
     $('audio').audioPlayer()
 });
    
$('.demo').slick({
  infinite: true,
  slidesToScroll: 1,
  slidesPerRow: 3,
    arrows: true
});
		
})
