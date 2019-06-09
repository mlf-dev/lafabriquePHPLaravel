var app = {
    init : function() {
        app.toggleMenuOnScroll();
        app.onHoverMiniUnicorn();
    },
    miniUnicorn : $('#miniMenuUnicorn'),
    fatMenu : $('#fatMenu'),
    declencheur : false,
    toggleMenuOnScroll : function() {
        window.onscroll = function() {
            if(window.pageYOffset > 130){
                app.declencheur = true;
                console.log(window.pageYOffset);
                console.log(app.declencheur);
                // app.fatMenu.stop().animate({left: "-1500px"},400, function() {
                app.fatMenu.stop().animate({opacity: 0},400, function() {
                    app.miniUnicorn.stop().animate({
                        left:25
                    },200)
                });
            }else if (window.pageYOffset <= 130){
                app.fatMenu.stop().animate({opacity:1},100);
                // app.fatMenu.stop().animate({left:0},100);
                app.miniUnicorn.stop().animate({
                    left:-100},100);
                app.declencheur = false;
                console.log(window.pageYOffset);
                console.log(app.declencheur);
            }
        }
    },
    onHoverMiniUnicorn : function(){
        app.miniUnicorn.hover( function(){
            // app.fatMenu.stop().animate({left:0},400);
            app.fatMenu.stop().animate({opacity:1},400);
            app.miniUnicorn.stop().animate({
                left:-100},200);
        }, function() {
                app.fatMenu.mouseleave(function(){
                    if (app.declencheur === true) {
                        // app.fatMenu.stop().animate({left: "-1500px"},400, function() {
                        app.fatMenu.stop().animate({opacity: 0},400, function() {
                            app.miniUnicorn.stop().animate({
                                left:25
                            },100)
                        });
                    }
            })
        });
    }
};

document.onload = app.init();



