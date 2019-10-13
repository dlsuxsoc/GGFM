$(document).ready(function(){


    //    Radio Talents
        var dj = ["Bobby", "Charlie", "Ching", "Craig", "Drew", "Floyd", "Franny", "Gabby", "Jamie", "Jules", "Kaps", "Kayla", "Kit",
                  "Luna", "Micah", "Moka", "Nikki", "Peaches", "Rocky", "Quadro", "Rocky", "RP", "Sundae"]
    
    
    //    Init Carousel
    
        // Create div with images
        for(var i = 0; i < dj.length; i++){
            var img = new Image();
            img.src = "assets\\GGFM Photos\\WEB_ DJ Photos\\WEB_DJ-" + dj[i] + ".jpg";
            img.className = "rta-img"
    
            var name = document.createElement("p");
            name.className = "rta-name";
            name.innerHTML = dj[i];

            var div = document.createElement("div");
            div.className = "rt-div"
            div.append(img)
            div.append(name)
            $(".rt-grid").append(div);
        }
        
        $(".rt-grid").append("<div style = 'height: 50px; width: 100%'></div>");
    })
        
      