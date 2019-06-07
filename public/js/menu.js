var app = {
    init : function() {
        app.toggleMenuOnScroll();
    },
    toggleMenuOnScroll : function() {
        let prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            console.log(window.pageYOffset);

            if(window.pageYOffset > 125){
                /*let currentScrollPos = window.pageYOffset;
                if (prevScrollpos > currentScrollPos) {
                    document.getElementById("fatMenu").style.top = "0";
                } else {*/
                    document.getElementById("fatMenu").style.top = "-140px";
/*                }
                prevScrollpos = currentScrollPos;*/
            }
            else{
                document.getElementById("fatMenu").style.top = "0";
            }


        }
    }
}

document.onload = app.init();


