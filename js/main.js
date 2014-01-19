//DOCUMENT READY


$( document ).ready(function() {
    $("#mobileSwitch").click(function(){
        if ($(this).hasClass("icon-menu")) {
            $(".mobileMenu").css("visibility", "visible").animate({"marginTop": "0px"}, 300);
            $(this).removeClass("icon-menu").addClass("icon-cancel");
        } else if ($(this).hasClass("icon-cancel")) {
            $(".mobileMenu").animate({"marginTop": "-280px"}, 300).css("visible", "hidden");
            $(this).removeClass("icon-cancel").addClass("icon-menu");
        }
    });

});