// Carousel
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
})