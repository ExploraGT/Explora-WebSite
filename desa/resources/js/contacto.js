 $("#js--contact-nav").click(function(){
       $(".js--overlay").fadeIn(1000).css("display", "block");
       $(".js--contact-form").fadeIn(1000).css("display", "block");
        $(".js--header").fadeIn(1000).css("position","absolute");
    });
    
    $("#js--contact-nav1").click(function(){
       $(".js--overlay").fadeIn(1000).css("display", "block");
       $(".js--contact-form").fadeIn(1000).css("display", "block");
        $(".js--header").fadeIn(1000).css("position","absolute");
    });
    
    $('.js--close-icon').click(function(){
        $(".js--overlay").fadeOut(1000);
        $(".js--contact-form").fadeOut(1000);
        $(".js--header").css("position","fixed");
    });