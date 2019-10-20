$(document).ready(function () {


    //    Radio Talents
    var dj = ["Bobby", "Charlie", "Ching", "Craig", "Drew", "Floyd", "Franny", "Gabby", "Jamie", "Jules", "Kaps", "Kayla", "Kit",
        "Luna", "Micah", "Moka", "Nikki", "Peaches", "Rocky", "Quadro", "Rocky", "RP", "Sundae"]


    //    Init Carousel

    // Create div with images
    for (var i = 0; i < dj.length; i++) {
        var img = new Image();
        img.src = "assets\\GGFM Photos\\WEB_ DJ Photos\\WEB_DJ-" + dj[i] + ".jpg";
        img.className = "slider-image"

        var div = document.createElement("div");
        div.append(img)
        $("#rt-carousel").append(div);
    }

    // Init slider
    const slider = $(".rt-slider");
    slider.slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        cssEase: 'linear',
        centerMode: true,
        // autoplay: true,
        // autoplaySpeed: 2000,

        dots: false,
        prevArrow: false,
        nextArrow: false
    });



    // slider.click(alert("hello"));

    //  Slick Mouse wheel control
    slider.on('wheel', (function (e) {
        e.preventDefault();

        if (e.originalEvent.deltaY < 0) { // || e.originalEvent.deltaX > 0
            $(this).slick('slickNext');
        } else {
            $(this).slick('slickPrev');
        }
    }));

})

